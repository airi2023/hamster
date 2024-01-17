<x-admin-layout>
    <x-slot name="title">ブログ修正</x-slot>
    
    <x-slot name="slot">
    
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h1>ブログ修正</h1>
                </div>
                <div class="col-12">
                  <form method="post" action="./change">
                    @csrf
                    <input type="hidden" name="change_id" value="{{ $article->id }}">
                    <div class="form-group mb-3">
                      <label for="titleInput">タイトル</label>
                      <input type="text" class="form-control" id="titleInput" name="title" value="{{ $article->title }}">
                    </div>
                    <div class="form-group mb-3">
                      <label for="bodyInput">内容</label>
                      <textarea class="form-control" id="bodyInput" rows="8" name="body">{{ $article->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="save" value="save">編集保存</button>
                    <a href="./" class="btn btn-secondary">キャンセル</a>
                  </form>
                </div>
            </div>
        </div>
    
    </x-slot>
    </x-admin-layout>
    