<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
   public function index()
   {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
   }
   public function Show($slug)
   {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
   }
}
