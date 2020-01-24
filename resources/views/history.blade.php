
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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">About Us</a>
                                    <ul class="dropdown">
                                        <li><a href="/welcomenote">Welcome Note</a></li>
                                        <li><a href="/history">Brief History</a></li>
                                        <li><a href="/mission">Mission & Vision</a></li>
                                        <li><a href="/programmes">Our Programmes</a></li>
                                  
                                    </ul>
                                </li>
                        
                                <li><a href="instructors.html">Instructors</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
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
                    <div class="page-content">
                        <h4>BRIEF HISTORY OF THE DEPARTMENT OF COMPUTER SCIENCE</h4>
                  <p>The department of Computer Science is one of the foundation departments of the Kwara State University at its inception in 2009. The department took off during the 2009/2010 academic session with the mandate of running a four- year Bachelor degree in Computer Science (B.Sc.). The department started with a student population of 46 and academic staff strength of 3. The student population increased to 81 during 2010/2011 session, 147 in 2011/2012, 201 in 2012/2013 and 254 in 2013/2014. At present, the department has over five hundred students which cuts across both undergraduate and post graduate programmes.</p>
                  
<p>The Department is domiciled in the College of Information and Communication Technology together with two other departments that is: Department of Library and Information Science and Department of Mass Communication.  The idea of housing the three departments together stemmed from the need for a cross breed of ideas at the point of learning so as to produce well grounded information and communication scientists who will be highly useful to the nation. 
The Department since inception has recruited experienced lecturers both from home and away and has equally graduated over a hundred students. 
</p> 
<br><br>

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
