@extends('constants\header')
  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-5 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Learn Bootstrap 4 with MDB</h1>

            <hr class="hr-light">

            <p>
              <strong>Best & free guide of responsive web design</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                available. Create your own, stunning website.</strong>
            </p>

            <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-indigo btn-lg">Start free tutorial
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
                                <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="inputPhone4" placeholder="Phone*" required>
        
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
                                <input type="text" name="cloth_count" class="form-control @error('cloth_count') is-invalid @enderror" value="{{ old('cloth_count') }}" id="inputClothCount" placeholder="3" required>
                                <span class="text-danger" id="cloth_count"></span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="house">House no.</label>
                                <input type="text" name="house" class="form-control @error('house') is-invalid @enderror" value="{{ old('house') }}" id="house" placeholder="15">
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
<section class="">

  <!-- Section heading -->
  <h3 class="text-center font-weight-bold mb-5">Latest news</h3>

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
          <a href="#!" class="black-text">We relocated to a new garage</a>
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
          <a href="#!" class="black-text">Top 5 content marketing strategies</a>
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
          <a href="#!" class="black-text">Best practices for minimal design</a>
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
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Material Design for Bootstrap</h3>
            <p>This template is created with Material Design for Bootstrap (
              <strong>MDB</strong> ) framework.</p>
            <p>Read details below to learn more about MDB.</p>
            <!-- Main heading -->

            <hr>

            <p>
              <strong>400+</strong> material UI elements,
              <strong>600+</strong> material icons,
              <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
              <strong>Free for personal and commercial use.</strong>
            </p>

            <!-- CTA -->
            <a target="_blank" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" class="btn btn-indigo btn-md">Download
              <i class="fas fa-download ml-1"></i>
            </a>
            <a target="_blank" href="https://mdbootstrap.com/docs/jquery/components/" class="btn btn-indigo btn-md">Live demo
              <i class="far fa-image ml-1"></i>
            </a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section>

        <h3 class="h3 text-center mb-5">About MDB</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-code fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Bootstrap 4</h5>
                <p class="grey-text">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</p>
              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-book fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Detailed documentation</h5>
                <p class="grey-text">We give you detailed user-friendly documentation at your disposal. It will help you to implement your ideas
                  easily.
                </p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>

            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-graduation-cap fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Lots of tutorials</h5>
                <p class="grey-text">We care about the development of our users. We have prepared numerous tutorials, which allow you to learn
                  how to use MDB as well as other technologies.</p>
              </div>
            </div>
            <!--/Third row-->

          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <p class="h5 text-center mb-4">Watch our "5 min Quick Start" tutorial</p>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
            </div>
          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">

      <!--Section: Not enough-->
      <section>

        <h2 class="my-5 h3 text-center">Not enough?</h2>

        <!--First row-->
        <div class="row features-small mb-5 mt-3 wow fadeIn">

          <!--First column-->
          <div class="col-md-4">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Free for personal and commercial use</h6>
                <p class="grey-text">Our license is user-friendly. Feel free to use MDB for both private as well as commercial projects.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">400+ UI elements</h6>
                <p class="grey-text">An impressive collection of flexible components allows you to develop any project.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">600+ icons</h6>
                <p class="grey-text">Hundreds of useful, scalable, vector icons at your disposal.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Fully responsive</h6>
                <p class="grey-text">It doesn't matter whether your project will be displayed on desktop, laptop, tablet or mobile phone. MDB
                  looks great on each screen.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Fourth row-->
          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-4 flex-center">
            <img src="https://mdbootstrap.com/img/Others/screens.png" alt="MDB Magazine Template displayed on iPhone" class="z-depth-0 img-fluid">
          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-md-4 mt-2">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">70+ CSS animations</h6>
                <p class="grey-text">Neat and easy to use animations, which will increase the interactivity of your project and delight your visitors.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Plenty of useful templates</h6>
                <p class="grey-text">Need inspiration? Use one of our predefined templates for free.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Easy installation</h6>
                <p class="grey-text">5 minutes, a few clicks and... done. You will be surprised at how easy it is.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Easy to use and customize</h6>
                <p class="grey-text">Using MDB is straightforward and pleasant. Components flexibility allows you deep customization. You will
                  easily adjust each component to suit your needs.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Fourth row-->
          </div>
          <!--/Third column-->

        </div>
        <!--/First row-->

      </section>
      <!--Section: Not enough-->

      <hr class="mb-5">

      <!--Section: More-->
      <section>

        <h2 class="my-5 h3 text-center">...and even more</h2>

        <!--First row-->
        <div class="row features-small mt-5 wow fadeIn">

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fab fa-firefox fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2 pl-3">
                <h5 class="feature-title font-bold mb-1">Cross-browser compatibility</h5>
                <p class="grey-text mt-2">Chrome, Firefox, IE, Safari, Opera, Microsoft Edge - MDB loves all browsers; all browsers love MDB.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-level-up-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Frequent updates</h5>
                <p class="grey-text mt-2">MDB becomes better every month. We love the project and enhance as much as possible.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-comments fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Active community</h5>
                <p class="grey-text mt-2">Our society grows day by day. Visit our forum and check how it is to be a part of our family.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">jQuery 3.x</h5>
                <p class="grey-text mt-2">MDB is integrated with newest jQuery. Therefore you can use all the latest features which come along with
                  it.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

        </div>
        <!--/First row-->

        <!--Second row-->
        <div class="row features-small mt-4 wow fadeIn">

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-cubes fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Modularity</h5>
                <p class="grey-text mt-2">Material Design for Bootstrap comes with both, compiled, ready to use libraries including all features as
                  well as modules for CSS (SASS files) and JS.</p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-question fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Technical support</h5>
                <p class="grey-text mt-2">We care about reliability. If you have any questions - do not hesitate to contact us.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Flexbox</h5>
                <p class="grey-text mt-2">MDB fully supports Flex Box. You can forget about alignment issues.</p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="far fa-file-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">SASS files</h5>
                <p class="grey-text mt-2">Arranged and well documented .scss files can't wait until you compile them.</p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

        </div>
        <!--/Second row-->

      </section>
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->

  <!--/.Footer-->
 