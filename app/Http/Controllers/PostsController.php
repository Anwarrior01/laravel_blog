<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('blog.index')->with('posts', Post::orderBy('title', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|mimes:jpg,png,jpeg|max:5048'
            ]
        );
        $slug = Str::slug($request->title, '-');
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        Post::create(
            [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => $slug,
                'image_path' => $newImageName,
                'user_id' => auth()->user()->id,
            ]
        );
return redirect('/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
