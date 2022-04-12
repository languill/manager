<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        $userName = Auth::user()->name;
        $posts = Post::all();

        $currentDate = Carbon::now();
        $date =  $currentDate->toDateTimeString();

        return view('admin.index', compact('userName', 'posts', 'date'));
    }
}
