<?php 
    //Resiving data from page
    $applierFirstName = $_POST["applierFirstName"];
    $applierLastName = $_POST["applierLastName"];
    $applierID = $_POST["applierID"];
    $applierEmail = $_POST["applierEmail"];
    $applierEmailPassword = $_POST["applierEmailPassword"];
    $applierAge = $_POST["applierAge"];
    $applierMobile = $_POST["applierMobile"];
    $applierSkillsRange = $_POST["applierSkillsRange"];
    $applierFor = $_POST["applierFor"];
    $lang = $_POST["lang"];
    $brief = $_POST["brief"];

    $langArray = "";
    foreach($lang as $value){
        $langArray = $langArray . $value." , ";
    }

    $applierForArray = " ";
    foreach($applierFor as $value){
        $applierForArray = $applierForArray. $value." , ";
    }

    //Connection to database and server
    include "config.php";


    $insertApplierForm = "INSERT INTO applierform (AFName , ALName ,AID , AEmail , APassword , AAge , AMobile , ASociable ,
     AApplyFor , ALanguage , ABrief) 
    value ('$applierFirstName' ,'$applierLastName' , '$applierID','$applierEmail' ,'$applierEmailPassword' , '$applierAge'
    ,'$applierMobile' ,'$applierSkillsRange' , '$applierForArray','$langArray' ,'$brief')";


    $result = mysqli_query($con , $insertApplierForm);

    if($result){
        echo "<h1>Thank you we will contact with you as soon as possible<h1>";
        echo "<a href='RetriveApplierForm.php'> Click here to view Your application</a>";
    }
    else{
        die("Error: ".mysqli_errno($con));
    }


?>