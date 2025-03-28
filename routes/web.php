<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/home",[NinjaController::class,'index']);

Route::get("/hero/{id}",function($id){

    $heros=[
        ["name"=>"mario","skill"=>75],
        ["name"=>"ben10","skill"=>80]
    ];

    return view('home.show',["heros"=>$heros,"id"=>$id]);
});
