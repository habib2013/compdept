
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Com_sci- Kwasu</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">
        @laravelPWA
    </head>
<body>
<div id="preloader">
        <div class="spinner"></div>
    </div>


    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/ssecurity.jpg);height:100vh;padding-top:50px">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="row justify-content-center">
                <!-- Post A Comment -->
                <div class="col-12 col-lg-6">
                    <div class="post-a-comments mb-70">
             
                    <form role="form" method="POST" action="{{ route('register') }}">
                  @csrf
                            <div class="row">
                            <div class="col-12">  
                            <div class="form-group">                   
<h2 style="color:#ffffff">Register </h2><br>
</div>
                </div>               
                                <div class="col-12">
                                    <div class="form-group">
                                    <input id="input-email" placeholder="Oladosu Tayo" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                
                                </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                    <input id="input-email" placeholder="Habib2020" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

@error('username')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                
                                </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                             
                                    <input id="email" id="input-email" type="email" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
                                </div>
                                </div>



                                
                                <div class="col-12">
                                    <div class="form-group">
         
                                <input id="input-password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group">
         
                                    <input  id="input-password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                       
                                </div>
                                </div>

                         

                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn clever-btn w-100" style="background-color:#3ec576">Create account</button>
                                    
                                </div>
                          
                            </div>
                        </form>
                        
                    </div>

                    
                </div>
            </div>
                </div>
            </div>
        </div>
    </section>
    

    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
</body>
</html>
