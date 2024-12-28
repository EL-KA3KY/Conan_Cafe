<?php 
    //Resiving data from page
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $username = $_POST["username"];
    $UserEmail = $_POST["UserEmail"];
    $password = $_POST["password"];
    $ConfirmPassword = $_POST["ConfirmPassword"];
    $PhoneNumber = $_POST["PhoneNumber"];
    $date = $_POST["date"];
    $address = $_POST["address"];


    //Connection to database and server
    include "config.php";

    $insertUser = "INSERT INTO users (UFName , ULName , UName , UEmail  , UPassword ,  UCPassword , UMobile ,UBD , UAddress ) 
    value ('$FirstName' ,'$LastName','$username' , '$UserEmail' ,'$password','$ConfirmPassword','$PhoneNumber','$date','$address')";


    $result = mysqli_query($con , $insertUser);

    if($result){
        echo "<h1>The account created Successfully <br> After login you can order online<h1>";
        echo "<a href='Sign In.php'>Click here to login</a> ";
    }
    else{
        die("Error: ".mysqli_errno($con));
    }


?>