
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/profile-files.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2019 13:14:17 GMT -->
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
    

    <title>Dashkit</title>
  </head>
  <body>

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
              Make Dashkit Your Own
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
<!-- Update Course Modal -->

<div class="modal fade" id="UpdatemodalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Update/View  Course
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
            <!-- Coming here -->
            <form action="/editcourse" enctype="multipart/form-data" method="POST">
          
            @csrf
            <div class="card-body">
           
  	<div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>


    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <textarea class="form-control" data-toggle="autosize" rows="3" placeholder="Course Description"  name="udescription" id="udescription"></textarea>

<br>

<div class="input-group input-group-merge mb-3">
  <input type="text" class="form-control form-control-prepended is-valid" placeholder="Course Name" name="ucoursename" id="ucoursename">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>✏</span>
    </div>
  </div>
</div>


<input type="hidden" name="" id="cour_id" name="cour_id">

<input type="hidden" value="{{auth()->user()->id}}" id="user_id" name="user_id">
<br>
<div class="input-group input-group-merge mb-3">
  <input type="text" class="form-control form-control-prepended is-valid" placeholder="Course Code" name="ucoursecode" id="ucoursecode">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>🧿</span>
    </div>
  </div>
</div>

<div class="input-group input-group-merge mb-3">
  <input type="text" class="form-control form-control-prepended is-valid" placeholder="Course Status" name="ustatus" id="ustatus">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>🌠</span>
    </div>
  </div>
</div>

<div class="input-group input-group-merge mb-3">
  <input type="number" class="form-control form-control-prepended is-valid" placeholder="Course Unit" name="uunit" id="uunit">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>🔢</span>
    </div>
  </div>
</div>


<br>
<div class="input-group input-group-merge mb-3">
  <input type="text" class="form-control form-control-prepended is-valid" placeholder="Course duration" name="uduration" id="uduration">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>⌚</span>
    </div>
  </div>
</div>


<br>
<div class="input-group input-group-merge mb-3">
  <input type="number" class="form-control form-control-prepended is-valid" placeholder="Number of lectures" name="ulectures" id="ulectures">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>📗</span>
    </div>
  </div>
</div>

<br>

<div class="input-group input-group-merge mb-3">
  <input type="number" class="form-control form-control-prepended is-valid" placeholder="Number of Quiz" name="uquiz" id="uquiz">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>🎡</span>
    </div>
  </div>
</div>

<br>

<div class="input-group input-group-merge mb-3">
  <input type="number" name="upercentage" id="upercentage" class="form-control form-control-prepended is-valid" placeholder="Pass percentage">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>💻</span>
    </div>
  </div>

</div>

  


	<div class="form-group">
      <label>File:</label>
      <input type="file" name="ucv" id="ucv" class="form-control">
    </div>


    <div class="form-group">
    <button class="btn btn-success update-course" type="submit" id="btn-save">Update Course</button>
    <input type="hidden" id="course_id" name="course_id" value="0">
    </div>
</div>
</form>

</div>


            </div>
          </div>
        </div>
      </div>
    </div>


<!-- Close course update -->
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
                    Add a new Course
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
            <!-- Coming here -->
            <form action="{{ route('createcourse') }}" enctype="multipart/form-data" method="POST" >

            <div class="card-body">
           
  	<div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>


    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <textarea class="form-control" data-toggle="autosize" rows="3" placeholder="Course Description" id="description" name="description" id="description"></textarea>

<br>

<div class="input-group input-group-merge mb-3">
  <input type="text" class="form-control form-control-prepended is-valid" placeholder="Course Name" id="coursename" name="coursename" id="coursename">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>✏</span>
    </div>
  </div>
</div>


<input type="hidden" value="{{auth()->user()->id}}" id="user_id" name="user_id">
<br>
<div class="input-group input-group-merge mb-3">
  <input type="text" class="form-control form-control-prepended is-valid" placeholder="Course Code" name="coursecode" id="coursecode">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>🧿</span>
    </div>
  </div>
</div>

<div class="input-group input-group-merge mb-3">
  <input type="text" class="form-control form-control-prepended is-valid" placeholder="Course Status" name="status" id="status">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>🌠</span>
    </div>
  </div>
</div>

