<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $data = $request->all();

        $comment = new Comment();
        $comment->fill($data);
        $comment->save();

        return redirect('');
    }
}
