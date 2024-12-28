<!DOCTYPE html>
<html>
    <head>
        <title>Check Out</title>
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
        <div align="center" id="checkOut">
            <img src="photos\Cart & Checkout\Checkout.jpg" width="25%">
            <fieldset >
                <legend><b>Check Out</b></legend>
                <br/>
                <img src="photos\Cart & Checkout\check out icon.jpg" width="70" height="70">
                <img src="photos\Cart & Checkout\arrow.png" width="70" height="70">
                <img src="photos\Cart & Checkout\wallet.jpg" width="70" height="70">
                <br/><br>
                <form style="text-align: left;">
                    <label><b>Address:</b></label>
                    <textarea name="address" placeholder="Enter your Address" required></textarea>
                    <br/><br/>
                    <label><b>Payment Method:</b></label><br/><br/>
                    <input type="radio" name="payment method" value="cash"/><b>Cash</b>&nbsp;<img src="photos\Cart & Checkout\cash.png" width="50" height="40"><br/>
                    <input type="radio" name="payment method" value="Credit Card"/><b>Cridet Card</b>&nbsp;<img src="photos\Cart & Checkout\Cridet.png" width="100" height="30">
                    <br/><br/>
                    <label><b>Pickup Method:</b></label><br/><br/>
                    <input type="radio" name="Pickup method" value="pick up from cafe"/><b>Pick Up From Cafe(Take Away)</b><br/>
                    <input type="radio" name="Pickup method" value="Delivery"/><b>Delivery</b>
                    <br/><br/>
                    <label><b>Comment:</b></label>
                    <textarea name="comment" placeholder="Any Comment(*Optional)"></textarea>
                    <br/><br/>
                    <input type="reset" value="Clear All"/>
                    <input type="submit" value="Place Order"/>
                </form>
            </fieldset>
        </div>
    </body>
</html>