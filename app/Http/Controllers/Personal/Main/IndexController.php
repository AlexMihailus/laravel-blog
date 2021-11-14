<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class IndexController extends Controller
{
    public function __invoke()
    {
        // $data = [];
        // $data['commentCount'] = Comment::all()->count();

        $likedCount = auth()->user()->likedPosts->count();
        $commentsCount = auth()->user()->comments->count();
        return view('personal.main.index', compact('likedCount', 'commentsCount'));
    }
}
