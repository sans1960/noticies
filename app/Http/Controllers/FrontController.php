<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;


class FrontController extends Controller
{
    public function index(){
    $blogs = Post::all();
      return view('blog',compact('blogs'));
    }
    public function show(Post $blog){
        return view('post',compact('blog'));
    }

}
