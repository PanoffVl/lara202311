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

  public function create()
  {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'title' => 'required|min:5|max:64',
      'content' => 'required|min:10|max:1000',
    ]);

    $post = Post::create($validated);
    return redirect("/posts/{$post->id}"); // stupied, use named routes
  }

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
