<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware for the controller.
     *
     * @return array
     */
    public static function middleware(): array
    {
        return [
            'auth'
        ];
    }
 


    public function index()
    {
        // Logic for the dashboard can be added here
        $posts = Auth::user()->posts()->orderByDesc('created_at')->paginate(6);
        return view('users.dashboard', compact('posts'));
    }

    public function userPosts( User $user)
    {
        $posts = Post::where('user_id', $user->id)->paginate(6);
        // Logic to show a specific post can be added here
        return view('users.posts', compact('user', 'posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('dashboard')->with('success', 'Post deleted successfully.');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('posts.show', $post)->with('success', 'Post updated successfully.');

     
       
    }
}

