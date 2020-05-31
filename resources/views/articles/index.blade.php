@extends('app')

@section('title', 'トップページ')


@section('content')
  @extends('nav')
    <div class="wrapper  grey lighten-4">
      <div class="title">
          <h1 class="text-center">Save MyArticle</h1>
      </div>

      @guest
      <div class="form-inline mt-5" style="margin-left: 40%; m ">
        <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </div>
        <a href="{{ route('login') }}">
          <button type="button" class="btn btn-mdb-color searchButton">Search</button>
        </a>
      </div>

      <h2 class="mt-5" style="margin-left: 24%;">未ログインのためログイン画面に飛びます</h2>
      @endguest

      @auth
     
        <div class="userName">
          <p class="user">USER NAME : {{ Auth::user()->name }}</p>
        </div> 

        <div class="form-inline mt-5" style="margin-left: 40%;">
          <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>
          <a href="{{ route('login') }}">
            <button type="button" class="btn btn-mdb-color searchButton">Search</button>
          </a>
        </div> 
        <form method="POST" action="{{ route('articles.store') }}">
          @csrf
        <div class="md-form">
          <label>タイトル</label>
          <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
          <label>URL</label>
          <input name="url" required class="form-control">
        </div>
        <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
        </form>
          
      @foreach($articles as $article)
      <div class="card">
        <p>{{ $article->title }}</p>
        <p>{{ $article->url }}</p>
        <form action="{{ action('ArticleController@destroy', $article->id) }}" id="form_{{ $article->id }}" method="post" style="display:inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">削除</button>
        </form>
      </div>

   
      @endforeach
      {{ $articles->links() }}
      </div>
      @endauth

     


  </div>
@endsection