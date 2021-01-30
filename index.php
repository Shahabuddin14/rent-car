<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Narayangonj Rent A Car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo.png" type="image" sizes="20x40">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Customize CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/slick.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">   
    <!-- Navigation Bar-->
    <nav class="navbar navbar-expand-md sticky-top my_nav">
        <a class="navbar-brand log_nav" href="index.php">
            <img src="images/logo.png" alt="Logo" class="img-fluid logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end my_menu" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#area">Service Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Navigation Slider-->
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide my_carousel" data-ride="carousel">            
            <div class="carousel-inner">
                <!--Slide 1-->
                <div class="carousel-item active sl_img">
                    <img src="images/slide-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block d-block">
                        <div class="slide_text">
                            <h4>Welcome to <small>Narayanganj Rent-A-Car</small></h4>
                            <p>Easy to bookd  &amp; safe travel</p>  
                            <div class="c_btn">
                                <a href="booked.php">Book A CAR</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Slide 2-->
                <div class="carousel-item sl_img">
                    <img src="images/slide-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block d-block">
                        <div class="slide_text">
                            <h4>Welcome to <small>Narayanganj Rent-A-Car</small></h4>
                            <p>Easy to bookd  &amp; safe travel</p> 
                            <div class="c_btn">
                                <a href="booked.php">Book A CAR</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Slide 3-->
                <div class="carousel-item sl_img">
                    <img src="images/slide-3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block d-block">
                        <div class="slide_text">
                            <h4>Welcome to <small>Narayanganj Rent-A-Car</small></h4>
                            <p>Easy to bookd  &amp; safe travel</p>   
                            <div class="c_btn">
                                <a href="booked.php">Book A CAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="about" id="about">
        <div class="container main-container clearfix">
            
            <div class="row">
                <div class="col-md-6">
                    <img src="images/slide-3.png" class="img-fluid" alt="" />
                </div>

                <div class="col-md-6 aboutDetails">
                    <h3>ABOUT US</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi fuga aspernatur, quaerat eius numquam iste expedita dicta ipsum recusandae! Magnam harum quia laborum alias, expedita minus itaque illum voluptates recusandae?</p>

                    <div class="pt50 counterlist">
                        <div class="row justify-content-center">
                            <div class="col-4 col-md-4">
                                <div class="counter_box">
                                    <div class="divider"></div>
                                    <i class="fas fa-car"></i><br>
                                    <span class="counter">120</span>
                                    <h5>Number of Ride</h5>
                                </div>
                            </div>
                            
                            <div class="col-4 col-md-4">
                                <div class="counter_box">
                                    <div class="divider"></div>
                                    <i class="far fa-laugh-beam"></i><br>
                                    <span class="counter">49</span>
                                    <h5>Happy Clients</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- testimonial start -->
            <div class="testimonial_carousel mt50">
                <div class="testimonial_box">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae autem repudiandae incidunt ratione, mollitia laborum. Eligendi sint modi totam nisi? Deleniti veritatis quidem asperiores voluptatem, qui? Aperiam, reprehenderit. Ab, voluptas!</p>
                    <div class="testimonial_author">
                        <img src="images/slide-1.png" alt="author">
                        <h5>maria smith</h5>
                         <p>project manager <span>company</span></p> 
                    </div>
                </div>

                <div class="testimonial_box">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.</p>
                    <div class="testimonial_author">
                        <img src="images/slide-2.png" alt="author">
                        <h5>maria smith</h5>
                        <p>project manager <span>company</span></p>
                    </div>
                </div>
                
                <div class="testimonial_box">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.</p>
                    <div class="testimonial_author">
                        <img src="images/slide-3.png" alt="author">
                        <h5>maria smith</h5>
                        <p>project manager <span>company</span></p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    
    <!-- Service Section -->
    <div id="services" class="service">
        <div class="container">
            <h3>OUR SERVICES</h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="images/day-trip.png" alt="" class="img-fluid">
                    <p>Day Trip</p>
                </div>
                
                <div class="col-md-3">
                    <img src="images/long-trip.png" alt=""class="img-fluid">
                    <p>Long Trip</p>
                </div>
                
                <div class="col-md-3">
                    <img src="images/inside-dhaka.png" alt="" class="img-fluid">
                    <p>Inside Dhaka</p>
                </div>
                
                <div class="col-md-3">
                    <img src="images/outside-dhaka.png" alt="" class="img-fluid">
                    <p>Outside Dhaka</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Area Section -->
    <div id="area" class="area">

        <h3>SERVICES AREA</h3>

        <img src="images/MAP.jpg" alt="" class="img-fluid">
    </div>


       
    <!--Contact Section -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="section-heading">
                <h3 class="text-center">Contact us</h3>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src="images/footer.png" alt="">
                    <p>Chittagong road, Shiddhirganj, Narayanganj-1430<br><br><strong>Phone : </strong> +88 01751492343</p>
                    
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
                        <a href="https://www.facebook.com/narayanganjrentacar" class="facebook" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-md-6 con_1 col-sm-12">
                    <form>
                        <div class="form-group">
                            <label for="name" style="color: #fff">Your Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="msg" style="color: #fff">Your Message</label>
                            <textarea id="msg" class="form-control"></textarea>
                        </div>

                        <button type="button" class="send">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Section-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p>Copyright © Narayanganj Rent A Car</p>
                </div>

                <div class="col-md-6 col-sm-12">
                    <p class="">Powered by Shahabuddin</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>


    <script src="js/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!--slick carousel -->
    <script src="js/slick.min.js"></script>
    <!--Portfolio Filter-->
    <script src="js/imgloaded.js"></script>
    <script src="js/isotope.js"></script>
    <!-- Magnific-popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!--Counter-->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- WOW JS -->
    <script src="js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="js/main.js"></script>

    <!--  custom script -->
    <script src="js/custom.js"></script>
    <!-- For Navigation-->
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                var scroll = $(window).scrollTop();
                if (scroll > 300) {
                    $(".my_nav").css("background" , "#F2A516");
                }

                else{
                    $(".my_nav").css("background" , "transparent");  	
                }
            })
        })
    </script>
</body>
</html>