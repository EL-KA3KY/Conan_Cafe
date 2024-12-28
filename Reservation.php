<!DOCTYPE html>
<html>
    <head>
        <title>Reservation</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="Conan,Cafe">
        <meta name="description" content="Conan Cafe">
        <meta name ="viewport" content ="width = device-width , initial-scale:1.0">
        <link rel="stylesheet" href="Style.css">
        <script src="script.js"></script>
        <script>
            function Reservationvalidation(){
                var valid = true;

                formLabels = document.getElementsByTagName("label")

                // ---------------------First Name--------------------------------

                var FullName =document.Reservation.FullName.value;
                if(FullName ==""){
                    formLabels[1].innerHTML = "*[Required]";
                    formLabels[1].style.color = "red";
                    valid = false;
                }
                else if(!isNaN(FullName)){
                    formLabels[1].innerHTML = "*[Text Only]";
                    formLabels[1].style.color = "red";
                    valid = false;
                }
                else{
                    formLabels[1].innerHTML = "*";
                    formLabels[1].style.color = "red";
                    valid = (valid)? true : false;
            }

            // -----------------------Phone Number------------------------------

            var TelphoneNumber =document.Reservation.TelphoneNumber.value;
            if(TelphoneNumber =="" || TelphoneNumber =="+20"){
                formLabels[3].innerHTML = "*[Required]";
                formLabels[3].style.color = "red";
                valid = false;
            }
            else if(isNaN(TelphoneNumber)){
                formLabels[3].innerHTML = "*[Wrong Input (Numbers Only)]";
                formLabels[3].style.color = "red";
                valid = false;
            }
            else{
                formLabels[3].innerHTML = "*";
                formLabels[3].style.color = "red";
                valid = (valid)? true : false;
            }
            
            // -----------------------User Email------------------------------
    
            var email =document.Reservation.email.value;
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(email ==""){
                formLabels[5].innerHTML = "*";
                formLabels[5].style.color = "darkgrey";
            }
            else if(!re.test(email)){
                formLabels[5].innerHTML = "[Incorrect Email]";
                formLabels[5].style.color = "red";
                valid = false;
            }
            else{
                formLabels[5].innerHTML = "*";
                formLabels[5].style.color = "darkgrey";
                valid = (valid)? true : false;
            }

            // -----------------------Date------------------------------

            var date =document.Reservation.date.value;
            if(date ==""){
                formLabels[7].innerHTML = "*[Required]";
                formLabels[7].style.color = "red";
                valid = false;
            }
            else{
                formLabels[7].innerHTML = "*";
                formLabels[7].style.color = "red";
                valid = (valid)? true : false;
            }

            // -----------------------Time------------------------------

            var time =document.Reservation.time.value;
            if(time ==""){
                formLabels[9].innerHTML = "*[Required]";
                formLabels[9].style.color = "red";
                valid = false;
            }
            else{
                formLabels[9].innerHTML = "*";
                formLabels[9].style.color = "red";
                valid = (valid)? true : false;
            }

            // -----------------------Number of people------------------------------

            var numberOfPeople =document.Reservation.numberOfPeople.value;
            if(numberOfPeople ==""){
                formLabels[11].innerHTML = "*[Required]";
                formLabels[11].style.color = "red";
                valid = false;
            }
            else if(numberOfPeople < 1 || numberOfPeople>50){
                formLabels[11].innerHTML = "[Wrong Input (Must be between 1 and 50)]";
                formLabels[11].style.color = "red";
            }
            else{
                formLabels[11].innerHTML = "*";
                formLabels[11].style.color = "red";
                valid = (valid)? true : false;
            }

            // -----------------------Number of Tabel------------------------------

            var numberOfTabel =document.Reservation.numberOfTabel.value;
            if(numberOfTabel ==""){
                formLabels[13].innerHTML = "*";
                formLabels[13].style.color = "darkgrey";
            }
            else if(numberOfTabel < 1 || numberOfTabel>15){
                formLabels[13].innerHTML = "[Wrong Input (Must be between 1 and 15)]";
                formLabels[13].style.color = "red";
            }
            else{
                formLabels[13].innerHTML = "*";
                formLabels[13].style.color = "darkgrey";
                valid = (valid)? true : false;
            }
            
            // -----------------------Meal------------------------------

            var meals =document.Reservation.meals.value;
            if(meals ==""){
                formLabels[15].innerHTML = "*";
                formLabels[15].style.color = "darkgrey";
            }
            else if(!isNaN(meals)){
                formLabels[15].innerHTML = "*[Text Only]";
                formLabels[15].style.color = "red";
                valid = false;
            }
            else{
                formLabels[15].innerHTML = "*";
                formLabels[15].style.color = "darkgrey";
                valid = (valid)? true : false;
            }
            return valid;
            }
            //----------------------------------------------------------------
            
            function clear3(){
                for(var i=0;i<8;i++){
                    formLabels[(2*i)+1].innerHTML = "*";
                    formLabels[(2*i)+1].style.color = "red";
                }

                formLabels[5].style.color = formLabels[13].style.color = formLabels[15].style.color = "darkgrey";

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
        <div align="center" id="reservation">
            <!--<h1 style="text-align:center"><u><b><i>Reservation</i></b></u></h1>-->
            <img src="photos\Reservation\Reservation.png">
            <br/>
            <fieldset >
                    <legend><b>Reservation Details</b></legend>
                    <form onsubmit="return Reservationvalidation()" name="Reservation" method="POST" action=php/Reservation/insertIntoReservation.php>
                    <label><b>Name:</b></label>
                    <input type="text" name="FullName" placeholder="Enter Your Name...">
                    <label style="color: red;">*</label>
                    <br/><br/>
                    <label><b>Telphone Number:</b></label>
                    <input type="tel" name="TelphoneNumber" value="+20" placeholder="Enter Your Phone Number...">
                    <label style="color: red;">*</label>
                    <br/><br/>
                    <label><b>Email:</b></label>
                    <input type="text" name="email" placeholder="Enter Your Mail...">
                    <label style="color:darkgrey;">*</label>
                    <br/><br/>
                    <label><b>Date:</b></label>
                    <input type="date" name="date" placeholder="Enter The Date..." min="2021-01-01" max="2022-12-30" >
                    <label style="color: red;">*</label>
                    <br/><br/>
                    <label><b>Time:</b></label>
                    <input type="time" name="time" placeholder="Enter The Time..." >
                    <label style="color: red;">*</label>
                    <br/><br/>
                    <label><b>Number of people:</b></label>
                    <input type="number" name="numberOfPeople" placeholder="Enter The Number of People..." min="1" >
                    <label style="color: red;">*</label>
                    <br/><br/>
                    <label><b>Tabel Number:</b></label>
                    <input type="number" name="numberOfTabel" placeholder="Enter The Number of Tabel as You Like..." min="1">
                    <label style="color:darkgrey;">*</label>
                    <br><br>
                    <label><b>Meals:</label>
                    <textarea name="meals" placeholder="Write the meals to prepare it if it isn't exist..."></textarea>
                    <label style="color:darkgrey;">*</label>
                    <br/><br/>
                    <input type="reset" value="Clear All" onclick="clear3();"/>
                    <input type="submit" value="Submit"/>
                </form>
            </fieldset>
        </div>
    </body>
</html>