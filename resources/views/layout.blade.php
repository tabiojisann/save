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

      <h2 class="mt-5" style="margin-left: 24%;">未ログインのためユーザーログイン画面に飛びます</h2>
      @endguest

    </div>
@endsection