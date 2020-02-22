<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/profile-posts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2019 13:14:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    
    @section('','{{$user->username}}')
  </head>
  <body id="app">

    <!-- MODALS
    ================================================== -->
    <!-- Modal: Demo -->
    <div class="modal fade fixed-right" id="modalDemo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <form class="modal-content" id="demoForm">
          <div class="modal-body">
        
            <!-- Close -->
            <a class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>

            <div class="text-center">
              <img src="assets/img/illustrations/designer-life.svg" alt="..." class="img-fluid mb-3">
            </div>

            <h2 class="text-center mb-2">
              Make CS_dept your oown
            </h2>

            <p class="text-center mb-4">
              Set preferences that will be cookied for your live preview demonstration.
            </p>

            <hr class="mb-4">

            <h4 class="mb-1">
              Color Scheme
            </h4>

            <p class="small text-muted mb-3">
              Overall light or dark presentation.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="colorScheme" id="colorSchemeLight" value="light" checked> <i class="fe fe-sun mr-2"></i> Light Mode
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="colorScheme" id="colorSchemeDark" value="dark"> <i class="fe fe-moon mr-2"></i> Dark Mode
              </label>
            </div>

            <h4 class="mb-1">
              Navigation Position
            </h4>

            <p class="small text-muted mb-3">
              Select the primary navigation paradigm for your app.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="navPosition" id="navPositionSidenav" value="sidenav" checked> Sidenav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionTopnav" value="topnav"> Topnav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionCombo" value="combo"> Combo
              </label>
            </div>

            <div class="collapse show" id="sidebarSizeContainer">

              <h4 class="mb-1">
                Sidenav Sizing <span class="badge badge-soft-primary">New</span>
              </h4>

              <p class="small text-muted mb-3">
                Standard navigation sizing or minified icons with dropdowns.
              </p>

              <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
                <label class="btn btn-white active col">
                  <input type="radio" name="sidebarSize" id="sidebarSizeBase" value="base" checked> Fullsize
                </label>
                <label class="btn btn-white col ml-2">
                  <input type="radio" name="sidebarSize" id="sidebarSizeSmall" value="small"> Icons
                </label>
              </div>

            </div>

            <h4 class="mb-1">
              Navigation Color <span class="badge badge-soft-primary">New</span>
            </h4>

            <p class="small text-muted mb-3">
              Usually dictated by the color scheme, but can be overriden.  
            </p>

            <div class="btn-group-toggle d-flex" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="navColor" id="navColorDefault" value="default" checked> Default
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navColor" id="navColorInverted" value="inverted"> Inverted
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navColor" id="navColorVibrant" value="vibrant"> Vibrant
              </label>
            </div>
      
          </div>
          <div class="modal-footer border-0">
        
            <button type="submit" class="btn btn-block btn-primary mt-auto">
              Preview
            </button>

          </div>
        </form>
      </div>
    </div>

    <!-- Modal: Members -->
    <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Add a new Post
                  </h4>
              
                </div>
                <div class="col-auto">

                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              
                </div>
              </div> <!-- / .row -->
            </div>
         
            <div class="card-body">

              <!-- List group -->
<form action="/addpost" method="post" enctype="multipart/form-data">
@csrf

              <input type="text" class="form-control form-control-rounded" placeholder="Enter title" name="title" id="title">
           <br>
              <textarea class="form-control" data-toggle="autosize" rows="3" placeholder="Post Body"  name="body" id="body"></textarea>
<br>
<input type="hidden" name="slug">

<input type="file" name="post_image" id="post_image" class="form-control">
<input type="hidden" value="{{auth()->user()->id}}" id="user_id" name="user_id">
<br>
<select name="post_type" id="" class="form-control">
<option value="programming">programming</option>
<option value="Artificial Intelligence">Artificial Intelligence</option>
<option value="E-Learning">E-Learning</option>
<option value="Cyber security">Cyber security</option>
</select>
<br>
              <button type="submit" class="btn btn-success add_post" name="addpost">ADD POST</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>



<!-- Update starts -->
  <!-- Modal: Members -->
  <div class="modal fade" id="UpdatemodalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Update Post
                  </h4>
              
                </div>
                <div class="col-auto">

                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              
                </div>
              </div> <!-- / .row -->
            </div>
         
            <div class="card-body">

              <!-- List group -->
<form action="/updatepost" method="post" enctype="multipart/form-data">
@csrf

