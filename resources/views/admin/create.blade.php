<x-admin-layout>
    <x-slot name="title">ブログ新規作成</x-slot>
    
    <x-slot name="slot">
    
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h1>ブログ新規作成</h1>
                </div>
                <div class="col-12">
                  <form method="post" action="./create">
                    @csrf
                    <div class="form-group mb-3">
                      <label for="titleInput">タイトル</label>
                      <input type="text" class="form-control" id="titleInput" name="title" required>
                    </div>
                    <div class="form-group mb-3">
                      <label for="bodyInput">内容</label>
                      <textarea class="form-control" id="bodyInput" rows="8" name="body" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="add" value="add">新規追加</button>
                    <a href="./" class="btn btn-secondary">キャンセル</a>
                  </form>
                </div>
            </div>
        </div>
    
    </x-slot>
    </x-admin-layout>
    