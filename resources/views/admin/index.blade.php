<x-admin-layout>
    @extends('admin.admintop')
    <x-slot name="title">ブログ一覧</x-slot>
    
    <x-slot name="slot">
    
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                  <h1>ブログ一覧</h1>
                </div>
                <div class="col-12">
                <p><a href="./new" class="btn btn-primary">新規追加</a></p>
                  @foreach ($articles as $article)
                  <div class="card mb-2">
                    <div class="card-body">
                      <h4 class="card-title">{{ $article->title }}</h4>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $article->updated_at }}</h6>
                      <p class="card-text">{!!nl2br(e($article->body))!!}</p>
                      <form method="post" action="./edit" style="display:inline">
                      @csrf
                      <input type="hidden" name="edit_id" value="{{ $article->id }}">
                      <button class="btn btn-sm btn-outline-secondary" type="submit">修正</button>
                      </form>
                      <form method="post" action="./delete" style="display:inline">
                      @csrf
                      <input type="hidden" name="delete_id" value="{{ $article->id }}">
                      <button class="btn btn-sm btn-outline-secondary" type="submit">削除</button>
                      </form>                  
                    </div>
                  </div>
                  @endforeach
                </div>
            </div>
        </div>
    
    </x-slot>
    </x-admin-layout>
    