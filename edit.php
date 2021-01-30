<?php 
include('includes/config.php');


if(isset($_POST['confirm'])){
            echo $name = $_POST['name'];
            echo $number = $_POST['number'];
            echo $car = $_POST['car'];
            echo $destination = $_POST['destination'];
           
            $sql = mysqli_query($connection,"INSERT INTO bookings(name, number, destination, travel_time, car, time) values('$name', '$number', '$destination', 'travel_time', '$car', now() )");
            
            $_SESSION['msg'] = "Location Added Successfully !!";
          
    }

?>




 <?php 
                                    if(isset($_POST['confirm'])){
                                ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                                </div>
                                <?php } ?>

<form method="post" enctype="multipart/form-data">

<div class="control-group">
<label class="control-label" for="name">Your Name</label>
<div class="controls">
<input type="text" name="name" placeholder="Enter Your Name" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="name">Your Destination</label>
<div class="controls">
<input type="text" name="destination" placeholder="Enter Your Destination" required>
</div>
</div>



<div >
<label  for="number">Phone Number</label>
<div>
<input type="number" name="number" id="number" required>
</div>
</div>

<select name="car" >

<?php 
$query=mysqli_query($connection,"SELECT * FROM cars ");
while($row=mysqli_fetch_array($query)){
?>

<option value="<?php echo $row['name'];?>">
<?php echo $row['name'];?>
</option>
<?php } ?>
</select>




<div >
<div >
<button type="submit" name="confirm" class="btn">Confirm</button>
</div>
</div>
</form>