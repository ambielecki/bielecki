<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BieleckiController extends Controller
{
    public function getHome(){
        return view('bielecki.home');
    }

    public function getMLL(){
        return view('bielecki.mll');
    }
}
