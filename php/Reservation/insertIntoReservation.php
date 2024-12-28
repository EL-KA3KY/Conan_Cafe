<?php
    //Resiving data from page
    $FullName = $_POST["FullName"];
    $TelphoneNumber = $_POST["TelphoneNumber"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $numberOfPeople = $_POST["numberOfPeople"];
    $numberOfTabel = $_POST["numberOfTabel"];
    $meals = $_POST["meals"];


    //Connection to database and server
    include "config.php";

    $insertIntoReservation = "INSERT INTO reservation (ReserverName , ReserverTelphoneNumber , ReserverEmail , ReservationDate , ReservationTime , NumberOfPeople , TabelNumber , Meals)
    value ('$FullName' , '$TelphoneNumber' , '$email' , '$date' , '$time' , '$numberOfPeople' , '$numberOfTabel' , '$meals')";


    $result = mysqli_query($con , $insertIntoReservation);

    if($result){
        echo "<h1>Thank you we will contact with you on this number: <h1>". $TelphoneNumber;
    }
    else{
        die("Error: ".mysqli_errno($con));
    }

?>