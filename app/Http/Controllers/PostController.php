<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index(Request $request)
  {
    $query = $request->get('query');
    if (!empty($query)) {
      $posts = \App\Post::where('body', 'like', "%{$query}%")->orderBy('id', 'desc')->get();
    }
    else {
    $posts = \App\Post::orderBy('id', 'desc')->get();
    }
    return \View::make('posts.index')
             ->with('posts', $posts)
             ->with('query', $query);
  }
}
