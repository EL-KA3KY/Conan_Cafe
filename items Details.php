<!DOCTYPE html>
<html>
    <head>
        <title>Item Details</title>
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
        <div align="center" id="iteamDetalis">
            <img src="photos\Cart & Checkout\.png" width="15%" alt="Logo about Ingredients">
            <fieldset >
                <legend><b>Item Details</b></legend>
                <br/>
                <img src="photos\Items Details\Items Details.jpg" width="100" alt=" Any Logo about food">
                <br/><br>
                <hr><hr>
                <form style="text-align: left;" method="GET">
                    <label><b>items: </b></label>
                    <br><br>
                    <img src="photos\Menu\<?php
                        if(isset($_GET['ImageID'])){
                        $ImageID=$_GET['ImageID'];
                        echo $ImageID;
                        }
                    ?>.jpg" width="250" alt="item">
                    <h1 style="color: red"><?php echo $_GET['ImageID'] ?></h1>
                    <label><b>Ingredients: -</b></label>
                    <p><b style="color: darkblue"><ol><?php
                        if(isset($_GET['Ing'])){
                        $Ing=$_GET['Ing'];
                        echo $Ing;
                        }
                        else{echo "mafi4";}
                    ?></ol></b></p>
                    <br/><br/>
                    <label><b>Quantity: </b></label>
                    <input type="number" name="item" value="1" min="1" required>
                    <br/><br/>
                    <label><b>Pric: </b></label>
                    <b style="color: darkgray"><?php
                        if(isset($_GET['price'])){
                        $price=$_GET['price'];
                        echo $price;
                        }
                        else{echo "mafi4";}
                    ?> L.E.</b>
                    <br/><br/>
                    <input type="reset" value="Clear All"/>
                    <a href="Menu.php"><input type="button" value="+ Add to Cart"/></a>
                </form>
            </fieldset>
        </div>
    </body>
</html>