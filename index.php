<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

require_once('Connectionclass.php');
$obj = new Connectionclass();

 
$qry="select servicedetails.picture,servicedetails.s_name,servicedetails.s_description,registration.phone ,registration.name from servicedetails INNER JOIN registration ON registration.email=servicedetails.email where registration.paystatus='active' and registration.reg_type='mechanic'";
$service_list=$obj->GetTable($qry);
       

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>InstaMech | Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Shipment a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" property="" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/minimal-slider.css" type="text/css" media="all" />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
    <div class="mian-content">
        <!-- main image slider container -->
        <div class="slide-window">
            <div class="slide-wrapper" style="width: 300%;">
                <div class="slide">
                    <div class="slide-caption">
                        <p>The right choice</p>
                        <h3>Propel <span>yourself</span> into the future.</h3>
                        <div class="cont-btn">
                            <!-- <a class="btn text-uppercase" href="contact.php">
                            Contact</a> -->
                        </div>

                    </div>
                </div>
                <div class="slide slide1">
                    <div class="slide-caption">
                        <p>Ready to go</p>
                        <h3>Premium Worldwide <span>Logistics</span> Network </h3>
                        <div class="cont-btn">
                            <!-- <a class="btn text-uppercase" href="contact.php">
                            Contact</a> -->
                        </div>

                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-caption">
                        <p>The right choice.</p>
                        <h3>Propel <span>yourself</span> into the future.</h3>
                        <div class="cont-btn">
                            <!-- <a class="btn text-uppercase" href="contact.php">
                            Contact</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-controller">
                <div class="slide-control-left">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
                <div class="slide-control-right">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
            </div>
        </div>
        <!-- main image slider container -->

        <div class="header-top-w3layouts">
            <div class="container">

            <?php

             require_once("header.php");
            ?>

            </div>
        </div>

    </div>
    <!-- end of main image slider container -->
    <!-- banner-text -->
    <!-- ab -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
         <!-- can enter need contnets-->
        </div>
    </section>
    <!-- //ab -->
    <!-- banner-bottom-w3ls -->
   
    <!-- //banner-bottom-w3ls -->
    <!-- /services -->
     <!--Usefull-->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4">We Offered Services</h3>
                <div class="row middle-grids">


                <?php
			  
              
                   
              foreach($service_list as $service)
              {


                  //var_dump( $service);
                  ?>
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-archive mb-2"></i>
                                <h5 class="card-title my-3"><?php  echo $service["s_name"];   ?></h5>
                                <p class="card-text"><?php echo $service["s_description"];  ?>
                                </p>

                                <h6 ><button class="btn btn-info" ><?php echo $service["name"];?> <br><?php echo $service["phone"];?></button></h6>   
                            </div>
                        </div>
                    </div>
                    <?php
				  }
			  ?>
                  
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->
  
    <!--/newsletter-->
   <?php
     require_once("footer.php");
   ?>
    <!--//newsletter-->
    
    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="codes/login_exe.php" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label> Name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-center pb-4">
                                <a href="">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

    <!--//model-form-->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/minimal-slider.js"></script>
    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
	<!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
    <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <!--// end-smoth-scrolling -->
    <script src="js/jquery-1.7.2.js"></script>
    <script src="js/jquery.quicksand.js"></script>
    <script src="js/pretty-script.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>

</html>