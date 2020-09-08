<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/vendors/css/vendors.min.css">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/vendors/css/ui/prism.min.css">


<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/css/bootstrap.css">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/css/bootstrap-extended.css">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/css/colors.css">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/css/components.css">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/css/themes/dark-layout.css">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/css/themes/semi-dark-layout.css">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/css/core/colors/palette-gradient.css">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/css/pages/authentication.css">
<link rel="stylesheet" href="https://admin.homecooksapp.co.uk/css/custom-laravel.css">
<link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
    
        <div class="flex-center position-ref full-height" id="gg3">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <body
    class="vertical-layout vertical-menu-modern 1-column   "
    data-menu="vertical-menu-modern" data-col="1-column" data-layout="light">

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">

                
                <section class="row flexbox-container ">
  <div class="col-xl-12 col-12 d-flex justify-content-center ">
    <div class="card bg-white rounded-0 mb-0 ">
      <div class="row m-0 ">
        <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0 ">
          <img src="/img/homeCook.jpeg" alt="branding logo" width="200px">
        </div>
        <div class="col-lg-6 col-12 p-0">
          <div class="card rounded-0 mb-0 px-2">
            <div class="card-header pb-1">
              <div class="card-title">
                <h4 class="mb-0">Login</h4>
              </div>
            </div>
            <p class="px-2">Welcome back, please login to your account.</p>
            <div class="card-content">
              <div class="card-body pt-1">
                <form method="POST" action="https://admin.homecooksapp.co.uk/login">
                  <input type="hidden" name="_token" value="41QIPkhRGrIueY03tpBoi7wrktF746Xp3pjwRSB0">                  <fieldset class="form-label-group form-group position-relative has-icon-left">

                    <input id="email" type="email" class="form-control "
                      name="email" placeholder="E-Mail Address" value="" required autocomplete="email"
                      autofocus>

                    <div class="form-control-position">
                      <i class="fa fa-user"></i>
                    </div>
                    <label for="email">E-Mail Address</label>
                                      </fieldset>

                  <fieldset class="form-label-group position-relative has-icon-left">

                    <input id="password" type="password" class="form-control "
                      name="password" placeholder="Password" required autocomplete="current-password">

                    <div class="form-control-position">
                      <i class="fa fa-lock"></i>
                    </div>
                    <label for="password">Password</label>
                                      </fieldset>
                  <div class="form-group d-flex justify-content-between align-items-center">
                    <div class="text-left">
                      <fieldset class="checkbox">
                        <div class="vs-checkbox-con vs-checkbox-primary">
                          <input type="checkbox" >
                          <span class="vs-checkbox">
                            <span class="vs-checkbox--check">
                              <i class="vs-icon feather icon-check"></i>
                            </span>
                          </span>
                          <span class="text-primary">Remember me</span>
                        </div>
                      </fieldset>
                    </div>


                  </div>
                  <a href="register" class="btn btn-outline-primary float-left btn-inline">Register</a>
                  <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                </form>
              </div>
            </div>
            <div class="login-footer mt-4">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

            </div>
        </div>
    </div>
                </div>
    <!-- End: Content-->

    
<script src="https://admin.homecooksapp.co.uk/vendors/js/vendors.min.js"></script>
<script src="https://admin.homecooksapp.co.uk/vendors/js/ui/prism.min.js"></script>

<script src="https://admin.homecooksapp.co.uk/js/core/app-menu.js"></script>
<script src="https://admin.homecooksapp.co.uk/js/core/app.js"></script>
<script src="https://admin.homecooksapp.co.uk/js/scripts/components.js"></script>
<script src="https://admin.homecooksapp.co.uk/js/scripts/customizer.js"></script>
<script src="https://admin.homecooksapp.co.uk/js/scripts/footer.js"></script>



</body>
        </div>
    </body>
</html>
