<?php

namespace Artan\DocumentationGenerator\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

use GrahamCampbell\Markdown\Facades\Markdown;

use Config;
use File;

class DocumentationGenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'documentation:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will generate doumentation template from MD files';

    protected $documentation_pages_path;
    protected $documentation_sidebar_path;
    protected $folder_path;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->documentation_pages_path = resource_path('views/artan/documentation/pages');
        $this->documentation_sidebar_path = resource_path('views/artan/documentation/partials/_sidebar.blade.php');
        $this->folder_path  =   Config::get('documentation.folder_name');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {        
        $files = $this->init();
        
        foreach ($files as $file) {
            if($file){
                $html = $this->generateHtml($this->folder_path.'/'.$file);
    
                if($html){
                    $file_name = str_replace(['.md', '.md.php', '.md.blade.php'], '', $file);
                    
                    $this->buildView($file_name, $html);
                    $this->addToSideBar($file_name);
                }
            }
        }

        $this->info("Complete generating blade files");
    }

    /**
     * Init the project.
     *
     * @return array
     */
    private function init(){
        $process = new Process('ls public\\' . $this->folder_path .' | grep .md');
        $process->run();

		if (!$process->isSuccessful()) {
            $this->error(" There's no MarkDown files ! ");
        }else{
            if(file_exists($this->documentation_pages_path)){
                $this->removeDirectory($this->documentation_pages_path);
                mkdir($this->documentation_pages_path, 0777, true);
            }else{
                mkdir($this->documentation_pages_path, 0777, true);
            }

            $this->addToSideBar('home', 'documentation_home', false);
        }

        return explode("\n", $process->getOutput());
    }

    /**
     * Generate html from md files.
     *
     * @return void
     */
    private function generateHtml($file)
    {
        $formated_md  =  [];
            
        $file_content = file(public_path($file));
        
        foreach ($file_content as $line) {    
            if(strpos($line, '<a name=') === false){
                $formated_md[] = Markdown::convertToHtml(trim(str_replace(["\r", "\n"], ' ', $line)));
            }else {
                $formated_md[] = $line;
            }
        }
        
        return $formated_md;
    }

    /**
     * Build views from html template.
     *
     * @return void
     */
    private function buildView($file_name, $html)
    {

        $this->comment("Generating html for {$file_name}");

        $file_path = $this->documentation_pages_path.'\\' . $file_name .'.blade.php';

        file_put_contents($file_path, "@extends('artan.documentation.layout')".PHP_EOL , FILE_APPEND | LOCK_EX);
        file_put_contents($file_path, "@section('content')".PHP_EOL , FILE_APPEND | LOCK_EX);
        file_put_contents($file_path, "<h2 class='dark-text'>" . ucfirst($file_name) ."<hr></h2>".PHP_EOL , FILE_APPEND | LOCK_EX);
        //
        foreach ($html as $line) {
            file_put_contents($file_path, $line.PHP_EOL , FILE_APPEND | LOCK_EX);
        }

        file_put_contents($file_path, "@endsection".PHP_EOL , FILE_APPEND | LOCK_EX);
    }

    /**
     * Add sections to the template's sidebar.
     *
     * @return void
     */
    private function addToSideBar($single, $route_name = 'documentation_page', $append = true)
    {
        $text = ucfirst($single);
        $link = ($route_name == 'documentation_page') ? 
                '{{ route("' . $route_name .'", ["page" => "'. $single .'"]) }}'
                : '{{ route("' . $route_name .'") }}';
        $line = "<li><a href='{$link}'>{$text}</a></li>";

        if($append){
            file_put_contents($this->documentation_sidebar_path, $line.PHP_EOL , FILE_APPEND | LOCK_EX);
        }else{
            file_put_contents($this->documentation_sidebar_path, $line.PHP_EOL);
        }
    }

    /**
     * Remove path directory.
     *
     * @return mixed
     */
    private function removeDirectory($path)
    {
        $files = glob($path . '/*');

        foreach ($files as $file) {
            is_dir($file) ? removeDirectory($file) : unlink($file);
        }

        rmdir($path);
        
        return;
    }
}
