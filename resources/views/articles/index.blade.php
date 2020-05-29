<!-- @extends('app')

@section('title', 'トップページ')


@section('content')
  @extends('nav')
    <div class="wrapper  grey lighten-4">
      <div class="title">
          <h1 class="mx-auto" style="width: 200px;">Save URL</h1>
      </div>

      @auth
        <div class="mx-auto" style="width: 200px;">
          <td>USER NAME :</td>
          <td>{{ Auth::user()->name }}</td>
        </div> 
      @endauth

    </div>
@endsection -->