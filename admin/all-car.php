<?php 
    include"../includes/config.php"; 
    session_start();
    if(strlen($_SESSION['login'])==0){  
        header('location:index.php');
    }
    else{
        if(isset($_GET['del'])){
            mysqli_query($connection,"DELETE FROM cars WHERE id = '".$_GET['id']."'");
            $_SESSION['delmsg']="Car deleted";
        }
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
                            <h2>Car list</h2>
                        </div>              

                        <table class="table table-bordered table-condensed datatable-1 table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
        
                                    $query = "SELECT * FROM cars ORDER BY id DESC";
                                    $select_query = mysqli_query($connection, $query);

                                    $cnt = 1;
                                    while($row = mysqli_fetch_assoc($select_query)){
                                        $name = $row['name'];
                                        $image = $row['image'];
                                ?>
                                <tr>
                                    <td><?php echo $cnt ;?></td>
                                    <td><?php echo $name; ?></td>
                                    <td class="span3"><img src="../images/cars/<?php echo $image; ?>" alt=""></td>
                                    <td>
                                        <a href="all-car.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you want to delete?')"><i class="far fa-trash-alt"></i>Delete</a>
                                    </td>
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