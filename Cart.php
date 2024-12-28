<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
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
        <div align="center" id="cart">
            <img src="photos\Cart & Checkout\cart logo.png" width="15%">
            <fieldset >
                <legend><b>Check Out</b></legend>
                <br/>
                <img src="photos\Cart & Checkout\cart.png" width="70" height="70">
                <br/><br>
                <form style="text-align: left;">
                    <label><b>items: </b></label>
                    <img src="" width="70" height="70" alt="item">
                    <br/><br/><br/>
                    <label><b>Quantity: </b></label>
                    <input type="number" name="item" value="1" min="1" required></form>
                    <br/><br/>
                    <label><b>Comment: </b></label>
                    <input type="text" name="comment" placeholder="Comment(*Optional)">
                    <br/><br/>

                    <input type="reset" value="Clear All"/>
                    <a href="Checkout.php"><input type="button" value="Checkout"/></a>
                </form>
            </fieldset>
        </div>
    </body>
</html>