<?php

use Illuminate\Support\Facades\Route;

//returning the welcome.blade.php view
Route::get('/', function () {
    return view('welcome');
});


Route::get('/get-and-set',function(){
    $personDetails = [
        ["id" => "1", "name" => "Row", "email" => "row@gmail.com", "phone" => "+94713458333"],
        ["id" => "2", "name" => "Rex", "email" => "rex@gmail.com", "phone" => "+94233458765"],
        ["id" => "3", "name" => "Rexy", "email" => "sample@gmail.com", "phone" => "+94713458765"]
    ];

    return view('person.index', ["greeting" => "hi", "persons" => $personDetails]);
});

Route::get('/get-and-set/create', function () {
    return view('person.create');
});

Route::get('/get-and-set/{id}',function($id){
    return view('person.show', ["id" => $id]);
});
