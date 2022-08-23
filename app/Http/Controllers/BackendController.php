<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    //   public function dashboard(){
    //     return "aaaaaa";
    // }
    public function dashboard(){
        return view('blackend.pages.dashboard');
    }
}
