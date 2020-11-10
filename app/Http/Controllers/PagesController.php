<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\DocumentCategories;

class PagesController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories = DocumentCategories::all();

        return view('pages.index', compact('posts','categories'));
    }

    public function about() {
        $posts = Post::orderBy('created_at','DESC')->get();
        $categories = DocumentCategories::all();

        return view('pages.about',compact('posts','categories'));
    }
    public function management() {
        $posts = Post::orderBy('created_at','DESC')->get();
        $categories = DocumentCategories::all();

        return view('pages.management',compact('posts','categories'));
    }
    public function basic() {
        $posts = Post::orderBy('created_at','DESC')->get();
        $categories = DocumentCategories::all();

        return view('pages.basic',compact('posts','categories'));
    }
    
}
