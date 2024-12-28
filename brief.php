<!DOCTYPE html>
<html>
    <head><title>Brief</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="Conan,Cafe">
        <meta name="description" content="Conan Cafe">
        <meta name ="viewport" content ="width = device-width , initial-scale:1.0">
        <link rel="stylesheet" href="Style.css">
        <script src="script.js"></script>
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
        <div align ="center" id="briefID">
            <fieldset id="fsBrief" style="width: fit-content; text-align: center;">

                <h1>Welcome to conan cafe here is some info about us</h1>
                <h2>The Place Photos:</h2>

                <div id="slideshow-container">
                    <div>
                        <img src="photos/brief/placePhoto1.jpg" style="width:100%" id="slideshow">
                    </div>
                    <a class="prev" onclick="prev()">&#10094;</a>
                    <a class="next" onclick="next()">&#10095;</a>
                </div>
                <!--
                <img src="photos/brief/placePhoto1.jpg" width="400"alt="PLace">
                <img src="photos/brief/placePhoto2.jpg" width="400" alt="Place2">
                <img src="photos/brief/placePhoto3.jpg" width="400" alt="Place3"> 
                -->
                
                <br>
                <h1>Our Location And Number:</h1>
                <img src="photos/brief/Location_phone.jpg" width="500" alt="LocationAndPhone">
                <h1>Contact Us:</h1>
                <a id="facebookColor" href="https://www.facebook.com/Conan-Cafe-107832870603444">Facebook Page</a>
                <br>
                <a id="gmailColor" href="mailto:hazem.m.bakr@gmail.com">Send Email</a> <br>
                <a id="instagramColor"href="https://www.instagram.com/conan_cafe1/"> instagram</a>   

            </fieldset>
        </div>
    </body>
</html>