<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        // $user = auth()->user();
        // $post->user_id = $user->id;
        $post->save();
        return redirect('/')->with('msg', 'Post criado no marketplace!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('detail-post', ['post' => $post]);
    }
    
     public function dashboard()
    {
        $user = auth()->user();
        $role = Auth::user()->role;

        if($role=="1") {
            $posts = Post::all();

            return view('admin.post-board', ['posts' => $posts]);
        }
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect('admin.post-board');
    }

    
    /*public function edit($id)
    {
        $market = Market::findOrFail($id);

        return view('/dashboard', ['market' => $market]);
    }*/


    public function update(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $requestImage = $request->img;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('/img/discos'), $imageName);

            $data['img'] = $imageName;
        }


        Post::findOrFail($request->id)->update($data);

        return redirect('admin.dashboard');
    }

}
