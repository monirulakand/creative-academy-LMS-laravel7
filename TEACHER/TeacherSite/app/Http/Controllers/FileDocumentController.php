<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\FileDocModel;

class FileDocumentController extends Controller
{
    function FileDocumentIndex(){
        return view('FileDocument');
    }

    function getFileDocumentData(){
        $result=json_decode(FileDocModel::orderBy('id','desc')->get());
        return $result;
    }


    function FileDocumentDelete(Request $req){
        $id=$req->input('id');
        $result=FileDocModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getFileDocumentDetails(Request $req){
        $id=$req->input('id');
        $result=FileDocModel::where('id','=',$id)->get();
        return $result;
    }


    function FileDocumentAdd(Request $req){
        $title=$req->input('title');

        $filePath=$req->file('doc_url')->store('public');
        $fileName=(explode('/',$filePath))[1];

        $host=$_SERVER['HTTP_HOST'];
        $doc_url="http://".$host."/storage/".$fileName;

        $result= FileDocModel::insert([
            'title'=>$title,
            'doc_url'=>$doc_url,
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
