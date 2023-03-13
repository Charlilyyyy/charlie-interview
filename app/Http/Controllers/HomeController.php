<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function data(){
        $maindatas = Input::all();
        return $maindatas;
    }
}