<input type="hidden" name="_token" value="{{ csrf_token() }}">

              <input type="text" class="form-control form-control-rounded" placeholder="Enter title" name="utitle" id="utitle" >
           <br>
              <textarea class="form-control" data-toggle="autosize" rows="3" placeholder="Post Body"  name="ubody" id="ubody"></textarea>
<br>
<input type="hidden" name="slug" >

<input type="file" name="upost_image" id="upost_image" class="form-control">
<input type="hidden" value="{{auth()->user()->id}}" id="user_id" name="user_id">
<br>
<input type="hidden" id="blog_id" name="blog_id" value="0">

   
              <button type="submit" id="btn-save" class="btn btn-success updatepost" name="updatepost">UPDATE POST</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

<!-- update end -->
    <!-- Modal: Search -->
    <div class="modal fade" id="sidebarModalSearch" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-body" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
     
            <!-- Form -->
            <form class="mb-4">
              <div class="input-group input-group-merge input-group-rounded">
                <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>

            <!-- List group -->
            <div class="my-n3">
              <div class="list-group list-group-flush list">
                <a href="team-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml-n2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Airbnb
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->
                </a>
                <a href="team-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml-n2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Medium Corporation
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->
                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml-n2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Homepage Redesign
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml-n2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Travels & Time
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml-n2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Safari Exploration
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->
            
                </a>
                <a href="profile-posts.html" class="list-group-item px-0">
            
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>

                    </div>
                    <div class="col ml-n2">
                  
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Dianna Smiley
                      </h4>

                      <!-- Status -->
                      <p class="text-body small mb-0">
                        <span class="text-success">●</span> Online
                      </p>

                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="profile-posts.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>

                    </div>
                    <div class="col ml-n2">
                  
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Ab Hadley
                      </h4>

                      <!-- Status -->
                      <p class="text-body small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>

                    </div>
                  </div> <!-- / .row -->
            
                </a>
              </div>
            </div>
      
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Activity -->
    <div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <!-- Title -->
            <h4 class="modal-title">
              Notifications
            </h4>

            <!-- Link -->
            <a href="#!">
              Mark all as read
            </a>
        
          </div>
          <div class="modal-body">

            <!-- List group -->
            <div class="list-group list-group-flush my-n3">
              <a class="list-group-item text-reset px-0" href="#!">
          
                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml-n2">
                
                    <!-- Content -->
                    <div class="small">
                      <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess, and 3 others.
                    </div>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item text-reset px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml-n2">
                
                    <!-- Content -->
                    <div class="small">
                      <strong>Ab Hadley</strong> reacted to your post with a 😍
                    </div>
                
                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item text-reset px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml-n2">
                
                    <!-- Content -->
                    <div class="small">
                      <strong>Adolfo Hess</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                    </div>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item text-reset px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml-n2">
                
                    <!-- Content -->
                    <div class="small">
                      <strong>Daniela Dewitt</strong> subscribed to you.
                    </div>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item text-reset px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml-n2">
                
                    <!-- Content -->
                    <div class="small">
                      <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                    </div>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item text-reset px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml-n2">
                
                    <!-- Content -->
                    <div class="small">
                      <strong>Ryu Duke</strong> reacted to your post with a 😍
                    </div>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item text-reset px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml-n2">
                
                    <!-- Content -->
                    <div class="small">
                      <strong>Glen Rouse</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                    </div>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
              <a class="list-group-item text-reset px-0" href="#!">

                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml-n2">
                
                    <!-- Content -->
                    <div class="small">
                      <strong>Grace Gross</strong> subscribed to you.
                    </div>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->

              </a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Kanban task -->
    <div class="modal fade" id="modalKanbanTask" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-lighter">
          <div class="modal-body">

            <!-- Header -->
            <div class="row">
              <div class="col">

                <!-- Prettitle -->
                <h6 class="text-uppercase text-muted mb-3">
                  <a href="#!" class="text-reset">How to Use Kanban</a>
                </h6>

                <!-- Title -->
                <h2 class="mb-2">
                  Update Dashkit to include new components!
                </h2>

                <!-- Subtitle -->
                <p class="text-muted mb-0">
                  This is a description of this task. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum magna nisi, ultrices ut pharetra eget.
                </p>

              </div>
              <div class="col-auto">

                <!-- Close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    &times;
                  </span>
                </button>
          
              </div>
            </div> <!-- / .row -->

            <!-- Divider -->
            <hr class="my-4">

            <!-- Buttons -->
      

            <!-- Card -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h4 class="card-header-title">
                      Files
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Button -->
                    <a href="#!" class="btn btn-sm btn-white">
                      Add files
                    </a>
                
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-body">

                <div class="row align-items-center">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <a href="project-overview.html" class="avatar">
                      <img src="assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                    </a>

                  </div>
                  <div class="col ml-n2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="project-overview.html">Launchday logo</a>
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">
                      1.5mb PNG Dave
                    </p>
                
                  </div>
                  <div class="col-auto">
                
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                    
                        <a href="#!" class="dropdown-item">
                         Delete Post
                        </a>
                        <a href="#!" class="dropdown-item">
                         Update Post
                        </a>
                      </div>
                    </div>
                
                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <a href="project-overview.html" class="avatar">
                      <img src="assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                    </a>

                  </div>
                  <div class="col ml-n2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="project-overview.html">Launchday logo</a>
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">
                      1.5mb PNG Dave
                    </p>
                
                  </div>
                  <div class="col-auto">
                
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>
                
                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Form -->
                    <form class="mt-1">
                      <textarea class="form-control form-control-flush form-control" data-toggle="autosize" rows="1" placeholder="Leave a comment"></textarea>
                    </form>

                  </div>
                  <div class="col-auto align-self-end">

                    <!-- Icons -->
                    <div class="text-muted mb-2">
                      <a href="#!" class="text-reset mr-3">
                        <i class="fe fe-camera"></i>
                      </a>
                      <a href="#!" class="text-reset mr-3">
                        <i class="fe fe-paperclip"></i>
                      </a>
                      <a href="#!" class="text-reset">
                        <i class="fe fe-mic"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card-body">

                <!-- Comments -->
                <div class="comment mb-3">
                  <div class="row">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a class="avatar avatar-sm" href="profile-posts.html">
                        <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml-n2">
                  
                      <!-- Body -->
                      <div class="comment-body">

                        <div class="row">
                          <div class="col">

                            <!-- Title -->
                            <h5 class="comment-title">
                              Ab Hadley
                            </h5>

                          </div>
                          <div class="col-auto">

                            <!-- Time -->
                            <time class="comment-time">
                              11:12
                            </time>

                          </div>
                        </div> <!-- / .row -->

                        <!-- Text -->
                        <p class="comment-text">
                          Looking good Dianna! I like the image grid on the left, but it feels like a lot to process and doesn't really <em>show</em> me what the product does? I think using a short looping video or something similar demo'ing the product might be better?
                        </p>

                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="comment">
                  <div class="row">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a class="avatar avatar-sm" href="profile-posts.html">
                        <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml-n2">
                  
                      <!-- Body -->
                      <div class="comment-body">

                        <div class="row">
                          <div class="col">

                            <!-- Title -->
                            <h5 class="comment-title">
                              Adolfo Hess
                            </h5>

                          </div>
                          <div class="col-auto">

                            <!-- Time -->
                            <time class="comment-time">
                              11:12
                            </time>

                          </div>
                        </div> <!-- / .row -->

                        <!-- Text -->
                        <p class="comment-text">
                          Any chance you're going to link the grid up to a public gallery of sites built with Launchday?
                        </p>

                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>

              </div>
            </div>

            <!-- Card -->
            <div class="card mb-0">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Activity
                </h4>

              </div>
              <div class="card-body">

                <div class="row align-items-center">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Heading -->
                    <p class="small mb-0">
                      <strong>Johathan Goldstein</strong> reacted to you post with 😊
                    </p>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>
                
                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Heading -->
                    <p class="small mb-0">
                      <strong>Johnathan Goldstein</strong> uploaded the files “Launchday Logo” and “Revisiting the Past”.
                    </p>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>
                
                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Heading -->
                    <p class="small mb-0">
                      <strong>Kimmy Schmitt</strong> shared this task with Donnie Calvin, Casey Fyfe, Jimmy Smits, and 16 others.
                    </p>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>
                
                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Kanban task -->
    <div class="modal fade" id="modalKanbanTaskEmpty" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-lighter">
          <div class="modal-body">

            <!-- Header -->
            <div class="row">
              <div class="col">

                <!-- Prettitle -->
                <h6 class="text-uppercase text-muted mb-3">
                  <a href="#!" class="text-reset">How to Use Kanban</a>
                </h6>

                <!-- Title -->
                <h2 class="mb-2">
                  Update Dashkit to include new components!
                </h2>

                <!-- Subtitle -->
                <textarea class="form-control form-control-flush form-control-auto" data-toggle="autosize" rows="1" placeholder="Add a description..."></textarea>

              </div>
              <div class="col-auto">

                <!-- Close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    &times;
                  </span>
                </button>
          
              </div>
            </div> <!-- / .row -->

            <!-- Divider -->
            <hr class="my-4">

            <!-- Buttons -->
            <div class="mb-4">
              <div class="row">
                <div class="col">

                  <a href="#!" class="btn btn-sm btn-white">
                    Add Reaction
                  </a>

                </div>
                <div class="col-auto">

                  <a href="#!" class="btn btn-sm btn-white">
                    Share
                  </a>

                </div>
              </div> <!-- / .row -->
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-options='{"url": "https://"}'>

                  <div class="fallback">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFileUpload" multiple>
                      <label class="custom-file-label" for="customFileUpload">Choose file</label>
                    </div>
                  </div>

                  <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                    <li class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <div class="avatar">
                            <img class="avatar-img rounded" src="...html" alt="..." data-dz-thumbnail>
                          </div>
                        </div>
                        <div class="col ml-n3">
                          <h4 class="mb-1" data-dz-name>...</h4>
                          <p class="small text-muted mb-0" data-dz-size></p>
                        </div>
                        <div class="col-auto">
                      
                          <div class="dropdown">
                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item" data-dz-remove>
                                Remove
                              </a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Form -->
                    <form class="mt-1">
                      <textarea class="form-control form-control-flush" data-toggle="autosize" rows="1" placeholder="Leave a comment"></textarea>
                    </form>

                  </div>
                  <div class="col-auto align-self-end">

                    <!-- Icons -->
                    <div class="text-muted mb-2">
                      <a href="#!" class="text-reset mr-3">
                        <i class="fe fe-camera"></i>
                      </a>
                      <a href="#!" class="text-reset mr-3">
                        <i class="fe fe-paperclip"></i>
                      </a>
                      <a href="#!" class="text-reset">
                        <i class="fe fe-mic"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- NAVIGATION
    ================================================== -->
    
      
        <nav class="navbar navbar-vertical fixed-left navbar-expand-md " id="sidebar">
          <div class="container-fluid">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="index-2.html">
              <img src="assets/img/logo.svg" class="navbar-brand-img 
              mx-auto" alt="...">
            </a>

            <!-- User (xs) -->
            <div class="navbar-user d-md-none">

              <!-- Dropdown -->
              <div class="dropdown">
        
                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                  <a href="profile-posts.html" class="dropdown-item">Profile</a>
                  <a href="settings.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

              </div>

            </div>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">

              <!-- Form -->
              <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                  <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-search"></span>
                    </div>
                  </div>
                </div>
              </form>
      
              <!-- Navigation -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#sidebarDashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                    <i class="fe fe-home"></i> Dashboards
                  </a>
                
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarPages">
                    <i class="fe fe-file"></i> Pages
                  </a>
                  <div class="collapse show" id="sidebarPages">
                    <ul class="nav nav-sm flex-column">
                   
                
                   
                      <li class="nav-item">
                        <a href="#sidebarFeed" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarFeed">
                          Feed
                        </a>
                        <div class="collapse " id="sidebarFeed">
                          <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                              <a href="feed.html" class="nav-link ">
                                Platform
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="social-feed.html" class="nav-link ">
                                Social <span class="badge badge-soft-success ml-auto">New</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a href="kanban.html" class="nav-link ">
                          Kanban <span class="badge badge-soft-success ml-auto">New</span>
                        </a>
                      </li>
                    
                    </ul>
                  </div>
                </li>
                
                <li class="nav-item d-md-none">
                  <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                   <span class="fe fe-bell"></span> Notifications
                  </a>
                </li>
              </ul>

              <!-- Divider -->
              <hr class="navbar-divider my-3">

              <!-- Heading -->
          

              <!-- Navigation -->
           
              <!-- Customize -->
              <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
                <i class="fe fe-sliders mr-2"></i> Customize
              </a>
              
      
              
              <!-- User (md) -->
              <div class="navbar-user d-none d-md-flex" id="sidebarUser">
        
                <!-- Icon -->
                <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                  <span class="icon">
                    <i class="fe fe-bell"></i>
                  </span>
                </a>

                <!-- Dropup -->
                <div class="dropup">
          
                  <!-- Toggle -->
                  <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                      <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                    </div>
                  </a>

                  <!-- Menu -->
                  <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="settings.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                  </div>

                </div>

                <!-- Icon -->
                <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
                  <span class="icon">
                    <i class="fe fe-search"></i>
                  </span>
                </a>

              </div>
              

            </div> <!-- / .navbar-collapse -->

          </div>
        </nav>
      
      
        <nav class="navbar navbar-vertical navbar-vertical-sm fixed-left navbar-expand-md " id="sidebarSmall">
          <div class="container-fluid">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarSmallCollapse" aria-controls="sidebarSmallCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="index-2.html">
              <img src="assets/img/logo.svg" class="navbar-brand-img 
              mx-auto" alt="...">
            </a>

            <!-- User (xs) -->
            <div class="navbar-user d-md-none">

              <!-- Dropdown -->
              <div class="dropdown">
        
                <!-- Toggle -->
                <a href="#" id="sidebarSmallIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarSmallIcon">
                  <a href="profile-posts.html" class="dropdown-item">Profile</a>
                  <a href="settings.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

              </div>

            </div>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarSmallCollapse">

              <!-- Form -->
              <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                  <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-search"></span>
                    </div>
                  </div>
                </div>
              </form>

              <!-- Divider -->
              <hr class="navbar-divider d-none d-md-block mt-0 mb-3">
      
              <!-- Navigation -->
              <ul class="navbar-nav">
                <li class="nav-item dropright">
                  <a class="nav-link dropdown-toggle " id="sidebarSmallDashboards" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Dashboards">
                    <i class="fe fe-home"></i> <span class="d-md-none">Dashboards</span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="sidebarSmallDashboards">
                    <li class="dropdown-header d-none d-md-block">
                      <h6 class="text-uppercase mb-0">Dashboards</h6>
                    </li>
                    <li>
                      <a class="dropdown-item " href="index-2.html">
                        Default
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="dashboard-alt.html">
                        Alternative
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropright">
                  <a class="nav-link dropdown-toggle active" id="sidebarSmallPages" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fe fe-file"></i> <span class="d-md-none">Pages</span>
                  </a>
               
                </li>
           
                <li class="nav-item d-md-none">
                  <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                   <span class="fe fe-bell"></span> Notifications
                  </a>
                </li>
              </ul>

              <!-- Divider -->
              <hr class="navbar-divider my-3">

              <!-- Navigation -->
              <ul class="navbar-nav mb-md-4">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Getting started">
                  <a class="nav-link " href="getting-started.html">
                    <i class="fe fe-clipboard"></i> <span class="d-md-none">Getting started</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="components.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Components">
                    <i class="fe fe-book-open"></i> <span class="d-md-none">Components</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="changelog.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Changelog">
                    <i class="fe fe-git-branch"></i> <span class="d-md-none">Changelog</span> <span class="badge badge-primary ml-auto d-md-none">v1.4.2</span>
                  </a>
                </li>
              </ul>
      
              <!-- Push content down -->
              <div class="mt-auto"></div>
      
              
              <!-- Customize -->
              <div class="mb-4" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Customize">
                <a href="#modalDemo" class="btn btn-block btn-primary" data-toggle="modal">
                  <i class="fe fe-sliders"></i> <span class="d-md-none ml-2">Customize</span>
                </a>
              </div>
              
      
              
              <!-- User (md) -->
              <div class="navbar-user d-none d-md-flex flex-column" id="sidebarSmallUser">

                <!-- Icon -->
                <a href="#sidebarModalSearch" class="navbar-user-link mb-3" data-toggle="modal">
                  <span class="icon">
                    <i class="fe fe-search"></i>
                  </span>
                </a>
        
                <!-- Icon -->
                <a href="#sidebarModalActivity" class="navbar-user-link mb-3" data-toggle="modal">
                  <span class="icon">
                    <i class="fe fe-bell"></i>
                  </span>
                </a>

                <!-- Dropup -->
                <div class="dropright">
          
                  <!-- Toggle -->
                  <a href="#" id="sidebarSmallIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                      <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                    </div>
                  </a>

                  <!-- Menu -->
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallIconCopy">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="settings.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                  </div>

                </div>

              </div>
              

            </div> <!-- / .navbar-collapse -->

          </div>
        </nav>
      
    
    
      <nav class="navbar navbar-expand-lg " id="topnav">
        <div class="container">

          <!-- Toggler -->
          <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand mr-auto" href="index-2.html">
            <img src="assets/img/logo.svg" alt="..." class="navbar-brand-img">
          </a>

          <!-- Form -->
          <form class="form-inline mr-4 d-none d-lg-flex">
            <div class="input-group input-group-rounded input-group-merge" data-toggle="lists" data-options='{"valueNames": ["name"]}'>

              <!-- Input -->
              <input type="search" class="form-control form-control-prepended  dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fe fe-search"></i>
                </div>
              </div>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-card">
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list my-n3">
                    <a href="team-overview.html" class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Airbnb
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>
                    
                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a href="team-overview.html" class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Medium Corporation
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>
                    
                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a href="project-overview.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Homepage Redesign
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>
                    
                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="project-overview.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Travels & Time
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>
                    
                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="project-overview.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Safari Exploration
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>
                    
                        </div>
                      </div> <!-- / .row -->
              
                    </a>
                    <a href="profile-posts.html" class="list-group-item px-0">
              
                      <div class="row align-items-center">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">
                    
                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Dianna Smiley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0">
                            <span class="text-success">●</span> Online
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="profile-posts.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">
                    
                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Ab Hadley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0">
                            <span class="text-danger">●</span> Offline
                          </p>

                        </div>
                      </div> <!-- / .row -->
              
                    </a>
                  </div>
          
                </div>
              </div> <!-- / .dropdown-menu -->

            </div>
          </form>

          <!-- User -->
          <div class="navbar-user">
      
            <!-- Dropdown -->
            <div class="dropdown mr-4 d-none d-lg-flex">
        
              <!-- Toggle -->
              <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon active">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">
                
                      <!-- Title -->
                      <h5 class="card-header-title">
                        Notifications
                      </h5>

                    </div>
                    <div class="col-auto">
                
                      <!-- Link -->
                      <a href="#!" class="small">
                        View all
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </div> <!-- / .card-header -->
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush my-n3">
                    <a class="list-group-item text-reset px-0" href="#!">
              
                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">
                    
                          <!-- Content -->
                          <div class="small">
                            <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess, and 3 others.
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">
                    
                          <!-- Content -->
                          <div class="small">
                            <strong>Ab Hadley</strong> reacted to your post with a 😍
                          </div>
                    
                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">
                    
                          <!-- Content -->
                          <div class="small">
                            <strong>Adolfo Hess</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">
                    
                          <!-- Content -->
                          <div class="small">
                            <strong>Daniela Dewitt</strong> subscribed to you.
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">
                    
                          <!-- Content -->
                          <div class="small">
                            <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">
                    
                          <!-- Content -->
                          <div class="small">
                            <strong>Ryu Duke</strong> reacted to your post with a 😍
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">
                    
                          <!-- Content -->
                          <div class="small">
                            <strong>Glen Rouse</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">
                    
                          <!-- Content -->
                          <div class="small">
                            <strong>Grace Gross</strong> subscribed to you.
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                  </div>
            
                </div>
              </div> <!-- / .dropdown-menu -->

            </div>

            <!-- Dropdown -->
            <div class="dropdown">
        
              <!-- Toggle -->
              <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dashboard                </a>
             
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="topnavPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavPages">
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle active" href="#" id="topnavProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavProfile">
                      <a class="dropdown-item active" href="profile-posts.html">
                        Posts
                      </a>
                      <a class="dropdown-item " href="profile-groups.html">
                        Groups
                      </a>
                      <a class="dropdown-item " href="profile-projects.html">
                        Projects
                      </a>
                      <a class="dropdown-item " href="profile-files.html">
                        Files
                      </a>
                      <a class="dropdown-item " href="profile-subscribers.html">
                        Subscribers
                      </a>
                    </div>
                  </li>
               
                  <li>
                    <a class="dropdown-item " href="kanban.html">
                      Kanban
                    </a>
                  </li>
                 
                </ul>
              </li>
           
           
              <li class="nav-item">
                <a class="nav-link" href="#modalDemo" data-toggle="modal">
                  Customize
                </a>
              </li>
            </ul>

          </div>

        </div> <!-- / .container -->
      </nav>
    

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">

      
        <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
          <div class="container-fluid">

            <!-- Form -->
            <form class="form-inline mr-4 d-none d-md-flex">
              <div class="input-group input-group-flush input-group-merge" data-toggle="lists" data-options='{"valueNames": ["name"]}'>

                <!-- Input -->
                <input type="search" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fe fe-search"></i>
                  </div>
                </div>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-card">
                  <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush list my-n3">
                      <a href="team-overview.html" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Airbnb
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>
                    
                          </div>
                        </div> <!-- / .row -->
                      </a>
                      <a href="team-overview.html" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Medium Corporation
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>
                    
                          </div>
                        </div> <!-- / .row -->
                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Homepage Redesign
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Travels & Time
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Safari Exploration
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>
                    
                          </div>
                        </div> <!-- / .row -->
              
                      </a>
                      <a href="profile-posts.html" class="list-group-item px-0">
              
                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">
                    
                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Dianna Smiley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                              <span class="text-success">●</span> Online
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="profile-posts.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">
                    
                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Ab Hadley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                              <span class="text-danger">●</span> Offline
                            </p>

                          </div>
                        </div> <!-- / .row -->
              
                      </a>
                    </div>
          
                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>
            </form>

            <!-- User -->
            <div class="navbar-user">
      
              <!-- Dropdown -->
              <div class="dropdown mr-4 d-none d-md-flex">
        
                <!-- Toggle -->
                <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="icon active">
                    <i class="fe fe-bell"></i>
                  </span>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col">
                
                        <!-- Title -->
                        <h5 class="card-header-title">
                          Notifications
                        </h5>

                      </div>
                      <div class="col-auto">
                
                        <!-- Link -->
                        <a href="#!" class="small">
                          View all
                        </a>

                      </div>
                    </div> <!-- / .row -->
                  </div> <!-- / .card-header -->
                  <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush my-n3">
                      <a class="list-group-item px-0" href="#!">
              
                        <div class="row">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">
                    
                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">
                    
                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">
                    
                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">
                    
                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">
                    
                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">
                    
                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">
                    
                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">
                    
                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Grace Gross</strong> subscribed to you.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                    </div>
            
                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>

              <!-- Dropdown -->
              <div class="dropdown">
        
                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="profile-posts.html" class="dropdown-item">Profile</a>
                  <a href="settings.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

              </div>

            </div>
  
          </div>
        </nav>
      

      <!-- HEADER -->
      <div class="header">

        <!-- Image -->
        <img src="img/bg-img/newcroppy.png" class="header-img-top" alt="...">
        
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body mt-n5 mt-md-n6">
            <div class="row align-items-end">
              <div class="col-auto">
                
                <!-- Avatar -->
                <div class="avatar avatar-xxl header-avatar-top">
                  <img src="{{$user->profile->profileimage()}}" alt="..." class="avatar-img rounded-circle border border-4 border-body">
                </div>

              </div>
              <div class="col mb-3 ml-n3 ml-md-n2">
                
                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Lecturer
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                {{$user->username}}
                </h1>

              </div>

