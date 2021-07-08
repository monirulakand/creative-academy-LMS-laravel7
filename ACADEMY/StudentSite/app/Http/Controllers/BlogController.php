<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BlogModel;

class BlogController extends Controller
{

    function AllBlog(){
        $blogView= BlogModel::all();
        return view('Page.blog',[
            'blogView'=>$blogView
        ]);
    }

    function BlogDetails(Request $request){
        $id=$request->id;
        $blogDetails=BlogModel::where(['id'=>$id])->get();

        return view('Page.blogDetailsPage',[
            'blogDetails'=>$blogDetails
        ]);
    }
}
