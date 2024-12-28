<!DOCTYPE html>
<html>
    <head>
        <title>Application</title>
    </head>
    <body>
        <h1>Application Form:</h1>
        <?php 
        include "config.php";
        $viewApplication = "SELECT * FROM applierform";
        $result = mysqli_query($con , $viewApplication);

        if(!$result){
            die("Error: ".mysqli_errno($con));
        }
        
        $row = mysqli_fetch_array($result);
        echo "First Name:" .$row["AFName"] ."<br>"; 
        echo "Last Name:".$row["ALName"] ."<br>";
        echo "ID: ".$row["AID"] ."<br>";
        echo "Email: ".$row["AEmail"] ."<br>";
        echo "Password: ".$row["APassword"] ."<br>";
        echo "Age: ".$row["AAge"] ."<br>";
        echo "Mobile:".$row["AMobile"] ."<br>";
        echo "Sociable:".$row["ASociable"] ."<br>";
        echo "Apply For:".$row["AApplyFor"] ."<br>";
        echo "Language:".$row["ALanguage"] ."<br>";
        echo "Brief About Your Self:" .$row["ABrief"] ."<br>";
        ?>
    </body>
</html>