<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>DryCleaner</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 170vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }

    .image {
        height: 30vh;
    }
    .image img {
        height: 100%;
        object-fit: cover;
    } 
    .image img:hover {
        transform: scale(0.99);
    }     
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <strong>DryCleaner</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/docs/jquery/" target="_blank">About MDB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">Free download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Free tutorials</a>
          </li> -->
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="/check_order" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fab fa-githu b mr-2"></i>Confirm Order
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
@yield('content')

  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

<!--Call to action-->
<div class="pt-4">
  <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">Download MDB
    <i class="fas fa-download ml-2"></i>
  </a>
  <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start free tutorial
    <i class="fas fa-graduation-cap ml-2"></i>
  </a>
</div>
<!--/.Call to action-->

<hr class="my-4">

<!-- Social icons -->
<div class="pb-4">
  <a href="https://www.facebook.com/mdbootstrap" target="_blank">
    <i class="fab fa-facebook-f mr-3"></i>
  </a>

  <a href="https://twitter.com/MDBootstrap" target="_blank">
    <i class="fab fa-twitter mr-3"></i>
  </a>

  <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
    <i class="fab fa-youtube mr-3"></i>
  </a>

  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
    <i class="fab fa-google-plus-g mr-3"></i>
  </a>

  <a href="https://dribbble.com/mdbootstrap" target="_blank">
    <i class="fab fa-dribbble mr-3"></i>
  </a>

  <a href="https://pinterest.com/mdbootstrap" target="_blank">
    <i class="fab fa-pinterest mr-3"></i>
  </a>

  <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
    <i class="fab fa-github mr-3"></i>
  </a>

  <a href="http://codepen.io/mdbootstrap/" target="_blank">
    <i class="fab fa-codepen mr-3"></i>
  </a>
</div>
<!-- Social icons -->

<!--Copyright-->
<div class="footer-copyright py-3">
  © 2019 Copyright:
  <!-- <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a> -->
</div>
<!--/.Copyright-->

</footer>

 <!-- JQuery -->
 <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
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
        //    var fname = $("input[name='fname']").val();
        //    var lname = $("input[name='lname']").val();
        //    var email =$("input[name='email']").val();
        //    var phone = $("input[name='phone']").val();
        //    var address = $("input[name='address']").val();
        //    var address2 = $("input[name='address2']").val();
        //    var pickup_time = $("input[name='pickup_time']").val();
        //    var house = $("input[name='house']").val();
        //    var cloth_count = $("input[name='cloth_count']").val();
        //    var info = $("input[name='info']").val();

            $.ajax({
            url: "/submit_order",
            type:"POST",
            data:
            $('#form').serialize(),
            // {
            //     fname: fname,
            //     lname: lname,
            //     email: email,
            //     phone: phone,
            //     address: address,
            //     address2: address2,
            //     pickup_time: pickup_time,
            //     house: house,
            //     cloth_count: cloth_count,
            //     info: info
            // },
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
  <!-- SCRIPTS -->
  
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
  @include('sweetalert::alert')

</body>

</html>
