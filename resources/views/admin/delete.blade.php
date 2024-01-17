<x-admin-layout>
    <x-slot name="title">ブログ削除</x-slot>
    
    <x-slot name="slot">
    
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h1>ブログ削除</h1>
                </div>
                <div class="col-12">
                  <form method="post" action="./del_data">
                    @csrf
                    <input type="hidden" name="delete_id" value="{{ $article->id }}">
                    <div class="form-group mb-3">
                      <label for="titleInput">タイトル</label>
                      <input type="text" class="form-control" id="titleInput" name="title" readonly value="{{ $article->title }}">
                    </div>
                    <div class="form-group mb-3">
                      <label for="bodyInput">内容</label>
                      <textarea class="form-control" id="bodyInput" rows="8" name="body" readonly>{{ $article->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="add" value="add">削除</button>
                    <a href="/admin-top" class="btn btn-secondary">キャンセル</a>
                  </form>
                </div>
            </div>
        </div>
    
    </x-slot>
    </x-admin-layout>
    