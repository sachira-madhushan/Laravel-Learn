<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index(){
        $ninjas=Ninja::all();
        return view('home.home',['heros'=>$ninjas]);
    }
}