<div class="input-group input-group-merge mb-3">
  <input type="number" class="form-control form-control-prepended is-valid" placeholder="Course Unit" name="unit" id="unit">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>🔢</span>
    </div>
  </div>
</div>


<br>
<div class="input-group input-group-merge mb-3">
  <input type="text" class="form-control form-control-prepended is-valid" placeholder="Course duration" name="duration" id="duration">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>⌚</span>
    </div>
  </div>
</div>


<br>
<div class="input-group input-group-merge mb-3">
  <input type="number" class="form-control form-control-prepended is-valid" placeholder="Number of lectures" name="lectures" id="lectures">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>📗</span>
    </div>
  </div>
</div>

<br>

<div class="input-group input-group-merge mb-3">
  <input type="number" class="form-control form-control-prepended is-valid" placeholder="Number of Quiz" name="quiz" id="quiz">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>🎡</span>
    </div>
  </div>
</div>

<br>

<div class="input-group input-group-merge mb-3">
  <input type="number" name="percentage" id="percentage" class="form-control form-control-prepended is-valid" placeholder="Pass percentage">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span>💻</span>
    </div>
  </div>

</div>

  


	<div class="form-group">
      <label>File:</label>
      <input type="file" name="cv" id="cv" class="form-control">
    </div>


    <div class="form-group">
    <button class="btn btn-success upload-image" type="submit" id="btn-save">Upload Course</button>
    <input type="hidden" id="course_id" name="course_id" value="0">
    </div>
</div>
</form>

