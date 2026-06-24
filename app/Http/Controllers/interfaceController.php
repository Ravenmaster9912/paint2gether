<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class interfaceController extends Controller
{
    public function index(){
        return view('room');
    }

    public function test(){
        return view('test');
    }

    public function room(){
        return view('room');
    }
}
