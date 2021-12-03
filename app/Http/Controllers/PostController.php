<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function discoSearch()
    {
        $busca = request('search');

        return view('discos', ['busca' => $busca]);
    }

    public function discoView($id = null)
    {
        return view('disco', ['id' => $id]);
    }
}
