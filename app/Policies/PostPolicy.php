<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    public function modify(User $user, Post $post)
    {
        if ($user->id === $post->user_id) {
            return Response::allow();
        }
        
        abort(403, 'You do not own this post.');
    }
}
