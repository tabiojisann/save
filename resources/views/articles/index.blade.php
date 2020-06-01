@extends('app')

@section('title', 'トップページ')


@section('content')
  @extends('nav')
    <div class="wrapper  grey lighten-4">
      <div class="title">
          <h1 class="text-center">Save MyArticle</h1>
      </div>

      @guest
      <div class="form-inline mt-4" style="margin-left: 40%; m ">
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
        
      <div class="d-flex justify-content-around mt-5">
        <div class="mt-5 col-md-2">
          <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>
          <button class="btn btn-unique mt-5" style="border-radius: 30px;"><i class="far fas fa-search"> Search</i></button>
        </div> 
  
        <form method="POST" action="{{ route('articles.store') }}">
          @csrf
          <div class="d-flex justify-content-center">
            <div class="col-md-7 mt-4">
              <div class="md-form">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
              </div>
            </div>
            <div class="col-md-7 mt-4">  
              <div class="md-form">
                <label>URL</label>
                <input type="text" name="url" required class="form-control">
              </div>
            </div>  
          </div>  
          <div class="col-md-5 pt-4 ml-5">
            <button type="submit" class="btn btn-default btn-block mt-1 ">SEND</button>
          </div>
        </form> 
      </div>

     

      <!-- 記事一覧 -->
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
      <!-- 記事一覧 -->

        {{ $articles->links() }}

      @endauth
    </div>
      
@endsection