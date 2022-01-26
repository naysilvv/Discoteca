<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $search = request('search');

        if ($search) {
            $posts = Post::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        }

        $posts = Post::simplePaginate(10);

        return view('posts', ['posts' => $posts, 'search' => $search, 'showPagination' => is_null($search)]);
    }

    public function create()
    {
        $user = auth()->user();
        $role = Auth::user()->role;

        if ($role == "1") {
            return view('admin.cadastroPost');
        }
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
        $user = auth()->user();
        $post->user_id = $user->id;
        $post->save();
        return redirect('/');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $postOwner = User::where('id', $post->user_id)->first();
        return view('detail-post', ['post' => $post, 'postOwner' => $postOwner]);
    }

    public function dashboard()
    {
        $user = auth()->user();
        $role = Auth::user()->role;

        if ($role == "1") {
            $posts = Post::all();

            return view('admin.post-board', ['posts' => $posts]);
        }
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect('/post-dashboard');
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $post = Post::findOrFail($request->id);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {

            $destination = public_path('/img/posts/' . $post->img);

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $requestImage = $request->img;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('/img/posts'), $imageName);

            $data['img'] = $imageName;
        }

        Post::findOrFail($request->id)->update($data);

        return redirect('/post-dashboard');
    }
}
