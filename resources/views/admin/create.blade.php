@extends('admin.adminbase')

@section('contents')
    
        <div class="container create">
            <div class="row mt-5">
                <div class="col-12">
                    <h3>投稿新規作成</h3>
                </div>

                <div class="col-12">
                  <form method="post" action="./create">
                    @csrf
                    <div class="form-group mb-3">
                      <label for="titleInput">タイトル</label>
                      <input type="text" class="form-control" id="titleInput" name="title" required>
                    </div>

                    <div class="form-group mb-3">
                      <label for="subtitleInput">サブタイトル（価格）</label>
                      <input type="text" class="form-control" id="subtitleInput" name="subtitle" required>
                    </div>

                    <div class="form-group mb-3">
                      <label for="bodyInput">内容</label>
                      <textarea class="form-control" id="bodyInput" rows="8" name="body" required></textarea>
                    </div>

                    <div class="form-group mb-3">
                      <label for="itemImgInput">画像</label>
                      <form enctype="multipart/form-data" action="/"></form>
                      <input type="file" class="form-control" id="itemImgInput" name="item_img">
                    </div>

                    <button type="submit" class="btn btn-primary" name="add" value="add">新規追加</button>
                    <a href="/admin-news" class="btn btn-secondary">キャンセル</a>
                  </form>
                </div>
            </div>
        </div>
    
@endsection
    