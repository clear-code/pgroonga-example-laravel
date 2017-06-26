<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index(Request $request)
  {
    $posts = \App\Post::orderBy('id', 'desc')->get();
    return \View::make('posts.index')
             ->with('posts', $posts);
  }
}
