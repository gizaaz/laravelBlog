<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->paginate(5);

        return view('blog', compact('posts', $posts));
    }

    public function getCategoryPosts(Request $request)
    {
        $posts = DB::table('posts')
            ->where('category_id',$request->id)
            ->paginate(5);

        return view('blog', compact('posts', $posts));
    }
}