</div>


            </div>
          </div>
        </div>
      </div>
    </div>

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
            <div class="mb-4">
              <div class="row">
                <div class="col">

                  <a href="#!" class="btn btn-sm btn-white">
                    😬 1
                  </a>
                  <a href="#!" class="btn btn-sm btn-white">
                    👍 2
                  </a>
                  <a href="#!" class="btn btn-sm btn-white">
                    Add Reaction
                  </a>

                </div>
                <div class="col-auto mr-n3">

                  <div class="avatar-group d-none d-sm-flex">
                    <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                      <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                      <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                      <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                      <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                  </div>

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
                  <div class="collapse " id="sidebarDashboards">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="index-2.html" class="nav-link ">
                          Default
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="dashboard-alt.html" class="nav-link ">
                          Alternative
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarPages">
                    <i class="fe fe-file"></i> Pages
                  </a>
                  <div class="collapse show" id="sidebarPages">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#sidebarProfile" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarProfile">
                          Profile
                        </a>
                        <div class="collapse show" id="sidebarProfile">
                          <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                              <a href="profile-posts.html" class="nav-link ">
                                Posts
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="profile-groups.html" class="nav-link ">
                                Groups
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="profile-projects.html" class="nav-link ">
                                Projects
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="profile-files.html" class="nav-link active">
                                Files
                              </a>
                            </li>
                              <li class="nav-item">
                              <a href="profile-subscribers.html" class="nav-link ">
                                Subscribers
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a href="#sidebarProject" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProject">
                          Project
                        </a>
                        <div class="collapse " id="sidebarProject">
                          <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                              <a href="project-overview.html" class="nav-link ">
                                Overview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="project-files.html" class="nav-link ">
                                Files
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="project-reports.html" class="nav-link ">
                                Reports
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="project-new.html" class="nav-link ">
                                New project
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a href="#sidebarTeam" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTeam">
                          Team
                        </a>
                        <div class="collapse " id="sidebarTeam">
                          <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                              <a href="team-overview.html" class="nav-link ">
                                Overview
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="team-projects.html" class="nav-link ">
                                Projects
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="team-members.html" class="nav-link ">
                                Members
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="team-new.html" class="nav-link ">
                                New team
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
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
                      <li class="nav-item">
                        <a href="orders.html" class="nav-link ">
                          Orders
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="settings.html" class="nav-link ">
                          Settings
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="invoice.html" class="nav-link ">
                          Invoice
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pricing.html" class="nav-link ">
                          Pricing
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                    <i class="fe fe-user"></i> Authentication
                  </a>
                  <div class="collapse" id="sidebarAuth">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#sidebarSignIn" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                          Sign in
                        </a>
                        <div class="collapse" id="sidebarSignIn">
                          <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                              <a href="sign-in-cover.html" class="nav-link">
                                Cover
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="sign-in-illustration.html" class="nav-link">
                                Illustration
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="sign-in.html" class="nav-link">
                                Basic
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a href="#sidebarSignUp" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">
                          Sign up
                        </a>
                        <div class="collapse" id="sidebarSignUp">
                          <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                              <a href="sign-up-cover.html" class="nav-link">
                                Cover
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="sign-up-illustration.html" class="nav-link">
                                Illustration
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="sign-up.html" class="nav-link">
                                Basic
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a href="#sidebarPassword" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPassword">
                          Password reset
                        </a>
                        <div class="collapse" id="sidebarPassword">
                          <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                              <a href="password-reset-cover.html" class="nav-link">
                                Cover
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="password-reset-illustration.html" class="nav-link">
                                Illustration
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="password-reset.html" class="nav-link">
                                Basic
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a href="#sidebarError" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarError">
                          Error
                        </a>
                        <div class="collapse" id="sidebarError">
                          <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                              <a href="error-illustration.html" class="nav-link">
                                Illustration
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="error.html" class="nav-link">
                                Basic
                              </a>
                            </li>
                          </ul>
                        </div>
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
              <h6 class="navbar-heading">
                Documentation
              </h6>

              <!-- Navigation -->
              <ul class="navbar-nav mb-md-4">
                <li class="nav-item">
                  <a class="nav-link " href="getting-started.html">
                    <i class="fe fe-clipboard"></i> Getting started
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                    <i class="fe fe-book-open"></i> Components
                  </a>
                  <div class="collapse " id="sidebarComponents">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="components.html#alerts" class="nav-link">
                          Alerts
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#autosizePlugin" class="nav-link">
                          Autosize
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#avatars" class="nav-link">
                          Avatars
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#badges" class="nav-link">
                          Badges
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#breadcrumb" class="nav-link">
                          Breadcrumb
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#buttons" class="nav-link">
                          Buttons
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#button-group" class="nav-link">
                          Button group
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#cards" class="nav-link">
                          Cards
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#charts" class="nav-link">
                          Charts
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#dropdowns" class="nav-link">
                          Dropdowns
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#forms" class="nav-link">
                          Forms
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#icons" class="nav-link">
                          Icons
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#kanban" class="nav-link">
                          Kanban
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#lists" class="nav-link">
                          Lists
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#map" class="nav-link">
                          Map
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#modal" class="nav-link">
                          Modal
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#navs" class="nav-link">
                          Navs
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#navbarExample" class="nav-link">
                          Navbar
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#page-headers" class="nav-link">
                          Page headers
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#pagination" class="nav-link">
                          Pagination
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#popovers" class="nav-link">
                          Popovers
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#progress" class="nav-link">
                          Progress
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#social-posts" class="nav-link">
                          Social post
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#spinners" class="nav-link">
                          Spinners
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#tables" class="nav-link">
                          Tables
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#toasts" class="nav-link">
                          Toasts
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#tooltips" class="nav-link">
                          Tooltips
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#typography" class="nav-link">
                          Typography
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="components.html#utilities" class="nav-link">
                          Utilities
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="changelog.html">
                    <i class="fe fe-git-branch"></i> Changelog <span class="badge badge-primary ml-auto">v1.4.2</span>
                  </a>
                </li>
              </ul>
      
              <!-- Push content down -->
              <div class="mt-auto"></div>
      
              
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
                  <ul class="dropdown-menu" aria-labelledby="sidebarSmallPages">
                    <li class="dropdown-header d-none d-md-block">
                      <h6 class="text-uppercase mb-0">Pages</h6>
                    </li>
                    <li class="dropright">
                      <a class="dropdown-item dropdown-toggle active" href="#" id="sidebarSmallProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                      </a>
                      <div class="dropdown-menu" aria-labelledby="sidebarSmallProfile">
                        <a class="dropdown-item " href="profile-posts.html">
                          Posts
                        </a>
                        <a class="dropdown-item " href="profile-groups.html">
                          Groups
                        </a>
                        <a class="dropdown-item " href="profile-projects.html">
                          Projects
                        </a>
                        <a class="dropdown-item active" href="profile-files.html">
                          Files
                        </a>
                        <a class="dropdown-item " href="profile-subscribers.html">
                          Subscribers
                        </a>
                      </div>
                    </li>
                    <li class="dropright">
                      <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Project
                      </a>
                      <div class="dropdown-menu" aria-labelledby="sidebarSmallProject">
                        <a class="dropdown-item " href="project-overview.html">
                          Overview
                        </a>
                        <a class="dropdown-item " href="project-files.html">
                          Files
                        </a>
                        <a class="dropdown-item " href="project-reports.html">
                          Reports
                        </a>
                        <a class="dropdown-item " href="project-new.html">
                          New project
                        </a>
                      </div>
                    </li>
                    <li class="dropright">
                      <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Team
                      </a>
                      <div class="dropdown-menu" aria-labelledby="sidebarSmallTeam">
                        <a class="dropdown-item " href="team-overview.html">
                          Overview
                        </a>
                        <a class="dropdown-item " href="team-projects.html">
                          Projects
                        </a>
                        <a class="dropdown-item " href="team-members.html">
                          Members
                        </a>
                        <a class="dropdown-item " href="team-new.html">
                          New team
                        </a>
                      </div>
                    </li>
                    <li class="dropright">
                      <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallFeed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Feed
                      </a>
                      <div class="dropdown-menu" aria-labelledby="sidebarSmallFeed">
                        <a class="dropdown-item " href="feed.html">
                          Platform
                        </a>
                        <a class="dropdown-item " href="social-feed.html">
                          Social
                        </a>
                      </div>
                    </li>
                    <li>
                      <a class="dropdown-item " href="kanban.html">
                        Kanban
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="orders.html">
                        Orders
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="settings.html">
                        Settings
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="invoice.html">
                        Invoice
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="pricing.html">
                        Pricing
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropright">
                  <a class="nav-link dropdown-toggle" id="sidebarSmallAuth" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fe fe-user"></i> <span class="d-md-none">Auth</span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="sidebarSmallAuth">
                    <li class="dropdown-header d-none d-md-block">
                      <h6 class="text-uppercase mb-0">Authentication</h6>
                    </li>
                    <li class="dropright">
                      <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign in
                      </a>
                      <div class="dropdown-menu" aria-labelledby="sidebarSmallSignIn">
                        <a class="dropdown-item" href="sign-in-cover.html">
                          Cover
                        </a>
                        <a class="dropdown-item" href="sign-in-illustration.html">
                          Illustration
                        </a>
                        <a class="dropdown-item" href="sign-in-basics.html">
                          Basic
                        </a>
                      </div>
                    </li>
                    <li class="dropright">
                      <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign up
                      </a>
                      <div class="dropdown-menu" aria-labelledby="sidebarSmallSignUp">
                        <a class="dropdown-item" href="sign-up-cover.html">
                          Cover
                        </a>
                        <a class="dropdown-item" href="sign-up-illustration.html">
                          Illustration
                        </a>
                        <a class="dropdown-item" href="sign-up.html">
                          Basic
                        </a>
                      </div>
                    </li>
                    <li class="dropright">
                      <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Password reset
                      </a>
                      <div class="dropdown-menu" aria-labelledby="sidebarSmallPassword">
                        <a class="dropdown-item" href="password-reset-cover.html">
                          Cover
                        </a>
                        <a class="dropdown-item" href="password-reset-illustration.html">
                          Illustration
                        </a>
                        <a class="dropdown-item" href="password-reset.html">
                          Basic
                        </a>
                      </div>
                    </li>
                    <li class="dropright">
                      <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Error
                      </a>
                      <div class="dropdown-menu" aria-labelledby="sidebarSmallError">
                        <a class="dropdown-item" href="error-illustration.html">
                          Illustration
                        </a>
                        <a class="dropdown-item" href="error.html">
                          Basic
                        </a>
                      </div>
                    </li>
                  </ul>
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
                <a class="nav-link dropdown-toggle " href="#" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dashboards
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavDashboards">
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
                      <a class="dropdown-item " href="profile-posts.html">
                        Posts
                      </a>
                      <a class="dropdown-item " href="profile-groups.html">
                        Groups
                      </a>
                      <a class="dropdown-item " href="profile-projects.html">
                        Projects
                      </a>
                      <a class="dropdown-item active" href="profile-files.html">
                        Files
                      </a>
                      <a class="dropdown-item " href="profile-subscribers.html">
                        Subscribers
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Project
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavProject">
                      <a class="dropdown-item " href="project-overview.html">
                        Overview
                      </a>
                      <a class="dropdown-item " href="project-files.html">
                        Files
                      </a>
                      <a class="dropdown-item " href="project-reports.html">
                        Reports
                      </a>
                      <a class="dropdown-item " href="project-new.html">
                        New project
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Team
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavTeam">
                      <a class="dropdown-item " href="team-overview.html">
                        Overview
                      </a>
                      <a class="dropdown-item " href="team-projects.html">
                        Projects
                      </a>
                      <a class="dropdown-item " href="team-members.html">
                        Members
                      </a>
                      <a class="dropdown-item " href="team-new.html">
                        New team
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavFeed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Feed
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavFeed">
                      <a class="dropdown-item " href="feed.html">
                        Platform
                      </a>
                      <a class="dropdown-item " href="social-feed.html">
                        Social
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="dropdown-item " href="kanban.html">
                      Kanban
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="orders.html">
                      Orders
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="settings.html">
                      Settings
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="invoice.html">
                      Invoice
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="pricing.html">
                      Pricing
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="topnavAuth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Auth
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavAuth">
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sign in
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavSignIn">
                      <a class="dropdown-item" href="sign-in-cover.html">
                        Cover
                      </a>
                      <a class="dropdown-item" href="sign-in-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="sign-in-basics.html">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sign up
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavSignUp">
                      <a class="dropdown-item" href="sign-up-cover.html">
                        Cover
                      </a>
                      <a class="dropdown-item" href="sign-up-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="sign-up.html">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#" id="topnavPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Password reset
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavPassword">
                      <a class="dropdown-item" href="password-reset-cover.html">
                        Cover
                      </a>
                      <a class="dropdown-item" href="password-reset-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="password-reset.html">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#" id="topnavError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Error
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavError">
                      <a class="dropdown-item" href="error-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="error.html">
                        Basic
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="topnavDocumentation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Docs
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
                  <li>
                    <a class="dropdown-item " href="getting-started.html">
                      Getting started
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="components.html">
                      Components
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="changelog.html">
                      Changelog
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
        <img src="assets/img/covers/profile-cover-1.jpg" class="header-img-top" alt="...">
        
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body mt-n5 mt-md-n6">
            <div class="row align-items-end">
              <div class="col-auto">
                
                <!-- Avatar -->
                <div class="avatar avatar-xxl header-avatar-top">
                  <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle border border-4 border-body">
                </div>

              </div>
              <div class="col mb-3 ml-n3 ml-md-n2">
                
                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Members
                </h6>

                <!-- Title -->
                <h1 class="header-title">
              
                </h1>

              </div>
              <div class="col-12 col-md-auto mt-2 mt-md-0 mb-md-3">
                
                <!-- Button -->
                <a href="#modalMembers" class="btn btn-lg btn-rounded-circle btn-white lift" data-toggle="modal">
                  +
                </a>



              </div>
            </div> <!-- / .row -->
            <div class="row align-items-center">
              <div class="col">
                
                <!-- Nav -->
                <ul class="nav nav-tabs nav-overflow header-tabs">
                  <li class="nav-item">
                    <a href="profile-posts.html" class="nav-link">
                      Posts
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="profile-groups.html" class="nav-link">
                      Groups
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="profile-projects.html" class="nav-link">
                      Projects
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="profile-files.html" class="nav-link active">
                      Files
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
          <div class="col-12">
            
            <!-- Files -->
            <div class="card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Files
                    </h4>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Dropdown -->
                    <div class="dropdown">

                      <!-- Toggle -->
                      <a href="#" class="small text-muted dropdown-toggle" data-toggle="dropdown">
                        Sort order
                      </a>

                      <!-- Menu -->
                      <div class="dropdown-menu">
                        <a class="dropdown-item sort" data-sort="name" href="#!">
                          Asc
                        </a>
                        <a class="dropdown-item sort" data-sort="name" href="#!">
                          Desc
                        </a>
                      </div>

                    </div>
    
                  </div>
                  <div class="col-auto">
                    
                    <!-- Button -->
                    <a href="#!" class="btn btn-sm btn-primary">
                      Upload
                    </a>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-header">
                <div class="row">
                  <div class="col-12">
                    
                    <!-- Form -->
                    <form>
                      <div class="input-group input-group-flush input-group-merge">
                        <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fe fe-search"></span>
                          </div>
                        </div>
                      </div>
                    </form>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-body">

                <!-- List -->

                @foreach($course as $cour)
                <ul class="list-group list-group-lg list-group-flush list my-n4">
                  <li class="list-group-item px-0">
                    
                    <div class="row align-items-center">
                      <div class="col-auto">
                        
                        <!-- Avatar -->
                        <a href="#!" class="avatar avatar-lg">
                          <img src="images/{{$cour->cv}}" alt="..." class="avatar-img rounded">
                        </a>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="card-title mb-1 name">
                          <a href="#!">{{$cour->coursename}}</a>
                        </h4>

                        <!-- Text -->
                        <p class="card-text small text-muted mb-1">
                        
                        </p>

                        <!-- Time -->
                        <p class="card-text small text-muted">
                          Uploaded by {{$cour->user->username}} on<time datetime="2018-01-03">{{date('M j, Y ',strtotime($cour->created_at))}}</time>
                        </p>
                        
                      </div>
                      <div class="col-auto">
                        
                        <!-- Button -->
                        <a href="/cvdownload/{{$cour->cv}}" class="btn btn-sm btn-white d-none d-md-inline-block">
                          Download
                        </a>

                      </div>
                      <div class="col-auto">
                        
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#"  class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                          <a href="#UpdatemodalMembers" class="dropdown-item" data-toggle="modal">
                          <button class="btn btn-primary open-modal"  value="{{$cour->id}}">View
                            </button>   
                </a>
                            <a href="#!" class="dropdown-item">
                            <form action="/deletecourse" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="delete_id" value="{{$cour->id}}" >
                            <button class="btn btn-primary delete-link" type="submit"  >Delete
                            </button> 
                            </form>
                          
                            </a>


                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </div>
                    </div> <!-- / .row -->

                  </li>
               
                </ul>
                
                @endforeach
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div>

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    	<script src="http://malsup.github.com/jquery.form.js"></script>
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

