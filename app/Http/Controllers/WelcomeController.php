<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::inRandomOrder()->limit(20)->get();
        $category = DB::table('categories');

        return view('welcome', compact( 'posts', 'category'));
    }
}
