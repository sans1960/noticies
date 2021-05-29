<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;


class FrontController extends Controller
{
    public function blog(){
      $posts = Post::all();
      return view('blog',compact('posts'));
    }

}
