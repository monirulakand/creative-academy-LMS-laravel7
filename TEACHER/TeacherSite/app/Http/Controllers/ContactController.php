<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ContactModel;

class ContactController extends Controller
{
    function ContactIndex(){
        return view('Contact');
    }

    function getContactData(){
        $result=json_decode(ContactModel::orderBy('id','desc')->get());
        return $result;
    }

}
