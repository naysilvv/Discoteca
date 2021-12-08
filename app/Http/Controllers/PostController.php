<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $search = request('search');
        
        if ($search) {
            $posts = Post::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $posts = Post::all();
        }
        return view('posts', ['posts' => $posts, 'search' => $search]);
    }

    public function create()
    {
        return view('cadastroPost');
    }

    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $requestImage = $request->img;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/posts'), $imageName);

            $post->img = $imageName;
        }

        $post->save();

        return redirect('/');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('detail-post', ['post' => $post]);
    }
}
