<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostIndexUserController extends Controller
{
    public function __invoke(User $user)
    {
        return PostResource::collection(Post::latest()->where(['user_id' => $user->id])->paginate(20));
    }
}
