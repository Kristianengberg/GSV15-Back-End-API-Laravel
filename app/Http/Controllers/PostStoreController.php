<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostStoreController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function __invoke(Request $request)
    {

        $this->validate($request, [
            'body' => 'required'
        ]);

        $post = auth()->user()->posts()->create([
            'body' => $request->body
        ]);


        return new PostResource($post);
    }
}
