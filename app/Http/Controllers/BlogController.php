<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    // 利用者サイト表示用----------------------------------------------------------
    // 新着ページ用　一覧表示
    public function newsIndex()
    {
        $articles = Article::select('*')->orderBy('id', 'desc')->get();
        return view('news', compact('articles'));
    }

    // Top用　一覧表示
    public function newsIndexTop()
    {
        $articles = Article::select('*')->orderBy('id', 'desc')->get();
        return view('layouts.topbase', compact('articles'));
    }


    // 管理画面用----------------------------------------------------------
    //トップページ 投稿リスト
    public function indexAdminTop()
    {

        $articles = Article::select('*')->orderBy('id', 'desc')->get();
        return view('admin.admintop', compact('articles'));
    }

    //トップページ 投稿リスト
    public function index()
    {

        $articles = Article::select('*')->orderBy('id', 'desc')->get();
        return view('admin.index', compact('articles'));
    }


    //編集ページ呼出し
    public  function edit(Request $request)
    {
        //dd($request->all());
        $article = Article::find($request->edit_id);
        return view('admin.edit', compact('article'));
    }

    //削除ページ呼出し
    public  function delete(Request $request)
    {
        //dd($request->all());
        $article = Article::find($request->delete_id);
        return view('admin.delete', compact('article'));
    }

    //新規登録処理 画像保存・アップロード
    public function create(Request $request)
    {

        // 画像を保存する用のディレクトリ名を自作
        // プロジェクトフォルダ直下のstorage>app>public>uploadに画像保存される
        $dir = 'upload';
        
        // アップロードされたファイル名を取得
        $file_name = $request->file('item_img')->getClientOriginalName();

        // 取得したファイル名のまま、uploadディレクトリに画像保存
        $request->file('item_img')->storeAs('public/' . $dir, $file_name);

        //dd($request->all());
        $article = new Article();
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->body = $request->body;
        $article->item_img = $file_name;
        // $article->img_path = 'storage/' . $dir . '/' . $file_name;
        $article->save();

        return redirect('/admin-news');
    }

    // public function upload(Request $request)
    // {
    //     // 画像を保存する用のディレクトリ名を自作
    //     // プロジェクトフォルダ直下のstorage>app>public>uploadに画像保存される
    //     $dir = 'upload';
        
    //     // アップロードされたファイル名を取得
    //     $file_name = $request->file('item_img')->getClientOriginalName();

    //     // 取得したファイル名のまま、uploadディレクトリに画像保存
    //     $request->file('item_img')->storeAs('public/' . $dir, $file_name);

    //     // ファイル情報をDBに保存
    //     $image = new Article();
    //     $image->item_img = $file_name;
    //     $image->img_path = 'storage/' . $dir . '/' . $file_name;
    //     $image->save();

    //     return redirect('/admin-news');
    // }


    //変更保存処理
    public function change(Request $request)
    {
        //dd($request->all());
        $article = Article::find($request->change_id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return redirect('/admin-news');
    }

    //削除処理
    public function del_data(Request $request)
    {
        //dd($request->all());
        Article::destroy($request->delete_id);

        return redirect('/admin-news');
    }
}
