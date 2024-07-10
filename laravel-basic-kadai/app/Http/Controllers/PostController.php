<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        //postsテーブルのデータを取得して、変数$postsに代入
        $posts = DB::table('posts')->get();

        // 変数$postsをposts/index.blade.phpに渡す
        return view('posts.index', compact('posts'));
    }
}
