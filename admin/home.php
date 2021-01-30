<?php 
    include"../includes/config.php"; 
    session_start();
    if(strlen($_SESSION['login'])==0){  
        header('location:index.php');
    }
    else{
        include"include/header.php"; 
?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <?php include"include/sidebar.php"; ?>
            <!--/.span3-->
            <div class="span9">
                <div class="content">
                    <div class="btn-controls">
                        <div class="btn-box-row row">
                            <div class="span3">
                                <?php 

                                    $query = "SELECT * FROM bookings ";

                                    if ($select_query = mysqli_query($connection, $query)){
                                        $rowcount = mysqli_num_rows($select_query);
                                    }
                                ?>
                                <a href="all-booking.php">
                                    <h5 class="btn-box big span3"><i class="far fa-envelope"></i>
                                        <b>
                                            <?php 
                                                if($rowcount > 0){
                                                    echo $rowcount;
                                                } 
                                                else{
                                                    echo "0";
                                                } 
                                            ?>
                                        </b>

                                        <p class="text-muted">All Booking</p>
                                    </h5>
                                </a>
                            </div>

                            <div class="span3">
                                <?php 

                                    $query = "SELECT * FROM cars ";

                                    if ($select_query = mysqli_query($connection, $query)){
                                        $rowcount = mysqli_num_rows($select_query);
                                    }
                                ?>
                                <a href="all-car.php">
                                    <h5 class="btn-box big span3"><i class="fas fa-car"></i>
                                        <b><?php echo $rowcount; ?></b>
                                        <p class="text-muted">Total car</p>
                                    </h5>
                                </a>
                            </div>  
                        </div>
                    </div>
                </div>
                <!--/.content-->
            </div>
            <!--/.span9-->
        </div>
    </div>
    <!--/.container-->
</div>
<!--/.wrapper-->
<?php include"include/footer.php"; } ?>