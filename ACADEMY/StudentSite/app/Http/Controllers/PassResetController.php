<?php

namespace App\Http\Controllers;

use App\Model\StudentListModel;
use Illuminate\Http\Request;
class PassResetController extends Controller
{
    function onReset(Request $req) {
        $phone= $req->input('mobile');
        $oldPass= $req->input('oldPass');
        $newPass= $req->input('newPass');

        $count= StudentListModel::where('phn','=',$phone)->where('pass','=',$oldPass)->count();

        if($count==0){
            return "AccountNotExist";
        }
        else if($count>0){
            $result=StudentListModel::where('phn','=',$phone)->where('pass','=',$oldPass)->update(['pass'=>$newPass]);
            if($result==true){
               return 1; 
            }
            else{
                return 0;
            }
        }
        else{
            return 0;
        }
    }
}