<a href="#modalMembers" class="btn btn-lg btn-rounded-circle btn-white lift mb-2" data-toggle="modal">
                  +
                </a>
              <div class="col-12 col-md-auto mt-2 mt-md-0 mb-md-3">
                
                <!-- Button -->
            
                <button class="btn btn-primary d-block d-md-inline-block lift action-follow" data-id="{{ $user->id }}"><strong>
            @if(auth()->user()->isFollowing($user))
                UnFollow
            @else
                Follow
            @endif
            </strong></button>
          
              </div>
            </div> <!-- / .row -->
            <div class="row align-items-center">
              <div class="col">
                
                <!-- Nav -->
                <ul class="nav nav-tabs nav-overflow header-tabs">
                  <li class="nav-item">
                    <a href="profile-posts.html" class="nav-link active">
                      Posts
                    </a>
                  </li>
                 
                  <li class="nav-item">
                    <a href="/mycourse" class="nav-link">
                      Courses
                    </a>
                  </li>
               
                  <li class="nav-item">
                    <a href="profile-files.html" class="nav-link">
                    Events
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="profile-subscribers.html" class="nav-link">
                      Subscribers
                    </a>
                  </li>
               
                </ul>

              </div>
            </div>
          </div> <!-- / .header-body -->

        </div>
      </div>

      <!-- CONTENT -->

      <div class="container-fluid">
        <div class="row">


          <div class="col-12 col-xl-8">
    
                @foreach($user->blog as $blogs)
            <div class="card">
              <div class="card-body">
                
                <!-- Header -->
                <div class="mb-3">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      
                      <!-- Avatar -->
                      <a href="#!" class="avatar">
                        <img src="{{$user->profile->profileimage()}}" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml-n2">

                      <!-- Title -->
                      <h4 class="card-title mb-1">
                      {{$user->username}}
                      </h4>

                      <!-- Time -->
                      <p class="card-text small text-muted">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">{{date('M j, Y h:ia',strtotime($blogs->created_at))}}  ago</time>
                      </p>
                      
                    </div>
                    <div class="col-auto">
                      
                      <!-- Dropdown -->
                      <div class="dropdown">
                      @if(Auth::user()->id == $blogs->user_id)
                      
                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i>
                        </a>
                       <div class="dropdown-menu dropdown-menu-right">
                        
                          <a href="#!" class="dropdown-item">
                           Delete Post
                          </a>
                      
                          <a href="#UpdatemodalMembers" class="dropdown-item" data-toggle="modal">
                          <button class="btn btn-primary open-modal"  value="{{$blogs->id}}">View
                            </button> 
                          </a>

                          @else
