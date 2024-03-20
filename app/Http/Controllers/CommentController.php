<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
        public function showCommentForm($id)
        {
            // dd($id->all());
            return view('Comment',compact('id'));
        }
        public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You need to log in to add a post.');
        }
        
        $request->validate([
            'body' => 'required|string',
            'post_id' => 'required|exists:posts,id',
        ]);

        $comment = new Comment();
        $comment->content = $request->body;
        $comment->user_id = auth()->user()->id; // Assuming you're using authentication
        $comment->post_id = $request->post_id;
        $comment->save();

        return back()->with('success', 'Comment added successfully.');
    }
    public function view()
    {
        $comments = comment::paginate(10);

        // Pass the post data to the view
        return view('comment', compact('comments'));
    }
}
