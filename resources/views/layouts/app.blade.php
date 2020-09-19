<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
        <style>
            .active {
                background-color: blue;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Dry Cleaners</div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
            </div>
        </div>
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="navbar-toggler-icon" id="menu-toggle"></button>

                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    </ul>
                </div> -->
            </nav>        
            <div class="container-fluid">
                <div class="min-h-screen bg-gray-100">
                    @livewire('navigation-dropdown')
    
                    <!-- Page Heading -->
                    <!-- <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header> -->
    
                    <!-- Page Content -->
                    <main class="bg-light">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </div>
        @stack('modals')

        @livewireScripts
    </body>
<script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
            $('#ord').click(function (){
                $('#add').toggle();
            });
            // $('.list-group-item-action').click(function (){
            //     $('.list-group-item-action').addClass('active');
            //     $('.list-group-item-action').removeClass('bg-light');
            // });
        } );
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script type="text/javascript">
 $(document).ready(function() {
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
        $('#submit').click(function(event){
            event.preventDefault();
            $('#phoneError').text('');
                $('#fname').text('');
                $('#lname').text('');
                $('#email').text('');
                $('#pickup_time').text('');
                $('#address').text('');
                $('#cloth_count').text('');
                $('#house').text('');

            $.ajax({
            url: "/submit_order",
            type:"POST",
            data:
            $('#form').serialize(),
            success:function(response){
                console.log(response);
                $('#message').text(response.success);
                $('.show').show();
                $("#form")[0].reset(); 
                $('.close').click(function (){
                    $('.show').hide();
                });
            },
            
            error:function(response){
                $('#phoneError').html(response.responseJSON.errors.phone);
                $('#fname').html(response.responseJSON.errors.fname);
                $('#lname').html(response.responseJSON.errors.lname);
                $('#email').html(response.responseJSON.errors.email);
                $('#pickup_time').html(response.responseJSON.errors.pickup_time);
                $('#address').html(response.responseJSON.errors.address);
                $('#cloth_count').html(response.responseJSON.errors.cloth_count);
                $('#house').html(response.responseJSON.errors.house);
                console.log(response.responseJSON.errors.phone);
            }
            });
        });
 });       
  </script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
</html>
