<?php 
    include"../includes/config.php"; 
    session_start();
    if(strlen($_SESSION['login'])==0){  
        header('location:index.php');
    }
    else{
        if(isset($_POST['add_blog'])){
                $title = $_POST['title'];
                $body = $_POST['body'];

                $image = $_FILES['image']['name'];
                $image_temp = $_FILES['image']['tmp_name'];
                move_uploaded_file($image_temp, "../images/blogs/$image" );

                $caption = $_POST['caption'];

                $sql = mysqli_query($connection,"INSERT INTO stories (title, body, image, caption, time) values('$title', '$body', '$image', '$caption', now())");

            $_SESSION['msg'] = "Blog Added Successfully !!";
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
                            <h2>Add new blog</h2>
                        </div> 

                        <div class="module-body">
                            <?php 
                                if(isset($_POST['add_blog'])){
                            ?>

                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                            </div>
                            <?php } ?>

                            <br>
                            <form class="form-horizontal row-fluid" name="Category" method="post" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Blog title</label>
                                    <div class="controls">
                                        <input type="text" name="title" class="span8 tip" required>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Blog details</label>
                                    <div class="controls">
                                        <textarea name="body" class="span8 tip" required id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Blog image</label>
                                    <div class="controls">
                                        <input type="file"  name="image" class="span8 tip" required>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Image caption</label>
                                    <div class="controls">
                                        <input type="text" name="caption" class="span8 tip" required>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="add_blog" class="btn">Add</button>
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