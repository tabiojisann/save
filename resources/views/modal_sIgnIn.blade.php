<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="{{ route('login') }}">
        <div class="modal-body mx-3"> 
          @csrf
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label for="email"></label>
              <input type="text" name="email" id="email" class="form-control validate" required>
              <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
            </div>
            <div class="md-form mb-4">
              <i class="fas fa-lock prefix grey-text"></i>
              <label for="password"></label>
              <input type="password" name="password" id="password" class="form-control validate" required>
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
            </div>
        </div>

        <div class="modal-footer d-flex justify-content-center">
          <input type="hidden" name="remember" id="remember" value="on">
          <button type="submit" class="btn btn-default">Login</button>
        </div>
        
      </form>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Login</a>
</div>