<!DOCTYPE html>
<html>
    <head><title>Events</title>
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
        <div align="center" id = "eventPage" >
            <fieldset id="fieldsetEvent">
                <a href="Events Reservation.php"><img src="photos/events/ahmadKamel.jpg" width="500" height="500" alt="AhmadKamel"></a>
                <h1 class="event">Ahmad Kamel Next Monday Reserve now!!</h1><br>
                
                <a href="Events Reservation.php"><img src="photos/events/djParty.jpeg" width="500" height="500" alt="DJ"></a>
                <h1 class="event">DJ Festival Next Friday Reserve Now!!!</h1>

                <a href="Events Reservation.php"><img src="photos/events/masarEgbari.jpg" width="500" height="500" alt="masarEgbari"></a>
                <h1 class="event">Masar Egbari Next 19/1 Reserve Now!!!</h1>
                <br>
            </fieldset>
        </div>
    </body>
</html>