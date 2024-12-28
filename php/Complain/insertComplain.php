<?php 
    //Resiving data from page

    $usrComplainName = $_POST["usrComplainName"];
    $usrComplainMobile = $_POST["usrComplainMobile"];
    $usrComplainDetails = $_POST["usrComplainDetails"];


    $complainArray = "";
    foreach($usrComplainName as $value){
        $complainArray = $complainArray . $value." , ";
    }

    //Connection to database and server
    include "config.php";

    $insertComplain = "INSERT INTO complain (CProblem , CMobile , CDescription ) 
    value ('$complainArray' ,'$usrComplainMobile','$usrComplainDetails')";


    $result = mysqli_query($con , $insertComplain);

    if($result){
        echo "<h1>Thank you we are sorry and we always tring to be better.<h1>";
    }
    else{
        die("Error: ".mysqli_errno($con));
    }


?>