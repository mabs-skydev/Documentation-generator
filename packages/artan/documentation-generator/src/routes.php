<?php

    Route::get('/docs', 'DocumentationController@index')->name('documentation_home');
    Route::get('/docs/{page}', 'DocumentationController@page')->name('documentation_page');