<script>

jQuery(document).ready(function($){
 jQuery('body').on('click', '.open-modal', function () {
        var course_id = $(this).val();
        $.get('course/' + course_id, function (data) {
            jQuery('#course_id').val(data.id);

            jQuery('#udescription').val(data.description);
            jQuery('#ucoursename').val(data.coursename);
            jQuery('#ucoursecode').val(data.coursecode);
            jQuery('#uunit').val(data.unit);
            jQuery('#upercentage').val(data.percentage);
            jQuery('#uduration').val(data.duration);
            jQuery('#uquiz').val(data.quiz);
            jQuery('#ustatus').val(data.status);
             jQuery('#ulectures').val(data.lectures);
            jQuery('#cour_id').val(data.id);
            


            jQuery('#btn-save').val("update");
            jQuery('#linkEditorModal').modal('show');
        })
    });
 

    $("body").on("click",".update-course",function(e){
    $(this).parents("form").ajaxForm(updaters);
  });


  var updaters = { 
    complete: function(response) 
    {
    	if($.isEmptyObject(response.responseJSON.error)){
    
    		alert('Course Updated Successfully.');
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



  });


 
</script>


    
<script type="text/javascript">
  $("body").on("click",".upload-image",function(e){
    $(this).parents("form").ajaxForm(options);
  });

  var options = { 
    complete: function(response) 
    {
    	if($.isEmptyObject(response.responseJSON.error)){
        $("input[name='description']").val('');
        $("input[name='duration']").val('');
        $("input[name='lectures']").val('');
        $("input[name='quiz']").val('');
        $("input[name='coursecode']").val('');
        $("input[name='coursename']").val('');
        $("input[name='status']").val('');
        $("input[name='unit']").val('');
        $("input[name='cv']").val('');
    		alert('Course Uploaded Successfully.');
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
  $("body").on("click",".delete-link",function(e){
    $(this).parents("form").ajaxForm(options);
  });

  var options = { 
    complete: function(response) 
    {
    	if($.isEmptyObject(response.responseJSON.error)){
     
    		alert('Course Deleted Successfully.');
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
</html>