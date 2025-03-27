<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/home",function(){

    $heros=[
        ["id"=>0,"name"=>"mario","skill"=>75],
        ["id"=>1,"name"=>"ben10","skill"=>80]
    ];

    return view('home.home',["greeting"=>"hello","heros"=>$heros]);
});

Route::get("/hero/{id}",function($id){

    $heros=[
        ["name"=>"mario","skill"=>75],
        ["name"=>"ben10","skill"=>80]
    ];

    return view('home.show',["heros"=>$heros,"id"=>$id]);
});
