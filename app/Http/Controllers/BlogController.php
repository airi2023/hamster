<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    // 利用者サイト表示用----------------------------------------------------------
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


    // 管理画面用----------------------------------------------------------
    //トップページ 投稿リスト
    public function indexAdminTop(){

        $articles = Article::select('*')->orderBy('id','desc')->get();  
        return view('admin.admintop', compact('articles'));
    }

    //トップページ 投稿リスト
    public function index(){

        $articles = Article::select('*')->orderBy('id','desc')->get();  
        return view('admin.index', compact('articles'));
    }


    //編集ページ呼出し
    public  function edit(Request $request) {
        //dd($request->all());
        $article = Article::find($request->edit_id);
        return view('admin.edit', compact('article'));
    }

    //削除ページ呼出し
    public  function delete(Request $request) {
        //dd($request->all());
        $article = Article::find($request->delete_id);
        return view('admin.delete', compact('article'));
    }

    //新規登録処理
    public function create(Request $request) {
        //dd($request->all());
        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return redirect('/');
    }

    //変更保存処理
    public function change(Request $request) {
        //dd($request->all());
        $article = Article::find($request->change_id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return redirect('/');
    }

    //削除処理
    public function del_data(Request $request) {
        //dd($request->all());
        Article::destroy($request->delete_id);

        return redirect('/');
    }
}
