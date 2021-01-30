<?php

//    $SERVER = "localhost";
//    $USER = "narayanganjrenta_rentacar";
//    $PASSWORD = "-Lvbr@dZ}3HQ";
//    $DATABASE = "narayanganjrenta_rentacar";

    $SERVER = "localhost";
    $USER = "root";
    $PASSWORD = "";
    $DATABASE = "rentacar";


    $connection = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE);

    if (!$connection){
        die("Connection failed: ". mysqli_connect_error());
    }

?>