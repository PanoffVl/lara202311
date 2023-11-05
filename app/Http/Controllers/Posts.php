<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class Posts extends Controller
{
    public function index()
    {
      $posts = Post::all();
      return view('posts.index', [
        'posts' => $posts
      ]);
    }

    // public function create()
    // {

    // }

    // public function store(Request $request)
    // {

    // }

     public function show(string $id)
     {
         $post = Post::findOrFail($id);
         return view('posts.show', [
             'post' => $post
         ]);
     }

    // public function edit(string $id)
    // {

    // }

    // public function update(Request $request, string $id)
    // {

    // }

    // public function destroy(string $id)
    // {

    // }
}
