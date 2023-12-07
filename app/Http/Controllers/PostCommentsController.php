<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;


class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'body' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
    public function edit( Comment $comment)
    {
        return view('edit', ['comment' => $comment]);

        //return view('comments.edit', ['comment' => $comment]);
    }



    public function update( Comment $comment, Request $request)
    {
        $data = $request->validate([
            'body' => 'required'
        ]);


        $comment->update($data);


        return redirect('/');

    }

    public function destroy(Comment $comment)
    {

        $comment->delete();

      return back();

    }
}
