<?php 
    //Resiving data from page
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $eventName = $_POST["eventName"];
    $date = $_POST["date"];
    $numberOfPeople = $_POST["numberOfPeople"];


    //Connection to database and server
    include "config.php";

    $insertReservation = "INSERT INTO event_reservation (CName , CMobile , CEmail , EventName , DateOfEvent ,  NumberOfPeople) 
    value ('$name' ,'$tel','$email' , '$eventName' ,'$date','$numberOfPeople')";


    $result = mysqli_query($con , $insertReservation);

    if($result){
        echo "<h1>Thank you we will contact with you on this number: <h1>". $tel;
    }
    else{
        die("Error: ".mysqli_errno($con));
    }


?>