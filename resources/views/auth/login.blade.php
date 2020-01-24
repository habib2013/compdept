<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2019 13:14:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="assets/libs/highlight.js/styles/vs2015.css">

    <!-- Map -->
    <link href='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>
    

    <title>Dashkit</title>
  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">
  <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

          <!-- Image -->
          <div class="text-center">
            <img src="assets/img/illustrations/happiness.svg" alt="..." class="img-fluid">
          </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">
          
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Sign in
          </h1>
          
          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Free access to our dashboard.
          </p>
          
          <!-- Form -->
          <form role="form" method="POST" action="{{ route('login') }}">
                    @csrf
            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>Email Address</label>

              <!-- Input -->
              <input  id="input-email" type="email" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


@error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>

            <!-- Password -->
            <div class="form-group">

              <div class="row">
                <div class="col">
                      
                  <!-- Label -->
                  <label>Password</label>

                </div>
                <div class="col-auto">
                  
                  <!-- Help text -->
                  @if (Route::has('password.request'))
                                 
                  <a href="{{ route('password.request') }}" class="form-text small text-muted">
                    Forgot password?
                  </a>
                  @endif
                </div>
              </div> <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input placeholder="Password" id="input-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

            <div class="form-check" style="float:right">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <p class="form-text small text-muted">
                   Remember me
</p>
                                </div>
            <!-- Submit -->
            <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
              Sign in
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Don't have an account yet? <a href="/register">Sign up</a>.
              </small>
            </div>
            
          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/%40shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
    <script src="assets/libs/autosize/dist/autosize.min.js"></script>
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/chart.js/Chart.extension.min.js"></script>

    <!-- Map -->
    <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>
  </body>

<!-- Mirrored from dashkit.goodthemes.co/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2019 13:14:12 GMT -->
</html>