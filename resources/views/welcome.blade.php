<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Overseas</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap-nav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

  </head>

<body>


  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><img src="{{ asset('assets/logos/logo-white.svg') }}" alt=""></a>
    </div>
    <a href="#menu" class="menu-link"><img src="{{ asset('assets/icons/menu-white.svg') }}" alt=""></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li><a href="#section2">Our Screens</a></li>
        <li><a href="#section4">Scedule</a></li>
        <li><a href="#section5">Movie Library</a></li>
        <li><a href="#section6">Location & Contact</a></li>
        <a href="#section6" type="button" data-bs-toggle="offcanvas" data-bs-target="#off_canvas"><img src="{{ asset('assets/icons/menu-white.svg') }}" alt=""></a>
      </ul>
    </nav>
  </header>

  <div class="offcanvas offcanvas-end" id="off_canvas">
    <div class="offcanvas-header">
      <h1 class="offcanvas-title"></h1>
      <a type="button" class="btn-close" data-bs-dismiss="offcanvas"><img src="{{ asset('assets/icons/close-white.svg') }}" alt=""></a>
    </div>
    <div class="offcanvas-body">
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li style="margin-left: 15px; !important"><a href="#section6">Location & Contact</a></li>
                <li><a href="#section6">Gallery</a></li>
            </ul>
        </nav>
    </div>
  </div>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <div id="movie_carousel" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#movie_carousel" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#movie_carousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#movie_carousel" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <video autoplay muted loop id="bg-video">
                <source src="{{ asset('assets/images/header-video.mp4') }}" type="video/mp4" alt="1" class="d-block"/>
            </video>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/batman.jpg') }}" alt="2" class="d-block" style="width:100%">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/spiderman.jpg') }}" alt="3" class="d-block" style="width:100%">
          </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#movie_carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#movie_carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>

      <div class="video-overlay header-text">
          <div class="caption">
              <h2>MOVIE LIBRARY</h2>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="section favorites" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <h2>Collect your favorites</h2>
                    </fieldset>
                </div>
                <div class="col-md-3 search_div">
                    <fieldset>
                        <input name="search" type="text" class="form-control" id="search" placeholder="Search title and add to grid">
                    </fieldset>
                    <div id="results" class="ml-11px" style="background-color: aliceblue; position: absolute; top: 156px; border-radius: 5px; max-width: 373px; max-height: 300px; overflow: scroll; z-index: 2; min-width: 430px; display: none;">

                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="owl-carousel owl-theme">

        </div>
      </div>
    </div>
  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
        <div class="row">
          <div class="col-md-4" style="margin-left: 30px;">
            <h1 style="color: white; margin-top: 60px;">How to reach us</h1>
            <h5 style="color: white; margin-bottom: 50px;">Lorem ipsum dolor sit amet, consetetur.</h5>
          </div>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <label>First Name *</label>
                  <fieldset>
                    <input name="first_name" type="text" class="form-control" id="first_name">
                  </fieldset>
                  <span class="error" id="first_name_error" style="display: none; color: red">This Field is Required</span>
                </div>
              <div class="col-md-6">
                <label>Last Name *</label>
                  <fieldset>
                    <input name="last_name" type="text" class="form-control" id="last_name">
                  </fieldset>
                  <span class="error" id="last_name_error" style="display: none; color: red">This Field is Required</span>
                </div>
                <div class="col-md-12">
                    <label>email *</label>
                  <fieldset>
                    <input name="email" type="email" class="form-control" id="email">
                  </fieldset>
                  <span class="error" id="email_error" style="display: none; color: red">This Field is Required</span>
                </div>
                <div class="col-md-12">
                    <label>Telephone</label>
                  <fieldset>
                    <input name="telephone" type="text" class="form-control" id="telephone">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <label>Message</label>
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message"></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <input name="terms" type="checkbox" id="terms" value="0" style="width: 15px; height: 15px;">
                <label>I agree to the <a href="#" style="color: white"><u>Terms & Conditions</u></a></label>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button" style="float: right; width: 175px; border-radius: 5px;">Submit</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8">
          <div id="map">
            {{-- <iframe src="https://goo.gl/maps/5sW9xsCNvByPnxXE9" width="width: 100%;" height="710px;" frameborder="0" style="border:0;" allowfullscreen></iframe> --}}
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container" style="background-color: rgb(34 32 32); border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: #3c3b3b;">
      <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-2" style="text-align: initial;">
            <h6 style="color: white; margin-left: 50px; margin-top: 35px;font-weight: 900;">Amadeus IT Group</h6>
            <p>C. Salvador de Madariaga,</p>
            <p>128027 Madrid</p>
            <p>Spain</p>
        </div>
        <div class="col-md-3" style="position: absolute; right: 0;">
            <h6 style="color: white; margin-left: 50px; margin-top: 35px;">Follow us on</h6>
            <img src="{{ asset('assets/icons/twitter-white.svg') }}" style="position: absolute; top: 35px; right: 110px;">
            <img src="{{ asset('assets/icons/youtube-white.svg') }}" style="position: absolute; top: 35px; right: 65px;">
        </div>
      </div>
    </div>
    <div class="container" style="background-color: rgb(34 32 32);">
      <div class="row" style="min-height: 60px;">
        <div class="col-md-3" style="text-align: initial;">
            <p style="margin-top: 20px;">Copyright © 2022 Amadeus Hotels. All rights reserved</p>
        </div>
        <div class="col-md-4" style="position: absolute; right: 0;">
            <p style="margin-top: 20px; margin-left: 90px;">Photos by <a href="#" style="color: white;"><u>Felix Mooneeram</u></a> & <a href="#" style="color: white;"><u>Serge Kutuzov</u></a> on <a href="#" style="color: white;"><u>Unsplash</u></a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/js/video.js') }}"></script>
    <script src="{{ asset('assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script src="{{ asset('assets/js/form_validation.js') }}"></script>

    {{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <script>
        function initMap() {
            var loc = {lat: -26.334, lng: 132.034};
            var m1 = new google.maps.Map(
            document.getElementById('map'), {zoom: 3, center: loc});
            var mar = new google.maps.Marker({position: loc, map: m1});
        }
    </script> --}}

</body>
</html>
