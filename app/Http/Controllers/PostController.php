<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller implements HasMiddleware
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

    use AuthorizesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    use AuthorizesRequests;

    public function index()
    {
        $posts = Post::with('user')->orderByDesc('created_at')->paginate(6);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10048',
        ]);

        $path = null;

        if ($request->hasFile('image')) {
            // Stocke le fichier dans storage/app/public/posts
            $path = $request->file('image')->store('posts', 'public');

            // Important : stocker le chemin relatif (ex: "posts/filename.jpg")
            $validatedData['image'] = $path;
        }

        Post::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $validatedData['image'] ?? null,  // Utilise le champ validé
            'user_id' => auth()->id(),
        ]);


        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $this->authorize('modify', $post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('modify', $post);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $this->authorize('modify', $post);

        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Post deleted successfully.');
    }
}
