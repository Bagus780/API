<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Blog</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
      <!-- font awesome css -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section header_bg">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portofolio') }}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('service') }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
                </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding margin_top90">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="blog_taital">My <span class="blog_taital_1">Blog</span></h1>
                  <p class="blog_text">upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
               </div>
            </div>
         </div>
         <div class="blog_section_2">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="blog_box">
                        <div class="blog_img">
                           <h4 class="date_text">Jun 05</h4>
                           <h4 class="prep_text">Veniam, quis nostrud </h4>
                        </div>
                        <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="blog_box">
                        <div class="blog_img_2">
                           <h4 class="date_text">Jun 05</h4>
                           <h4 class="prep_text">Veniam, quis nostrud </h4>
                        </div>
                        <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="blog_box">
                        <div class="blog_box_3">
                           <div class="blog_img">
                              <h4 class="date_text">Jun 05</h4>
                              <h4 class="prep_text">Veniam, quis nostrud </h4>
                           </div>
                           <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="readmore_bt_1"><a href="#">Read More</a></div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- footer section start -->
      <div class="footer_section margin_top90">
         <div class="container">
            <div class="location_text">
               <ul>
                  <li>
                     <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $('#myCarousel').carousel({
            interval: false
         });
         
         //scroll slides on swipe for touch enabled devices
         
         $("#myCarousel").on("touchstart", function(event){
         
            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){
         
                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
         });
      </script>
   </body>
</html>