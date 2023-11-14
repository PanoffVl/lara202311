<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class Posts extends Controller
{
  public function index()
  {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
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
    return redirect()->route('posts.show', [$post->id]);
  }

  public function show(string $id)
  {
    $post = Post::findOrFail($id);
    return view('posts.show', compact('post'));
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
