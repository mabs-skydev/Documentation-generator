<?php

namespace Artan\DocumentationGenerator\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index()
    {
        return view('artan.documentation.home');
    }

    public function page($page)
    {
        return view()->first(["artan.documentation.pages.{$page}", 'artan.documentation.home']);
    }
}
