@extends('constants\header')
<style>
     @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 47vh !important;
      }
    }
</style>
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/93.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Use your order ID to confirm pickup</strong>
              </h1>
<!-- 
              <p>
                <strong>Best & free guide of responsive web design</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                  available. Create your own, stunning website.</strong>
              </p> -->

              <a data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-white btn-lg">Forgot order ID?
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->



          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <!-- <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->
    <!--/.Controls-->

  </div>

  <main>
    <div class="container">

      
      <!--Section: Main features & Quick Start-->
      <section>

        <h3 class="h3 text-center mb-5 mt-3">Confirm pickup</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

            <div class="col-lg-6 col-md-12 px-4">
                <form action="/confirm_pickup" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputId">Enter your orderID</label>
                        <input type="text" name="id" class="form-control" id="exampleInputId" placeholder="Enter order ID">
                    </div>
                    <button type="submit" class="btn btn-primary">Confirm pickup</button>
                </form>

            </div>

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <!-- <p class="h5 text-center mb-4">Watch our "5 min Quick Start" tutorial</p> -->
            <div class="embed-responsive embed-responsive-16by9">
              <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe> -->
            </div>
          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">



    </div>
  </main>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enter your email to request your order ID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/get_id" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Request ID</button>
            </div>
        </form>
    </div>
  </div>
</div>