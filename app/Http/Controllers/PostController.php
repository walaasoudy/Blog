<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $postsfromdb=post::all();


        return view('posts.index',['posts'=>$postsfromdb]);
    }
    public function show(post $post)
    {

        return view('posts.show', ['post' =>$post]);

    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        // Create a new post
        $post = new Post();
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
        $post->save();

        // Redirect to the posts index with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }


    public function update(Request $request, Post $post)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
    ]);

    $post->update($validatedData);

    return redirect()->route('posts.show', $post->id)->with('success', 'Post updated successfully!');
}



public function destroy(Post $post)
{
    // Delete the post from the database
    $post->delete();

    // Redirect to the posts index
    return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
}

}
