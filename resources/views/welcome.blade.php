@extends('constants\header')
  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('https://elite-biz.com/wp-content/uploads/2016/08/header_img.gif'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-5 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Trusted laundry service provider</h1>

            <hr class="hr-light">

            <p>
              <strong>Some texts goes here..</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore commodi vitae laudantium!.</strong>
            </p>

            <a href="/#services" class="btn btn-indigo btn-lg">what we offer
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-7 col-xl-6 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card content-->
                <div class="card-body">
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                        <strong id="message"></strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Form -->
                    <form id="form">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- <label for="inputFirstname">First Name</label> -->
                                <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" value="{{ old('fname') }}" id="inputFirstname" placeholder="First Name*" required>
                                <span class="text-danger" id="fname"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <!-- <label for="inputLastname4">Last Name</label> -->
                                <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" value="{{ old('lname') }}" id="inputLastname4" placeholder="Last Name*" required>
                                <span class="text-danger" id="lname"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- <label for="inputEmail4">Email</label> -->
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="inputEmail4" placeholder="Email*" required>
                                <span class="text-danger" id="email"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <!-- <label for="inputPhone4">Phone</label> -->
                                <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="inputPhone4" placeholder="Phone*. ex. 255123456789" required>
        
                                <span class="text-danger" id="phoneError"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address*</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" id="inputAddress" placeholder="1234 Main St" required>
                            <span class="text-danger" id="address"></span>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" name="address2" class="form-control @error('address2') is-invalid @enderror" value="{{ old('address2') }}" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                <span class="text-danger" id=""></span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputClothCount">No.of clothes*</label>
                                <input type="text" name="cloth_count" class="form-control @error('cloth_count') is-invalid @enderror" value="{{ old('cloth_count') }}" id="inputClothCount" placeholder="ex. 3" required>
                                <span class="text-danger" id="cloth_count"></span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="house">House no.</label>
                                <input type="text" name="house" class="form-control @error('house') is-invalid @enderror" value="{{ old('house') }}" id="house" placeholder="ex. 15">
                                <span class="text-danger" id="house"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputInfo">additional info</label>
                                <input type="text" name="info" class="form-control @error('info') is-invalid @enderror" value="{{ old('info') }}" id="inputInfo" placeholder="ex. call me before arriving">
                                <span class="text-danger" id=""></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputDate">Pickup time*</label>
                                <input class="form-control @error('pickup_time') is-invalid @enderror" value="{{ old('pickup_time') }}" name="pickup_time" type="datetime-local" name="date" id="inputDate" required>
                                <span class="text-danger" id="pickup_time"></span>
                            </div>
                        </div>
                        <button id="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div class="container mt-5">


      <!--Section: Content-->
      <section class="" id="services">

        <!-- Section heading -->
        <h3 class="text-center font-weight-bold mb-5">Our Services</h3>

          <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

            <!-- Card -->
            <div class="card hoverable">

              <!-- Card image -->
              <div class="image">
                  <img class="card-img-top" src="https://cdn.thewirecutter.com/wp-content/uploads/2020/04/laundrycoronaviruas-lowres-2x1-iStock-160528106-1024x512.jpg" alt="Card image cap">
              </div>

              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <div class="text-center">
                  <a href="#!" class="text-primary">Washing Clothes</a>
                </div>
                <!-- Text -->
                <p class="card-title text-muted font-small mt-3 mb-2">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                            
                <button type="button" class="btn btn-flat text-primary p-0 mx-0">Read more<i class="fa fa-angle-right ml-2"></i></button>
                
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

            <!-- Card -->
            <div class="card hoverable">
              <div class="image">
                  <img class="card-img-top" src="https://www.mrslaundry.com.sg/wp-content/uploads/2019/08/is-ironing-service-included-in-laundry-pickup-service.jpg" alt="Card image cap">
              </div>

              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <div class="text-center">
                  <a href="#!" class="text-primary">Ioning Clothes</a>
                </div>
                <!-- Text -->
                <p class="card-title text-muted font-small mt-3 mb-2">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                            
                <button type="button" class="btn btn-flat text-primary p-0 mx-0">Read more<i class="fa fa-angle-right ml-2"></i></button>
                
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-0">

            <!-- Card -->
            <div class="card hoverable">
              <div class="image">
                  <img class="card-img-top" src="https://img.favpng.com/5/25/3/t-shirt-clothing-dry-cleaning-laundry-ironing-png-favpng-MzXpCaXhHTBSpNLseFb9wSRbf.jpg" alt="Card image cap">
              </div>

              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <div class="text-center">
                  <a href="#!" class="text-primary">Put your clothes in good order</a>
                </div>
                <!-- Text -->
                <p class="card-title text-muted font-small mt-3 mb-2">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                            
                <button type="button" class="btn btn-flat text-primary p-0 mx-0">Read more<i class="fa fa-angle-right ml-2"></i></button>
                
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
        
        <div class="text-center mt-5">
            <a href="#!">Browse all blog posts</a>
        </div>

      </section>
      <!--Section: Content-->


    </div>
    
  </main>
  <!--Main layout-->

  <!--Footer-->

  <!--/.Footer-->
 