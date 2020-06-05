<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
            <!--Body-->
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="modal-body mb-1">
                <div class="md-form form-sm mb-5">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="email" name="email" id="email" class="form-control form-control-sm validate" required>
                  <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                </div>
                <div class="md-form form-sm mb-4">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" name="password" id="password" class="form-control form-control-sm validate" required>
                  <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                </div>
                
                <div class="text-center mt-2">
                  <input type="hidden" name="remember" id="remember" value="on">
                  <button  type="submit" class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                </div>
              </div>
            </form>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-left mt-1">
                <p style="font-weight: bold;">こちらでログインできます</p>
                <p><span style="font-weight: bold;">email</span> : yuruoji@gmail.com</p>
                <p><span style="font-weight: bold;">password</span> : yuruoji123</p>
                <p><span style="font-weight: bold;">ユーザー名</span> : ゆるふわ</p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">
            
            <!--Body-->
            <form method="POST" action="{{ route('register') }}">
              @csrf
            <div class="modal-body">

              <div class="md-form form-sm mb-5">
                <i class="fas fa-user prefix"></i>
                <input type="text" name="name" id="name" class="form-control form-control-sm validate" required>
                <label data-error="wrong" data-success="right" for="email">Your nickname</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" name="email" id="email" class="form-control form-control-sm validate" required>
                <label data-error="wrong" data-success="right" for="email">Your email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" name="password" id="password" class="form-control form-control-sm validate" required>
                <label data-error="wrong" data-success="right" for="password">Your password</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-sm validate" required>
                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->
@include('error_card_list')
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded my-5" data-toggle="modal" data-target="#modalLRForm">Let's START</a>
</div>