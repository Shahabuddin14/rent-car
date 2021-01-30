<?php

    include('includes/config.php');
    if(isset($_POST['confirm'])){
        $name = $_POST['name'];
        $number = $_POST['number'];
        $car = $_POST['car'];
        $destination = $_POST['destination'];
        $travel_time = $_POST['travel_time'];

        $sql = mysqli_query($connection,"INSERT INTO bookings(name, number, location, travel_time, car, time) values('$name', '$number', '{$destination}', '$travel_time', '$car', now() )");

        $_SESSION['msg'] = "Booking Complete Successfully !! \n Our representative will call you soon.";

    }

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
    
    <div class="confirmBooking">
        <div class="container">
            <h3>Booked A CAR</h3>
            <?php 
                if(isset($_POST['confirm'])){
            ?>

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
            </div>
            <?php } ?>

            <form method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label class="control-label" for="name">Your Name</label>
                            <div class="controls">
                                <input type="text" name="name" placeholder="Enter Your Name" required class="form-control">
                            </div>
                        </div>

                        <div class="col">
                            <label class="control-label" for="name">Your Destination</label>
                            <div class="controls">
                                <input type="text" name="destination" placeholder="Enter Your Destination" required class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="number">Phone Number</label>
                            <div>
                                <input type="number" name="number" id="number" required class="form-control">
                            </div>
                        </div>

                        <div class="col">
                            <label for="number">Tour Date</label>
                            <div>
                                <input type="date" name="travel_time" id="number" required class="form-control">
                            </div>
                        </div>

                        <div class="col">
                            <label for="car">Choose a car</label>
                            <select name="car" class="form-control">
                                <option value="Choose car">Choose car</option>
                                <?php 
                                    $query=mysqli_query($connection,"SELECT * FROM cars ");
                                    while($row=mysqli_fetch_array($query)){
                                ?>

                                <option value="<?php echo $row['name'];?>">
                                    <?php echo $row['name'];?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div style="padding: 20px 0">
                        <button type="submit" name="confirm" class="btn btn-outline-success">Confirm</button>
                    </div>
                </div>
            </form>
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