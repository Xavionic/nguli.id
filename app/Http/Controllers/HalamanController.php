<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home(){
        return view('admin.index');
    }

    public function front(){
        return view('front.utama');
    }

    // public function input(){
    //     return view('input');
    // }


}
