
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
      <!-- Preloader -->
      <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +234 124345544</a>
                <a href="#"><span>Email:</span> info@kwasucs.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/"> Home</a></li>
                                <li><a href="#">About Us</a>
                                    <ul class="dropdown">
                                        <li><a href="/welcomenote">Welcome Note</a></li>
                                        <li><a href="/history">Brief History</a></li>
                                        <li><a href="/mission">Mission & Vision</a></li>
                                        <li><a href="/programmes">Our Programmes</a></li>
                                  
                                    </ul>
                                </li>
                        
                                <li><a href="/courses">Courses</a></li>
                                <li><a href="/events">Events</a></li>
                                <li><a href="/community">Our Community</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->

                            @guest
                            <div class="register-login-area">
                            @if (Route::has('register'))
                                <a href="/register" class="btn">Register</a>
                                @endif
                                <a href="/login" class="btn active">Login</a>
                            </div>
                            @else
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username}}</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="#"><span class="fa fa-user"></span> Profile</a>
                                     
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span> Logout</a>
                                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="{{ Auth::user()->profile->profileimage()}}" alt="No Img">
                                </div>
                            </div>
@endguest


                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <div class="regular-page-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content" style="color:#000000">
                        <h4>MISSION</h4>
                        <h6>The missions of the Department are:</h6>
                        <p style="color:#000000">•	To create in students the awareness of and enthusiasm for computer science and its capabilities<br>
•	To provide students with knowledge and skills base for further studies in computer science or multi-disciplinary studies involving computer science<br>
•	To develop in students through an education in computer science a range of transferable applicable skills of information technology to all aspects of human endeavours<br>
•	To generate in students an appreciation of the importance of computer in an industrial, economics, technological and social context.
</p>
  
<br><br>
<h5>Vision</h5>                  
<p style="color:#000000">To be a world class training centre for computer scientists that will be self starting, dynamic, team player and entrepreneurial. </p>
                     </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +44 300 303 0266</a>
                <a href="#"><span>Email:</span> info@clever.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
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
