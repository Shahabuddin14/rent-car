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
            <div class="span9">
                <div class="content">
                    <div class="module" style="padding-bottom: 10px">
                        <div class="module-head">
                            <h2>Today's Booking</h2>
                        </div>              

                        <table class="table table-bordered table-condensed datatable-1 table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Destination</th>
                                    <th>Car</th>
                                    <th>Tour Date</th>
                                    <th>Booking Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    
                                    $f1 = "00:00:00";
                                    $from = date('Y-m-d')." ".$f1;
                                    $t1 = "23:59:59";
                                    $to = date('Y-m-d')." ".$t1;
                                    $query = "SELECT * FROM bookings WHERE time Between '$from' AND '$to' ORDER BY time DESC";
                                    $select_query = mysqli_query($connection, $query);

                                    $cnt = 1;
                                    while($row = mysqli_fetch_assoc($select_query)){
                                        $name = $row['name'];
                                        $number = $row['number'];
                                        $location = $row['location'];
                                        $car = $row['car'];
                                        $travel_time = $row['travel_time'];
                                        $time = $row['time'];
                                ?>
                                <tr>
                                    <td><?php echo $cnt ;?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $number; ?></td>
                                    <td><?php echo $location; ?></td>
                                    <td><?php echo $car; ?></td>
                                    <td><?php echo $travel_time; ?></td>
                                    <td><?php echo $time; ?></td>
                                </tr> <?php $cnt=$cnt+1; } ?>
                            </tbody>
                        </table>
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