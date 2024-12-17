<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mgunwardhanas',function(){
    return view('mgunawardhana.index');
});