@endif
                        </div>
                      

                      </div>
                      
                    </div>
                  </div> <!-- / .row -->
                </div>

                <!-- Text -->
                <p class="mb-3">
             {{$blogs->body}}
                   </p>
                
               

                <!-- Image -->
                <p class="text-center mb-3">
                  <img src="images/{{$blogs->post_image}}" alt="..." class="img-fluid rounded">
                </p>
                <hr>
              </div>
            </div>
     @endforeach

          </div>


          <div class="col-12 col-xl-4">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body">

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h5 class="mb-0">
                      Birthday
                    </h5>

                  </div>
                  <div class="col-auto">
                    
                    <time class="small text-muted" datetime="1988-10-24">
                      10/24/88
                    </time>

                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h5 class="mb-0">
                      Joined
                    </h5>

                  </div>
                  <div class="col-auto">
                    
                    <time class="small text-muted" datetime="2018-10-28">
                    {{date('M j, Y',strtotime($user->created_at))}}
                    </time>

                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h5 class="mb-0">
                      Location
                    </h5>

                  </div>
                  <div class="col-auto">
                    
                    <small class="text-muted">
                      Los Angeles, CA
                    </small>

                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h5 class="mb-0">
                      Website
                    </h5>

                  </div>
                  <div class="col-auto">
                    
                    <a href="#!" class="small">
                      themes.getbootstrap.com
                    </a>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

            <!-- Weekly Hours -->
         
          </div>
        
          


        </div> <!-- / .row -->
      </div>


    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('js/custom.js') }}" defer></script>
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
    <script src="{{asset('js/holders.js')}}"></script>
    <!-- Map -->
    <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>


    <script type="text/javascript">
  $("body").on("click",".add_post",function(e){
    $(this).parents("form").ajaxForm(options);
  });

  var options = { 
    complete: function(response) 
    {
    	if($.isEmptyObject(response.responseJSON.error)){
     
    		alert('Post Added Successfully.');
    	}else{
    		printErrorMsg(response.responseJSON.error);
    	}
    }
  };


  function printErrorMsg (msg) {
	$(".print-error-msg").find("ul").html('');
	$(".print-error-msg").css('display','block');
	$.each( msg, function( key, value ) {
		$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
	});
  }
</script>



<script type="text/javascript">
 jQuery('body').on('click', '.open-modal', function () {
        var blog_id = $(this).val();
         $.get('blog/' + blog_id, function (data) {
            jQuery('#utitle').val(data.title);
            jQuery('#blog_id').val(data.id);
            jQuery('#ubody').val(data.body);
            jQuery('#btn-save').val("update");
            jQuery('#linkEditorModal').modal('show');
        })
    });
 





  $("body").on("click",".updatepost",function(e){
    $(this).parents("form").ajaxForm(ourupdate);
  });

  var ourupdate = { 
    complete: function(response) 
    {
    	if($.isEmptyObject(response.responseJSON.error)){
     
    		alert('Post Updated Successfully.');
    	}else{
    		printErrorMsg(response.responseJSON.error);
    	}
    }
  };


  function printErrorMsg (msg) {
	$(".print-error-msg").find("ul").html('');
	$(".print-error-msg").css('display','block');
	$.each( msg, function( key, value ) {
		$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
	});
  }
</script>


  </body>

<!-- Mirrored from dashkit.goodthemes.co/profile-posts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2019 13:14:09 GMT -->
</html>