<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function show($id) {
        $post = Post::find($id);

        return view('show', compact('post'));
    }
}
