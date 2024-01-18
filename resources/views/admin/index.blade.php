@extends('admin.adminbase')

@section('contents')
    <div class="container news">
        <div class="row mt-5">
            <div class="col-12">
                <h3>新着情報 記事一覧</h3>
            </div>
            <div class="col-12">
                <p><a href="./new" class="btn btn-primary">新規追加</a></p>
                @foreach ($articles as $article)
                    <div class="card mb-2">
                        <div class="card-body">
                          <h6 class="card-subtitle mt-2 mb-3">【投稿日：{{ $article->updated_at }}】</h6>

                            <h4 class="card-title">{{ $article->title }}</h4>
                            <div>
                                <img src="upload/{{ $article->item_img }}" width='200px'>
                                <h5>{{ $article->subtitle }}</h5>
                            </div>
                            {{-- <p class="card-text">{{$article->body}}</p> --}}
                            <p class="card-text">{!! nl2br(e($article->body)) !!}</p>
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
@endsection