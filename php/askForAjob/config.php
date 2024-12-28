<?php 
    $con = mysqli_connect("localhost:4306","root","") or die("Error: can't Connect to Server");
    $db = mysqli_select_db($con,"conancafe") or die("Error: can't Connect to Database");
?>