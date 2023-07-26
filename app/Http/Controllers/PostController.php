<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function preview()
    {
        $posts = Post::latest()->get();
        return view('post.preview')->with('posts', $posts);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $newImageName = time() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $newImageName
        ]);

        
        return redirect(route('post.preview'));
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.preview')->with('success', 'Postarea a fost ștearsă cu succes.');
    }

    public function readmore(Post $post){
        return view('post.readmore')->with('post',$post);
    }

    public function edit(Post $post){
        return view('post.edit')->with('post', $post);
    }
    public function update(Request $request , Post $post){
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        if ($request->image) {
            $newImageName = time() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            $post->image = $newImageName;
        }
        $post->save();
        return redirect()->route('post.preview')->with('success',' Update success!');
    }
}
