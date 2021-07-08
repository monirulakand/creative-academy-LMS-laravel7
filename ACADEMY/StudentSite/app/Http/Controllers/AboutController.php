<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function AboutIndex(){
        return view('Page.about');
    }
}
