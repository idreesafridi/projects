<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('index', compact('posts'));
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->search;

        // Search in the title and body columns from the posts table using the search value
        $posts = Post::where(function($query) use ($search) {
            $query->where('title', 'LIKE', "%$search%")
                ->orWhere('description', 'LIKE', "%$search%");
        })
         ->orWhereHas('user',function($query) use ($search) {
             $query->where('name','LIKE', "%$search%");

         })->paginate(10);
         return view( 'index' ,compact('posts','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You need to log in to add a post.');
        }
        // Validate form data
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            
        ]);

        // Create a new post instance
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = auth()->user()->id; // Assign the current user's ID
        $post->save();

        return redirect()->back()->with('success', 'Post added successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('addpost');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   
    public function destroy(Post $post)
    {
        //
    }
}
