<?php

use Illuminate\Support\Facades\Route;
Route::get('/est', function(){


    return view('sort.index');
});

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        // 'localeSessionRedirect',
        // 'localizationRedirect',
        // 'localeViewPath',
    ])


    ->group(function () {

        Route::get('/', 'WelcomeController@index')->name('welcome');

        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/test' , function(){

           return response()->json([
                'name' => 'mostafa  Khaled             ',
                'score' => '12',
            ]);
        });

        Auth::routes();



    });


