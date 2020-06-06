
    @include('modal')

    <div class="d-flex justify-content-around">
      <div>
        <div class="md-form my-0 mt-5">
          <input name="keyword" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" required>
        </div>
        <a href="" class="btn btn-unique mt-5" style="border-radius: 30px;" data-toggle="modal" data-target="#modalLRForm"><i class="far fas fa-search"> Search</i></a>
      </div>

      <div>
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
          <!-- <button type="submit" class="btn btn-default btn-block mt-1 ">SEND</button> -->
          <a href="" data-toggle="modal" data-target="#modalLRForm" class="btn btn-default btn-block mt-1">SEND</a>
        </div>
      </div> 
    </div>

    <!-- 記事一覧 -->
    @foreach($articles as $article)  
      <div class="card mx-auto" style="width: 60%; margin-top: 50px;">
        <div class="card-body">
          <div style="border-bottom: solid 1px lightgrey;">
            <h4 class="card-title">{{ $article->title }}</span></h4>
          </div>
          <p class="mt-4">{{ $article->url }}</p>
        </div>
      </div>
    @endforeach  
    
  <div class="mx-auto mt-5" style="width: 200px;">
    {{ $articles->links() }}
  </div>

  
