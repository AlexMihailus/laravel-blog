<?php

namespace App\Http\Controllers\Personal\liked;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {

        return view('personal.liked.index');
    }
}