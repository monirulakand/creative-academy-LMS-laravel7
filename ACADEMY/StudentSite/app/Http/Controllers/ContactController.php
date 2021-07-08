<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ContactModel;


class ContactController extends Controller
{
    function ContactIndex(){
        return view('Page.contact');
    }

    function ContactSend(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $massage=$req->input('massage');

        $result=ContactModel::insert([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'massage'=>$massage,
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
