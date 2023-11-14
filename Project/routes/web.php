<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    if(true)
        return redirect()->route('aboutMe');
    else
        return "<h1>Sorry...!</h1>";
});

Route::get("/user/{id}",function($id){
    return "User ID is <b>".$id."</b>";
});

Route::get("/KRGI/Technology/cseb-krct",function(){
    return "Nithin from K Ramakrishnan College of Technology";
})->name('aboutMe');

Route::group(['prefix'=>'admin'],function(){
    Route::get("/KRCT",function(){
        return "K Ramakrishnan College of Technology";
    });

    Route::get("/KRCE",function(){
        return "K Ramakrishnan College of Engineering";
    });
});

