<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PagesController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('pages.index', compact('posts'));
    }

    public function about() {
        $posts = Post::orderBy('created_at','DESC')->get();

        return view('pages.about',compact('posts'));
    }
    public function management() {
        $posts = Post::orderBy('created_at','DESC')->get();

        return view('pages.management',compact('posts'));
    }
    
}
