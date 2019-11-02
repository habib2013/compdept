
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:37:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
        <meta name="author" content="Webpixels">
        <title>Kick.com</title><!-- Favicon -->
        <!-- Favicon -->
        @laravelPWA

        <!--  -->

        <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
        <!-- Font Awesome 5 -->
        <link rel="stylesheet"  href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
        <link rel="stylesheet"  href="{{asset('libs/swiper/dist/css/swiper.min.css')}}">
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="{{asset('css/purpose.css')}}" id="stylesheet">
     
      <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    </head>

    <body>
   
        <!-- <div class="alert alert-danger bg-gradient-danger text-white fixed-top alert-flush alert-dismissible border-0 shadow-lg fade show mb-0" role="alert">
            <div class="container">
                The heat of the summer comes with a <strong>35% discount</strong>. Use the <strong>SUMMER35</strong> code until June 15h and get started with this UI Kit to build your next amazing website.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span class="text-white opacity-10" aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> -->
        <header class="header header-transparent" id="header-main">
            <!-- Topbar -->
            <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
                <div class="container px-0">
                    <div class="navbar-nav align-items-center">
                        <div class="d-none d-lg-inline-block">
                    
                        </div>
                   
                        <div class="ml-auto">
                            <ul class="nav">
                                <li class="nav-item">
                                    
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-action="omnisearch-open" data-target="#omnisearch"><i class="far fa-search"></i></a>
                                </li>
                               
                                <li class="nav-item dropdown">
                                    <a class="nav-link pr-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user-circle"></i>
                                    </a>

                                    @guest
                             
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <h6 class="dropdown-header">User menu</h6>
                                        <a class="dropdown-item" href="/login">
                                            <i class="far fa-user"></i>Login
                                        </a>
                                        @if (Route::has('register'))
                                        <a class="dropdown-item" href="/register">
                                            <i class="far fa-user"></i>Register
                                        </a>
                                        @endif
                                    </div>
                                @else
                                   
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <h6 class="dropdown-header">{{ Auth::user()->username}}</h6>
                                        <a class="dropdown-item" href="/{{Auth::user()->username}}">
                                            <i class="far fa-user"></i>Account
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="float-right badge badge-primary">4</span>
                                            <i class="far fa-envelope"></i>Messages
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="far fa-cog"></i>Settings
                                        </a>
                                        <div class="dropdown-divider" role="presentation"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   
                                      
                                            <i class="far fa-sign-out-alt"></i>Sign out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                    @endguest

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main navbar -->
            <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
                <div class="container px-lg-0">
                    <!-- Logo -->
                    <a class="navbar-brand mr-lg-5" href="index-2.html">
                        <img alt="Image placeholder" src="{{asset('img/brand/white.png')}}" id="navbar-logo" style="height: 50px;">
                    </a>
                    <!-- Navbar collapse trigger -->
                    <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Navbar nav -->
                    <div class="collapse navbar-collapse" id="navbar-main-collapse">
                        <ul class="navbar-nav align-items-lg-center">
                            <!-- Home - Overview  -->
                           
                            <!-- Pages menu -->
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                               
                            </li>
                            <!-- Sections menu -->
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News and Articles</a>
                             
                            </li>

                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/faqs" >FAQs</a>
                             
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our blog</a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                    <ul class="list-group list-group-flush">
                                        <li>
                                            <a href="docs/index.html" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    <figure style="width: 50px;">
                                                        <img alt="Image placeholder" src="assets/img/icons/essential/detailed/DOC_File.svg" class="svg-inject img-fluid" style="height: 50px;">
                                                    </figure>
                                                    <!-- Media body -->
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1">Documentation</h6>
                                                        <p class="mb-0">Awesome section examples for any scenario.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    
                                    </ul>
                                    <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="docs/getting-started/installation.html" class="dropdown-item">Installation</a>
                                                <a href="docs/getting-started/file-structure.html" class="dropdown-item">File structure</a>
                                                <a href="docs/getting-started/build-tools.html" class="dropdown-item">Build tools</a>
                                                <a href="docs/getting-started/customization.html" class="dropdown-item">Customization</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="docs/getting-started/plugins.html" class="dropdown-item">Using plugins</a>
                                                <a href="docs/components/index.html" class="dropdown-item">Components</a>
                                                <a href="docs/plugins/animate.html" class="dropdown-item">Plugins</a>
                                                <a href="docs/support.html" class="dropdown-item">Support</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                          
                         
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Omnisearch -->
        <div id="omnisearch" class="omnisearch">
            <div class="container">
                <!-- Search form -->
                <form class="omnisearch-form">
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-flush">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-search"></i></span>
                            </div>
                            <input type="text" name="country_name" id="country_name"  class="form-control" value="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="omnisearch-suggestions">
                    <h6 class="heading">Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                        <div id="countryList">
    </div>

                        </div>

                    </div>
                    {{ csrf_field() }}
                </div>
            </div>
        </div>
        <div class="main-content">
            <!-- Header (v1) -->
            <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
                <div class="section-inner bg-gradient-primary"></div>
                <!-- SVG illustration -->
                <div class="pt-7 position-absolute middle right-0 col-lg-7 col-xl-6 d-none d-lg-block">
                    <figure class="w-100" style="max-width: 1000px;">
                        <img alt="Image placeholder" src="{{asset('img/svg/illustrations/work-chat.svg')}}" class="svg-inject img-fluid" style="height: 1000px;">
                    </figure>
                </div>
                <!-- SVG background -->

                <!-- Hero container -->
                <div class="container py-5 pt-lg-6 d-flex align-items-center position-relative zindex-100">
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-5 col-xl-6 text-center text-lg-left">
                                <div class="d-none d-lg-block mb-4">
                                
                                </div>
                                <div>
                                    <h2 class="text-white mb-4">
                                        <span class="display-4 font-weight-light">See it. Love it</span>
                                        <span class="d-block">Purpose <strong class="font-weight-light">Website UI Kit</strong></span>
                                    </h2>
                                    <p class="lead text-white">A unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                                    <div class="mt-5">
                                        <a href="#sct-page-examples" class="btn btn-white rounded-pill hover-translate-y-n3 btn-icon mr-sm-4 scroll-me">
                                            <span class="btn-inner--text">Our Mission</span>
                                            <span class="btn-inner--icon"><i class="far fa-angle-right"></i></span>
                                        </a>
                                        <a href="#sct-features" class="btn btn-outline-white rounded-pill hover-translate-y-n3 btn-icon d-none d-xl-inline-block scroll-me">
                                            <span class="btn-inner--icon"><i class="far fa-file-alt"></i></span>
                                            <span class="btn-inner--text">Our Vision</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Features (v1) -->
            <section id="sct-page-examples" class="slice bg-section-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                      
                                <div class="px-4 py-5">
                                    <img alt="Image placeholder" src="{{asset('img/footballer.png')}}"  class="svg-inject" style="height: 70px;">
                                </div>
                                <div class="px-4 pb-5">
                                    <h5>Footballers</h5>
                                    <p class="text-muted">Awesome collection of pages for any scenario.</p>
                                     </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                                <div class="px-4 py-5">
                                    <img alt="Image placeholder" src="{{asset('img/icons/essential/detailed/Code.svg')}}" class="svg-inject" style="height: 70px;">
                                </div>
                                <div class="px-4 pb-5">
                                    <h5>Scouts</h5>
                                    <p class="text-muted">Awesome collection of pages for any scenario.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                                <div class="px-4 py-5">
                                    <img alt="Image placeholder"  src="{{asset('img/icons/essential/detailed/Secure_Files.svg')}}"  class="svg-inject" style="height: 70px;">
                                </div>
                                <div class="px-4 pb-5">
                                    <h5>Coaches</h5>
                                    <p class="text-muted">Provide users good looking forms that inspire trust.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                                <div class="px-4 py-5">
                                    <img alt="Image placeholder"  src="{{asset('img/clubs.png')}}" class="svg-inject" style="height: 70px;">
                                </div>
                                <div class="px-4 pb-5">
                                    <h5>Clubs</h5>
                                    <p class="text-muted">Profile and account managemend made cool.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                                <div class="px-4 py-5">
                                    <img alt="Image placeholder"  src="{{asset('img/agent.png')}}" class="svg-inject" style="height: 70px;">
                                </div>
                                <div class="px-4 pb-5">
                                    <h5>Agents</h5>
                                    <p class="text-muted">Complete front-end flow for e-commerce website.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                                <div class="px-4 py-5">
                                    <img alt="Image placeholder"  src="{{asset('img/icons/essential/detailed/Cog_Wheels.svg')}}" class="svg-inject" style="height: 70px;">
                                </div>
                                <div class="px-4 pb-5">
                                    <h5>Utility Pages</h5>
                                    <p class="text-muted">Error pages and everything else can be found here.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fluid-paragraph text-center mt-5">
                    <p>
                        <strong class="text-primary">*Good to know!</strong> You are not limited to the examples we've built. We have the liberty to choose any of the page layouts and components from the package and create your own version.
                    </p>
                </div>
            </section>
            <!-- Features (v2) -->
            <section class="slice slice-lg">
                <div class="container">
                    <div class="row row-grid justify-content-around align-items-center">
                        <div class="col-lg-5 order-lg-2">
                            <div class=" pr-lg-4">
                                <h5 class=" h3">Change the way you build wesites. Forever.</h5>
                                <p class="lead mt-4 mb-5">With Purpose you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <img alt="Image placeholder" src="{{asset('img/theme/light/presentation-1.png')}}" class="img-fluid img-center">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Features (v3) -->
          
            <!-- Features (v4) -->
            <section class="slice slice-lg bg-section-secondary overflow-hidden">
                <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
                    <figure class="w-100">
                        <img alt="Image placeholder" src="{{asset('img/svg/backgrounds/bg-2.svg')}}" class="svg-inject" style="height: 1000px;">
                    </figure>
                </div>
                <div class="container position-relative zindex-100">
                    <div class="mb-5 px-3 text-center">
                        <span class="badge badge-soft-success badge-pill badge-lg">
                          Our Goal
                        </span>
                        <h3 class=" mt-4">KIck.com is here for you!!</h3>
                        <div class="fluid-paragraph mt-3">
                            <p class="lead lh-180">We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card px-3">
                                <div class="card-body py-5">
                                    <div class="d-flex align-items-center">
                                        <div class="icon bg-gradient-primary text-white rounded-circle icon-shape shadow-primary">
                                            <i class="fab fa-html5"></i>
                                        </div>
                                        <div class="icon-text pl-4">
                                            <h5 class="mb-0">Our Mission</h5>
                                        </div>
                                    </div>
                                    <p class="mt-4 mb-0">We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card px-3">
                                <div class="card-body py-5">
                                    <div class="d-flex align-items-center">
                                        <div class="icon bg-gradient-warning text-white rounded-circle icon-shape shadow-warning">
                                            <i class="fab fa-node-js"></i>
                                        </div>
                                        <div class="icon-text pl-4">
                                            <h5 class="mb-0">Built by developers for developers</h5>
                                        </div>
                                    </div>
                                    <p class="mt-4 mb-0">You don't only need a theme, but also great tools in order to ease the process or building and customizing. And this is exactly what we offer you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card px-3">
                                <div class="card-body py-5">
                                    <div class="d-flex align-items-center">
                                        <div class="icon bg-gradient-info text-white rounded-circle icon-shape shadow-info">
                                            <i class="far fa-thumbs-up"></i>
                                        </div>
                                        <div class="icon-text pl-4">
                                            <h5 class="mb-0">Made for great first impressions</h5>
                                        </div>
                                    </div>
                                    <p class="mt-4 mb-0">is lighter and faster than most of the themes out there which means you get more for less. Check out the components and examples pages.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Features (v5) -->
            <section class="slice slice-xl has-floating-items bg-gradient-primary" id=sct-call-to-action><a href="#sct-call-to-action" class="tongue tongue-up tongue-section-secondary" data-scroll-to>
                    <i class="far fa-angle-up"></i>
                </a>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-white">Complete features at your hand</h1>
                            <div class="row justify-content-center mt-4">
                                <div class="col-lg-8">
                                    <p class="lead text-white">
                                        Purpose is a great premium UI package including all the important and needed features so 
                                        Bootstrap components and 15+ integrated plugins.
                                    </p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container floating-items">
                    <div class="icon-floating bg-white floating">
                        <span></span>
                        <img alt="Image placeholder"  src="{{asset('img/icons/essential/detailed/Apps.svg')}}" class="svg-inject">
                    </div>
                    <div class="icon-floating icon-lg bg-white floating">
                        <span></span>
                        <img alt="Image placeholder"  src="{{asset('img/icons/essential/detailed/Apple.svg')}}" class="svg-inject">
                    </div>
                    <div class="icon-floating icon-sm bg-white floating">
                        <span></span>
                        <img alt="Image placeholder"  src="{{asset('img/icons/essential/detailed/Ballance.svg')}}" class="svg-inject">
                    </div>
                    <div class="icon-floating icon-lg bg-white floating">
                        <span></span>
                        <img alt="Image placeholder"  src="{{asset('img/icons/essential/detailed/Book.svg')}}"  class="svg-inject">
                    </div>
                    <div class="icon-floating bg-white floating">
                        <span></span>
                        <img alt="Image placeholder" src="{{asset('img/icons/essential/detailed/Chat.svg')}}" class="svg-inject">
                    </div>
                    <div class="icon-floating icon-sm bg-white floating">
                        <span></span>
                        <img alt="Image placeholder"  src="{{asset('img/icons/essential/detailed/Coffee.svg')}}" class="svg-inject">
                    </div>
                </div>
            </section>
            <!-- Testimonials (v1) -->
            <section class="slice slice-lg bg-section-secondary">
                <div class="container">
                    <div class="mb-5 text-center">
                        <h3 class=" mt-4">What our customers say</h3>
                        <div class="fluid-paragraph mt-3">
                            <p class="lead lh-180">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="swiper-js-container overflow-hidden">
                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide p-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img alt="Image placeholder" src="{{asset('img/theme/light/team-1-800x800.jpg')}}" class="avatar  rounded-circle">
                                                        </div>
                                                        <div class="pl-3">
                                                            <h5 class="h6 mb-0">Heather Wright</h5>
                                                            <small class="d-block text-muted">Google</small>
                                                        </div>
                                                    </div>
                                                    <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide p-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img alt="Image placeholder" src="{{asset('img/theme/light/team-2-800x800.jpg')}}" class="avatar  rounded-circle">
                                                        </div>
                                                        <div class="pl-3">
                                                            <h5 class="h6 mb-0">Monroe Parker</h5>
                                                            <small class="d-block text-muted">Apple</small>
                                                        </div>
                                                    </div>
                                                    <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                         
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide p-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img alt="Image placeholder" src="{{asset('img/theme/light/team-3-800x800.jpg')}}" class="avatar  rounded-circle">
                                                        </div>
                                                        <div class="pl-3">
                                                            <h5 class="h6 mb-0">John Sullivan</h5>
                                                            <small class="d-block text-muted">Amazon</small>
                                                        </div>
                                                    </div>
                                                    <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide p-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img alt="Image placeholder" src="assets/img/theme/light/team-4-800x800.jpg" class="avatar  rounded-circle">
                                                        </div>
                                                        <div class="pl-3">
                                                            <h5 class="h6 mb-0">James Lewis</h5>
                                                            <small class="d-block text-muted">Google</small>
                                                        </div>
                                                    </div>
                                                    <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                                    <span class="static-rating static-rating-sm">
                                                        <i class="star fas fa-star voted"></i>
                                                        <i class="star fas fa-star voted"></i>
                                                        <i class="star fas fa-star voted"></i>
                                                        <i class="star fas fa-star voted"></i>
                                                        <i class="star fas fa-star voted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide p-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img alt="Image placeholder" src="assets/img/theme/light/team-5-800x800.jpg" class="avatar  rounded-circle">
                                                        </div>
                                                        <div class="pl-3">
                                                            <h5 class="h6 mb-0">Julia Howe</h5>
                                                            <small class="d-block text-muted">Google</small>
                                                        </div>
                                                    </div>
                                                    <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                                    <span class="static-rating static-rating-sm">
                                                        <i class="star fas fa-star voted"></i>
                                                        <i class="star fas fa-star voted"></i>
                                                        <i class="star fas fa-star voted"></i>
                                                        <i class="star fas fa-star voted"></i>
                                                        <i class="star fas fa-star voted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Features (v7) -->
            <section class="slice slice-lg">
                <div class="container">
                    <div class="mb-5 text-center">
                        <h3 class=" mt-4">Really useful features</h3>
                        <div class="fluid-paragraph mt-3">
                            <p class="lead lh-180">You get all Bootstrap components fully customized. Besides, you receive another numerous plugins out of the box and ready to use.</p>
                        </div>
                    </div>
                 
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="mb-4">
                                <div class="py-5">
                                    <div class="icon text-primary">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                </div>
                                <h5 class="">Latest Bootstrap</h5>
                                <p class=" mt-2 mb-0">A responsive and mobile-first theme built with the world's most popular component library.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mb-4">
                                <div class="py-5">
                                    <div class="icon text-primary">
                                        <i class="fab fa-sass"></i>
                                    </div>
                                </div>
                                <h5 class="">Built with Sass</h5>
                                <p class=" mt-2 mb-0">Change one variable and the theme adapts. Colors, fonts, sizes ... you name it.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mb-4">
                                <div class="py-5">
                                    <div class="icon text-primary">
                                        <i class="far fa-layer-group"></i>
                                    </div>
                                </div>
                                <h5 class="">700+ Components</h5>
                                <p class=" mt-2 mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mb-4">
                                <div class="py-5">
                                    <div class="icon text-primary">
                                        <i class="far fa-puzzle-piece"></i>
                                    </div>
                                </div>
                                <h5 class="">Everything is modular</h5>
                                <p class=" mt-2 mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action (v10) -->
            <section class="slice slice-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-gradient-dark shadow hover-shadow-lg border-0 position-relative zindex-100">
                                <div class="card-body py-5">
                                    <div class="d-flex align-items-start">
                                        <div class="icon">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                        <div class="icon-text">
                                            <h3 class="text-white h4">70+ example pages</h3>
                                            <p class="text-white mb-0">You get 70+ pre-built pages for a variety of purposes that makes it the ideal point to start building websites of any kind.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-primary shadow hover-shadow-lg border-0 position-relative zindex-100">
                                <div class="card-body py-5">
                                    <div class="d-flex align-items-start">
                                        <div class="icon text-white">
                                            <i class="fas fa-question-circle"></i>
                                        </div>
                                        <div class="icon-text">
                                            <h5 class="h4 text-white">6 months technical support</h5>
                                            <p class="mb-0 text-white">Use our dedicated support email to send your issues or suggestions. We are here to help anytime: <strong>support@webpixels.io</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer id="footer-main">
            <div class="footer footer-dark bg-gradient-primary footer-rotate">
                <div class="container">
                    <div class="row pt-md">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <a href="index-2.html">
                                <img src="{{asset('img/brand/white.png')}}" alt="Footer logo" style="height: 70px;">
                            </a>
                            <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                        </div>
                        <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                            <h6 class="heading mb-3">Account</h6>
                            <ul class="list-unstyled">
                                <li><a href="pages/account-profile.html">Profile</a></li>
                                <li><a href="pages/account-settings.html">Settings</a></li>
                                <li><a href="pages/account-billing.html">Billing</a></li>
                                <li><a href="pages/account-notifications.html">Notifications</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                            <h6 class="heading mb-3">About</h6>
                            <ul class="list-unstyled text-small">
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
                            <h6 class="heading mb-3">Company</h6>
                            <ul class="list-unstyled">
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
                        <div class="col-md-6">
                            <div class="copyright text-sm font-weight-bold text-center text-md-left">
                                &copy; 2018-2019 <a href="https://webpixels.io/" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
        <!-- Customizer modal -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
      <script  src="{{asset('js/purpose.core.js')}}"></script>
      
        <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>
      
        <script src="{{asset('js/purpose.js')}}"></script>
       
        <script src="{{asset('js/demo.js')}}"></script>
       
        <script>
$(document).ready(function(){

 $('#country_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#countryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#country_name').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});
</script>
    </body>


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:38:16 GMT -->
</html>
