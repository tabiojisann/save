@extends('app')

@section('title', 'トップページ')


@section('content')
  @extends('nav')
    <div class="wrapper  grey lighten-4" style="height: 200vh;">
      <div class="title mt-5">
        <h1 class="text-center">Save MyArticle</h1>
      </div>  

      @guest
        @include('modal')
      @endguest

      @auth
        <div style="width: 100%;">
          <p class="text-center">USER NAME : {{ Auth::user()->name }}</p>
        </div> 

        @include('error_card_list')
        <div class="d-flex justify-content-around mt-5">
          <form method="get">
            @foreach ($request as $key=>$value)
              @if ($key!="keyword")
                <input type="hidden" name="{{$key}}" value="{{$value}}"/>
              @endif
            @endforeach    
            <div class="md-form my-0 mt-5">
              <input name="keyword" v-model="keyword" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" required>
            </div>
            <button class="btn btn-unique mt-5" style="border-radius: 30px;"><i class="far fas fa-search"> Search</i></button>
          </form>

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
          @if( Auth::id() === $article->user_id )
            <div class="card mx-auto" style="width: 60%; margin-top: 50px;">
              <div class="card-body">
                <form action="{{ action('ArticleController@destroy', $article->id) }}" id="form_{{ $article->id }}" method="post" style="display:inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" style="color: red; float: right;"><i class="fas fa-times "></i></button>
                </form>
                <div style="border-bottom: solid 1px lightgrey;">
                  <h4 class="card-title">{{ $article->title }}</span></h4>
                </div>
                <p class="mt-4">{{ $article->url }}</p>
              </div>
            </div>
          @endif
        @endforeach  
   
        <!--記事一覧-->
        
        <div class="mx-auto mt-5" style="width: 200px;">
          {{ $articles->links() }}
        </div>
      @endauth
    </div>
      
@endsection