<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LogoutController extends Controller
{
    function onLogout(Request $request){
        $request->session()->flush();
        Cookie::queue(Cookie::forget('token'));
        Cookie::queue(Cookie::forget('name'));
        return redirect('/');
    }
}
