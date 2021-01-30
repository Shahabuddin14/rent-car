<?php 
    include"../includes/config.php"; 
    session_start();
    if(strlen($_SESSION['login'])==0){  
        header('location:index.php');
    }
    else{
        if(isset($_POST['add_car'])){
            $name = $_POST['name'];
            $image = $_FILES["image"]["name"];
            $image_temp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_temp, "../images/cars/$image" );
            $query = mysqli_query($connection,"INSERT INTO cars (name, image, time) values('$name', '$image', now() )");

            $_SESSION['msg'] = "Car Added Successfully !!";
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
                            <h2>Add new car</h2>
                        </div> 

                        <div class="module-body">
                            <?php 
                                if(isset($_POST['add_car'])){
                            ?>

                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                            </div>
                            <?php } ?>

                            <br>
                            <form class="form-horizontal row-fluid" name="car" method="post" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Car Name</label>
                                    <div class="controls">
                                        <input type="text" class="span8 tip" name="name" placeholder="Enter Car Name" required>
                                    </div>
                                </div>
                                   
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Car Image</label>
                                    <div class="controls">
                                        <input type="file" class="span8 tip" name="image" required>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="add_car" class="btn">Add</button>
                                    </div>
                                </div>
                            </form>
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