<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/account-profile-public.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
 <title>Kick.com</title>
 <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet"  href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
        <link rel="stylesheet"  href="{{asset('libs/swiper/dist/css/swiper.min.css')}}">
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="{{asset('css/purpose.css')}}" id="stylesheet">
</head>

<body>
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
                                        <a class="dropdown-item" href="/profile/{{Auth::user()->id}}">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="index-2.html">Overview</a>
                            </li>
                            <!-- Pages menu -->
                        
                            <!-- Sections menu -->
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sections</a>
                               
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                    <ul class="list-group list-group-flush">
                                        <li>
                                            <a href="docs/index.html" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    <figure style="width: 50px;">
                                                        <img alt="Image placeholder" src="{{asset('img/icons/essential/detailed/DOC_File.svg')}}"  class="svg-inject img-fluid" style="height: 50px;">
                                                    </figure>
                                                    <!-- Media body -->
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1">Documentation</h6>
                                                        <p class="mb-0">Awesome section examples for any scenario.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    <figure style="width: 50px;">
                                                        <img alt="Image placeholder" src="{{asset('img/icons/essential/detailed/Mobile_UI.svg')}}"  class="svg-inject img-fluid" style="height: 50px;">
                                                    </figure>
                                                    <!-- Media body -->
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1">Components</h6>
                                                        <p class="mb-0">Awesome section examples for any scenario.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                   
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
            <input type="text" class="form-control" placeholder="Type and hit enter ...">
          </div>
        </div>
      </form>
      <div class="omnisearch-suggestions">
        <h6 class="heading">Search Suggestions</h6>
        <div class="row">
          <div class="col-sm-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>iphone 8</span> in Smartphones
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>beats pro solo 3</span> in Headphones
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>smasung galaxy 10</span> in Phones
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content">
    <!-- Header (account) -->
    <section class="header-account-page bg-primary d-flex align-items-end" data-offset-top="#header-main">
      <!-- Header container -->
      <div class="container pt-4 pt-lg-0">
        <div class="row justify-content-end">
          <div class=" col-lg-8">
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-lg-8 col-xl-5 mb-4 mb-md-0">
                <span class="h2 mb-0 text-white d-block">Hello, {{$user->username}}</span>
                <span class="text-white">Have a nice day!</span>
              </div>
              <div class="col-auto flex-fill d-none d-xl-block">
                <ul class="list-inline row justify-content-lg-end mb-0">
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-success"></i>Followers
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                      20
                    
                    </a>
                  </li>
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-warning"></i>Following
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                      5
                     
                    </a>
                  </li>
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-danger"></i>Article(s)
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                  
                     {{count($user->posts) ?? 'N/A'}}
                     </a>
                
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Account navigation -->
            <div class="d-flex">
              <a href="account-profile-public.html" class="btn btn-icon btn-group-nav shadow btn-neutral">
                <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                <span class="btn-inner--text d-none d-md-inline-block">My Profile</span>
              </a>
              <div class="btn-group btn-group-nav shadow ml-auto" role="group" aria-label="Basic example">
                <div class="btn-group" role="group">
                  <button id="btn-group-settings" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-sliders-h"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Account</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                    <span class="dropdown-header">Profile</span>
                    <a class="dropdown-item" href="account-profile-public.html">Public profile</a>
                    <span class="dropdown-header">Account</span>
                    <a class="dropdown-item" href="account-profile.html">Profile</a>
                    <a class="dropdown-item" href="account-settings.html">Settings</a>
                    <a class="dropdown-item" href="account-billing.html">Billing</a>
                    <a class="dropdown-item" href="account-notifications.html">Notifications</a>
                  </div>
                </div>
                <div class="btn-group" role="group">
                  <button id="btn-group-boards" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-chart-line"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Board</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-boards">
                    <a class="dropdown-item" href="board-overview.html">Overview</a>
                    <a class="dropdown-item" href="board-projects.html">Projects</a>
                    <a class="dropdown-item" href="board-tasks.html">Tasks</a>
                    <a class="dropdown-item" href="board-connections.html">Connections</a>
                  </div>
                </div>
                <div class="btn-group" role="group">
                  <button id="btn-group-listing" type="button" class="btn btn-neutral btn-icon rounded-right" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-list-ul"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Listing</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                    <span class="dropdown-header">Tables</span>
                    <a class="dropdown-item" href="listing-orders.html">Orders</a>
                    <a class="dropdown-item" href="listing-projects.html">Projects</a>
                    <span class="dropdown-header">Flex</span>
                    <a class="dropdown-item" href="listing-users.html">Users</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 pt-lg-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div data-toggle="sticky" data-sticky-offset="30" data-negative-margin=".card-profile-cover">
              <div class="card card-profile border-0">
                <div class="card-profile-cover">
                  <img alt="Image placeholder" src="{{asset('img/theme/light/team-1-800x400.jpg')}}" class="card-img-top">
                </div>
                <a href="#" class="mx-auto">
                  <img alt="Image placeholder" src="{{asset('img/theme/light/team-1-800x800.jpg')}}" class="card-profile-image avatar rounded-circle shadow hover-shadow-lg">
                </a>
                <div class="card-body p-3 pt-0 text-center">
                  <h5 class="mb-0">{{$user->name}}</h5>
                  <span class="d-block text-muted mb-3">  </span>
                  <div class="avatar-group hover-avatar-ungroup mb-3">
                    <a href="#" class="avatar rounded-circle avatar-sm">
                      <img alt="Image placeholder"  src="{{asset('img/theme/light/team-1-800x800.jpg')}}"  class="">
                    </a>
                    <a href="#" class="avatar rounded-circle avatar-sm">
                      <img alt="Image placeholder" src="{{asset('img/theme/light/team-2-800x800.jpg')}}"  class="">
                    </a>
                    <a href="#" class="avatar rounded-circle avatar-sm">
                      <img alt="Image placeholder" src="{{asset('img/theme/light/team-3-800x800.jpg')}}" class="">
                    </a>
                  </div>
                  <div class="actions d-flex justify-content-between mt-3 pt-3 px-5 delimiter-top">
                    <a href="#" class="action-item">
                      <i class="far fa-envelope"></i>
                    </a>
                    <a href="#" class="action-item">
                      <i class="far fa-user"></i>
                    </a>
                    <a href="#" class="action-item">
                      <i class="far fa-chart-pie"></i>
                    </a>
                    <a href="#" class="action-item text-danger">
                      <i class="far fa-trash-alt"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-lg-5">
            <!-- Change avatar -->
            <!-- <div class="card bg-gradient-warning hover-shadow-lg">
              <div class="card-body py-3">
                <div class="row row-grid align-items-center">
                  <div class="col-lg-8">
                    <div class="media align-items-center">
                      <a href="#" class="avatar avatar-lg rounded-circle mr-3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg">
                      </a>
                      <div class="media-body">
                        <h5 class="text-white mb-0">Heather Wright</h5>
                        <div>
                          <form>
                            <input type="file" name="file-1[]" id="file-1" class="custom-input-file custom-input-file-link" data-multiple-caption="{count} files selected" multiple />
                            <label for="file-1">
                              <span class="text-white">Change avatar</span>
                            </label>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto flex-fill mt-4 mt-sm-0 text-sm-right d-none d-lg-block">
                    <a href="#" class="btn btn-sm btn-white rounded-pill btn-icon shadow">
                      <span class="btn-inner--icon"><i class="far fa-fire"></i></span>
                      <span class="btn-inner--text">Upgrade to Pro</span>
                    </a>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- Timeline -->

           
            <div class="card">
              <div class="card-header pt-4 pb-2">
                <div class="d-flex align-items-center">
                  <a href="#" class="avatar rounded-circle shadow">
                    <img alt="Image placeholder"  src="{{asset('img/theme/light/team-1-800x800.jpg')}}">
                  </a>
                  <div class="avatar-content">
                    <h6 class="mb-0">{{$user->username}} </h6>
                    <small class="d-block text-muted"><i class="far fa-clock mr-2"></i>3 hrs ago</small>
                  </div>
                </div>
              </div>
      
              <div class="card-body">
                <p>Personal profiles are the perfect way for you to grab their attention and persuade recruiters to continue reading your CV because you’re telling them from the off exactly why they should hire you. Of course, you’ll need to know how to write an effective statement first, but we’ll get on to that in a bit.</p>
                <!-- Badges -->
                <div class="d-lg-flex mt-4">
                  <a href="#" class="d-flex align-items-center mr-lg-5 mb-3 mb-lg-0">
                    <div>
                      <div class="icon icon-sm bg-gradient-success text-white rounded-circle icon-shape">
                        <i class="far fa-user-ninja"></i>
                      </div>
                    </div>
                    <div class="pl-3">
                      <span class="h6">10 Skills</span>
                    </div>
                  </a>
                  <a href="#" class="d-flex align-items-center mr-lg-5 mb-3 mb-lg-0">
                    <div>
                      <div class="icon icon-sm bg-gradient-warning text-white rounded-circle icon-shape">
                        <i class="far fa-user-friends"></i>
                      </div>
                    </div>
                    <div class="pl-3">
                      <span class="h6">57 Endorsements</span>
                    </div>
                  </a>
                  <a href="#" class="d-flex align-items-center mr-lg-5 mb-3 mb-lg-0">
                    <div>
                      <div class="icon icon-sm bg-gradient-primary text-white rounded-circle icon-shape">
                        <i class="far fa-award"></i>
                      </div>
                    </div>
                    <div class="pl-3">
                      <span class="h6">7 Awards</span>
                    </div>
                  </a>
                </div>
                <div class="pt-5 mt-5 delimiter-top">
                  <!-- Title -->
                  <h6 class="mb-4">
                    <i class="far fa-file-signature mr-2"></i>Experience
                  </h6>
                  <!-- Timeline -->
                  <div class="timeline timeline-one-side" data-timeline-content="axis">
                    <div class="timeline-block">
                      <span class="timeline-step border-primary"></span>
                      <div class="timeline-content">
                        <small class="text-muted font-weight-bold">2016 - present</small>
                        <h6>Web Developer at Webpixels</h6>
                        <p class="text-sm lh-160">When we strive to become better than we are everything around us becomes better too. This is a wider card with supporting text below.</p>
                        <div>
                          <span class="badge badge-soft-primary mr-2 mb-2">Bootstrap</span>
                          <span class="badge badge-soft-primary mr-2 mb-2">UI/UX</span>
                          <span class="badge badge-soft-primary mr-2 mb-2">Market Strategy</span>
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="pt-5 mt-5 delimiter-top">
                  <!-- Title -->
                  <h6>
                    <i class="far fa-user-n mr-2 mb-4"></i>Skills/Position
                  </h6>
                  <!-- Skil badges -->
                  <div>
                    <a href="#" class="badge badge-lg badge-soft-primary d-inline-block mr-2 mb-2">Web Design</a>
               
                  </div>
                </div>
                <div class="pt-5 mt-5 delimiter-top">
                  <!-- Title -->
                  <h6 class="mb-4">
                    <i class="far fa-user-friends mr-2"></i>Followers
                  </h6>
                  <!-- Rating cards -->
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card bg-secondary">
                        <div class="p-3">
                          <div class="d-flex align-items-center">
                            <div>
                              <a href="#" class="avatar rounded-circle d-inline-block">
                                <img alt="Image placeholder" src="{{asset('img/theme/light/team-1-800x800.jpg')}}" class="">
                              </a>
                            </div>
                            <div class="pl-3">
                              <a href="#" class="h6 text-sm">{{$user->name}}</a><span class="static-rating static-rating-sm d-block"><i class="star far fa-star voted"></i>
                                <i class="star far fa-star voted"></i>
                                <i class="star far fa-star voted"></i>
                                <i class="star far fa-star voted"></i>
                                <i class="star far fa-star"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  
                </div>
              </div>

            </div>


            <!-- Post -->
            @if(count($user->posts) == 0)
            <div class="card mt-4">
              <div class="card-header pt-4 pb-2">
                <div class="d-flex align-items-center">
              
               <div class="card-body">
               <h3 >No Post Updates</h3>
              
               <img src="{{asset('img/nopost.png')}}" class="img-fluid rounded"/>
               <!-- <button type="submit" class="btn btn-sm btn-primary"><a href="/posts/create">ADD NOW</a></button>-->
               <a href="/posts/create"> <button type="submit" class="btn btn-sm btn-primary" style="border-radius:1000px">+</button></a>
               
               </div>
                </div> 
                </div>
                </div>
          
