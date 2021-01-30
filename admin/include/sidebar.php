<div class="span3">
    <div class="sidebar">
        <ul class="widget widget-menu unstyled">
            <li class="active"><a href="home.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages">
                    <i class="fas fa-envelope-open-text"></i>
                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i> Pickup Request
                </a>

                <ul id="togglePages" class="collapse unstyled">
                    <li>
                        <a href="todaysbooking.php">
                            <i class="fas fa-calendar-day"></i> Today's Pickup
                            <?php
                                $f1 = "00:00:00";
                                $from = date('Y-m-d')." ".$f1;
                                $t1 = "23:59:59";
                                $to = date('Y-m-d')." ".$t1;
                                $result = mysqli_query($connection,"SELECT * FROM bookings WHERE time Between '$from' AND '$to' ");
                                $num_rows1 = mysqli_num_rows($result);{
                            ?>
                            <b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
                            <?php } ?>
                        </a>
                    </li>

                    <li>
                        <a href="all-booking.php">
                            <i class="fas fa-truck-pickup"></i> All Pickup
                        </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a class="collapsed" data-toggle="collapse" href="#toggleCars">
                    <i class="fas fa-car-side"></i>
                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>View Cars
                </a>

                <ul id="toggleCars" class="collapse unstyled">
                    <li>
                        <a href="all-car.php">
                            <i class="fas fa-car-alt"></i> Car list
                        </a>
                    </li>

                    <li>
                        <a href="add-car.php">
                            <i class="fas fa-taxi"></i> Add New Car
                        </a>
                    </li>
                </ul>
            </li>
            
                <li>
                <a class="collapsed" data-toggle="collapse" href="#toggleblogs">
                    <i class="fas fa-blog"></i>
                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>View Blogs
                </a>

                <ul id="toggleblogs" class="collapse unstyled">
                    <li>
                        <a href="all-blog.php">
                            <i class="fas fa-rss"></i> Blog list
                        </a>
                    </li>

                    <li>
                        <a href="add-blog.php">
                            <i class="fab fa-blogger-b"></i> Add New Blog
                        </a>
                    </li>
                </ul>
            </li>

            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
</div>