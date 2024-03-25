<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;


class CommentController extends Controller
{
        public function showCommentForm($id)
        {
            if (!auth()->check()) {
                return redirect()->route('login')->with('error', 'You need to log in to add a post.');
            }
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
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You need to log in to add a post.');
        }
        $comments = comment::paginate(10);

        // Pass the post data to the view
        return view('comment', compact('comments'));
    }

    // CommentController.php

    public function getPostComments($postId)
    {
        $post = Post::findOrFail($postId);
        $comments = $post->comments()->paginate(10); // Adjust the pagination as needed
        return response()->json($comments);
    }

}
