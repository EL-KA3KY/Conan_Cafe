<!DOCTYPE html>
<html>
    <head>
        <title>Conan Cafe</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="Conan,Cafe">
        <meta name="description" content="Conan Cafe">
        <meta name ="viewport" content ="width = device-width , initial-scale:1.0">
        <link rel="stylesheet" href="Style.css">
        <script src="script.js"></script>
        <style>
            .FPImg {
                
                transition: 0.5s;
            }    
            .FPImg:hover {
                transition: 0.5s; 
                width:517px;    
            }
        </style>
    </head>

  
    <body>
        <img src="photos/menu1.png" width="30px" onclick="openMenu();">
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
        <div align =center  id ="firstPage">
            <fieldset id="fieldSet1" >

                <img id="HeaderLogo" src="photos/fristPage/conanLogo.jpg" width="500"  alt="conanLogo"> 
                <h1 id="logo">Welcome To Conan Cafe</h1>
                <br>

                <a href="Menu.php" ><img class="FPImg" src="photos/fristPage/menu.jpg"  width="500" height="295" alt="MENU"></a> 
                <a href="complain.php" target="_blank"> &nbsp;<img class="FPImg" src="photos/fristPage/Complain.jpeg" width="500" height="295" alt="Complain" ></a>
                <a href="Reservation.php">&nbsp;<img class="FPImg" src="photos/fristPage/Reservation.jpg" width="500" height="295" alt="Reservation"></a>
                <pre><h1><strong>   Menu                           Complain                       Reservation</strong></h1></pre>
                <br>



                <a href="askForJop.php" target="_blank"><img class="FPImg" src="photos/fristPage/applyForAJop.jpg" width="500" height="295" alt="applyForAJop"></a>
                <a href="events.php"><img class="FPImg" src="photos/fristPage/Events.jpg" width="500" height="295" alt="Events"></a>
                <a href="brief.php" target="_blank"><img class="FPImg" src="photos/fristPage/Brief.png" width="500" height="295" alt="Brief"></a>

                <pre><h1><strong>Jobs                        Events                   Brief</strong></h1></pre>
                <br>

                <a href="Sign In.php"><img class="FPImg" src="photos/fristPage/Login.png" width="500" height="295" alt="Login"></a>
                <a href="Cart.php"><img class="FPImg" src="photos/fristPage/Cart.jpg" width="500" height="295" alt="Cart"></a>

                <pre><h1><strong>Login                          Cart</strong></h1></pre>
            </fieldset>
        </div>
    </body>
</html>
