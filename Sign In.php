<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="Conan,Cafe">
        <meta name="description" content="Conan Cafe">
        <meta name ="viewport" content ="width = device-width , initial-scale:1.0">
        <link rel="stylesheet" href="Style.css">
        <script src="script.js"></script>
        <script>
            function login(){
                var UserEmail = document.LoginForm.UserEmail.value;
                var password = document.LoginForm.password.value;
                if(username == "ka3ky" && password == "8682"){
                    window.location.href= "firstPage.php";
                }
                else{
                    alert("Wrong Login");
                }
            }
        </script>
    </head>
    <body>
        <img src="photos/menu.png" width="30px" onclick="openMenu();">
        <div id="sideMenu">
            <ul>
                <li><a href="#" class="closeBtn" onclick="closeMenu();">&times;</a></li>
                <li><a href="firstPage.php">Home</a></li>
                <li><a href="Sign In.php">Sign In</a></li>
                <li><a href="Menu.php">Menu</a></li>
                <li><a href="Cart.php">Cart</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="Reservation.php">Reservation</a></li>
                <li><a href="brief.php">Breief</a></li>
                <li><a href="askForJop.php">ASk for A Job</a></li>
                <li><a href="complain.php">Complain</a></li>
                <li>
                    <a href="https://www.facebook.com/Conan-Cafe-107832870603444"><img src="photos/Facebook.png" width="40" ></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/conan_cafe1/"><img src="photos/Instagram.png" width="40" ></a>&nbsp;&nbsp;
                    <a href="mailto:hazem.m.bakr@gmail.com"><img src="photos/Email.png" width="45" ></a>
                </li>
            </ul>
            </ul>
            </ul>
            </ul>
        </div>
        <div align="center" id="logIn">
            <img src="photos\Sign In & Sign up\Big Logo.jpg" width="25%">
            <fieldset >
                <legend><b>Sign In</b></legend>
                <br/>
                <img src="photos\Sign In & Sign up\Sign In Avatar.png" width="70" height="70">
                <br/><br>
                <form style="text-align: left;" name="LoginForm" method="POST" action = "Sign In.php">
                    <label><b>Email:</b></label>
                    <input type="text" name="UserEmail" placeholder="Enter your Email" required/>
                    <br/><br/>
                    <label><b>Password:</b></label>
                    <input type="password" name="password" placeholder="Enter your Password" required/>
                    <br/><br/>
                    You don't have account!?
                    <a href="Sign Up.php">Register Now</a>
                    <br/><br/>
                    <input type="submit" value="Log In"/>
                    <?php
                    if(isset($_POST["UserEmail"]) && isset($_POST["password"])){
                        $UserEmail = $_POST["UserEmail"];
                        $password = $_POST["password"];
                        include "config.php";
                        $login = "SELECT UEmail,UPassword FROM users WHERE UEmail='$UserEmail' and UPassword='$password' ";
                        $result = mysqli_query($con,$login);
                        $count = mysqli_num_rows($result);
                        if($count ==1){
                            echo "welcome";
                        }
                        else echo "Invalid Email & Password";
                    }
                    ?>
                </form>
            </fieldset>
        </div>
    </body>
</html>