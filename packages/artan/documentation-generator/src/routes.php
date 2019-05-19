<?php

    Route::get('/docs', 'Artan\Documentationgenerator\Controllers\DocumentationController@index')
        ->name('documentation_home');
    Route::get('/docs/{page}', 'Artan\Documentationgenerator\Controllers\DocumentationController@page')
        ->name('documentation_page');