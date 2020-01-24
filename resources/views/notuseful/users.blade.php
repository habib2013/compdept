
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="style.css">
</head>
<body id="app">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Users- Codechief.org</div>


                <div class="card-body">
                    <div class="row pl-5">
                        @include('userList', ['users'=>$users])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/custom.js') }}" defer></script>
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


