<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    // 新着ページ用　一覧表示
    public function newsIndex(){
        $articles = Article::select('*')->orderBy('id','desc')->get();
        return view('news',compact('articles'));
    }

    // Top用　一覧表示
        public function newsIndexTop(){
        $articles = Article::select('*')->orderBy('id','desc')->get();
        return view('layouts.topbase',compact('articles'));
    }
}
