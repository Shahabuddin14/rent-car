<?php

    include('includes/config.php');

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $query = "SELECT * FROM stories WHERE id = '$id' ";
            $select_query = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc( $select_query)){
                $id = $row['id'];
                
                $title = $row['title'];
                $body = $row['body'];
                $image = $row['image'];
                $caption = $row['caption'];
                $time = $row['time'];
                $date = date('Y-m-d', strtotime($time));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Narayanganj Rent A Car</title>
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
                    <a class="nav-link" href="index.php#about">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#area">Service Area</a>
                </li>
                   
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contact">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
            </ul>
        </div>
    </nav>
    

    <!-- ======= Blog Section ======= -->
    <div class="single-blog">
        <section id="blog">
            <div class="container">
               <h3><?php echo $title; ?></h3>
                <div class="row">
                    <div class="col-lg-12 entries">
                        <article class="entry entry-single">
                            <div class="entry-img">
                                <img src="images/blogs/<?php echo $image; ?>" alt="" class="img-fluid">
                            </div>

                            <p style="font-style: italic;" class="text-center"><?php echo $caption; ?></p>

                            <div class="entry-content">
                                <p><?php echo $body; ?></p>
                            </div>

                        </article><!-- End blog entry -->
                    </div><!-- End blog entries list --> 

                </div>
            </div>
        </section><!-- End Blog Section -->
    </div>
     <?php }  } ?>


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