<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index',[
            "title" => "Index",
            "posts" => Post::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create', [
            'title' => 'Add a Post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create($request->all());
        return redirect('/')->with('status', 'New Post Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('show', [
            "title" => Post::where('title', $post->title)->get(),
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('edit', [
            "title" => "Edit A Post",
            "post" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::where('id', $post->id)->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('/')->with('status', 'The Post Succesfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
