<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class Posts extends Controller
{
    public function index()
    {
      $posts = [['id'=>1], ['id'=>2]];
      return view('posts.index', [
        'posts' => $posts,
        'some' => 100
      ]);
    }

    // public function create()
    // {
        
    // }

    // public function store(Request $request)
    // {
        
    // }

    // public function show(string $id)
    // {
        
    // }

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
