<?php 
    session_start();
    
    $con = mysqli_connect("localhost","root","","onlineteaching");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>