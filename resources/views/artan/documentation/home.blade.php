@extends('artan.documentation.layout')

@section('content')
<section class="welcome">

        <div class="row">
            <div class="col-md-12 left-align">
                <h2 class="dark-text">Introduction<hr></h2>
                <div class="row">

                    <div class="col-md-12 full">
                        <div class="intro1">
                            <ul>
                                <li><strong>Application name : </strong>{{ Config::get('documentation-generator.introduction.app_name') }}</li>
                                <li><strong>Item Version : </strong> v {{ Config::get('documentation-generator.introduction.app_version') }}</li>
                                <li><strong>Author  : </strong> <a href="{{ Config::get('documentation-generator.introduction.author') }}" target="_blank">{{ Config::get('documentation-generator.introduction.author_link') }}</a></li>
                                <li><strong>Support Forum : </strong> <a href="{{ Config::get('documentation-generator.introduction.support_link') }}" target="_blank">{{ Config::get('documentation-generator.introduction.support') }}</a></li>
                                <li><strong>License : </strong> <a href="#" target="_blank">{{ Config::get('documentation-generator.introduction.license') }}</a></li>
                            </ul>
                        </div>

                        <hr>
                        <div>
                            <p>
                                {{ Config::get('documentation-generator.app_name') }}
                            </p>

                            <h4>Requirements</h4>
                            <p>{{ Config::get('documentation-generator.requiremenet.description') }}</p>
                            <ol>
                                @foreach (Config::get('documentation-generator.requiremenet.requirements') as $single_requirement)
                                    <li>{{ $single_requirement }}</li>
                                @endforeach
                            </ol>
                            <div class="intro2 clearfix">
                                <p><i class="fa fa-exclamation-triangle"></i> {{ Config::get('documentation-generator.requiremenet.cautions.main_caution') }}
                                    @foreach (Config::get('documentation-generator.requiremenet.cautions.secondary_cautions') as $secondary_caution)
                                        <br> {{ $secondary_caution }}
                                    @endforeach
                                    <br> 
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->
            </div>
        </div>
    </section>  
@endsection