@else
            @foreach($user->posts as $post)
            <div class="card mt-4">
              <div class="card-header pt-4 pb-2">
                <div class="d-flex align-items-center">
                  <a href="#" class="avatar rounded-circle shadow">
                    <img alt="Image placeholder" src="{{asset('img/theme/light/team-2-800x800.jpg')}}" >
                  </a>
                  <div class="avatar-content">
                    <h6 class="mb-0">{{$post->user->username}}</h6>
                    <small class="d-block text-muted"><i class="far fa-clock mr-2"></i>3 hrs ago</small>
                  </div>
                </div>
              </div>
              <div class="card-body">
               <p>{{$post->body}}</p>
               <a href="" data-fancybox>
                  <img alt="Image placeholder" src="/storage/{{$post->image}}" class="img-fluid rounded">
                </a>
                <div class="row align-items-center my-3 pb-3 border-bottom">
                  <div class="col-sm-6">
                    <div class="icon-actions">
                      <a href="#" class="love active">
                        <i class="far fa-heart"></i>
                        <span class="text-muted">150 likes</span>
                      </a>
                      <a href="#">
                        <i class="far fa-comment"></i>
                        <span class="text-muted">20 comments</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-6 d-none d-sm-block">
                    <div class="d-flex align-items-center justify-content-sm-end">
                      <small class="pr-2 font-weight-bold">Seen by</small>
                      <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexis Ren">
                          <img alt="Image placeholder" src="{{asset('img/theme/light/thumb-1.jpg')}}" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Michael Jhonson">
                          <img alt="Image placeholder" src="{{asset('img/theme/light/thumb-2.jpg')}}" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Daniel Lewis">
                          <img alt="Image placeholder" src="{{asset ('img/theme/light/thumb-3.jpg')}}" class="rounded-circle">
                        </a>
                      </div>
                      <small class="pl-2 font-weight-bold">and 30+ more</small>
                    </div>
                  </div>
                </div>
                <!-- Comments -->
              

              <!-- end comments -->
              </div>
            </div>
@endforeach
@endif

          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="footer p-0 footer-light bg-section-secondary" id="footer-main">
    <div class="container">
      <div class="py-4">
        <div class="row align-items-md-center">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="d-flex align-items-center">
              <p class="text-sm mb-0">&copy; Purpose. 2019 <a href="https://webpixels.io/" target="_blank">Webpixels</a>. All rights reserved.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="../utility/support.html">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../utility/terms.html">Terms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../utility/privacy.html">Privacy</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-4">
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

  <script  src="{{asset('js/purpose.core.js')}}"></script>
        <!-- Page JS -->
        <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>
        <!-- Purpose JS -->
        <script src="{{asset('js/purpose.js')}}"></script>
        <!-- Demo JS - remove it when starting your project -->
        <script src="{{asset('js/demo.js')}}"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104437451-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-104437451-1');
  </script>
</body>


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/account-profile-public.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:11 GMT -->
</html>