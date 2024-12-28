<!DOCTYPE html>
<html>
    <head>
        <title>Events Reservation</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="Conan,Cafe">
        <meta name="description" content="Conan Cafe">
        <meta name ="viewport" content ="width = device-width , initial-scale:1.0">
        <link rel="stylesheet" href="Style.css">
        <script src="script.js"></script>
        <script>
            function validition(){
                valid = true ;
                //global array 
                formLabels = document.getElementsByTagName("label");

                //Handle Name 
                var name = document.eventReservation.name.value; 
                if (name == ""){
                    formLabels[0].innerHTML = "Name: *Required";
                    formLabels[0].style.color = "red"; 
                    valid = false;
                }

                else if (!isNaN(name)){
                    formLabels[0].innerHTML = "Name: [Characters only]";
                    formLabels[0].style.color = "red"; 
                    valid = false;
                }
                else{
                    formLabels[0].innerHTML = "Name:";
                    formLabels[0].style.color = "black";
                    valid =(valid)? true : false;
                }


                //Handle mobile
                var mobile = document.eventReservation.tel.value;
                if(isNaN(mobile)){
                    formLabels[1].innerHTML = "Mobile: [Numbers only]";
                    formLabels[1].style.color = "red";
                    valid = false ;
                }

                else if(mobile == ""){
                    formLabels[1].innerHTML = "Mobile: *Required";
                    formLabels[1].style.color = "red";
                    valid = false ;
                }

                else if (mobile.length != 11){
                    formLabels[1].innerHTML = "Mobile: [Must be 11 digit]";
                    formLabels[1].style.color = "red";
                    valid = false ;
                }

                else{
                    formLabels[1].innerHTML = "Telephone Number:";
                    formLabels[1].style.color = "black";
                    valid = (valid) ? true : false ;
                }

                //Handle Email
                var email = document.eventReservation.email.value;
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(email == ""){
                    formLabels[2].innerHTML = "Email: *Required";
                    formLabels[2].style.color = "red";
                    valid = false ;
                }

                else if (!re.test(email)){
                    formLabels[2].innerHTML = "Email: [Incorrect email]";
                    formLabels[2].style.color = "red";
                    valid = false ;
                }

                else{
                    formLabels[2].innerHTML = "Email:";
                    formLabels[2].style.color = "black";
                    valid = (valid)? true : false ;
                }
                

                //Handle Event Name 
                var eventName = document.eventReservation.eventName.value;
                if(eventName == ""){
                    formLabels[3].innerHTML = "Event Name: *Required";
                    formLabels[3].style.color = "red";
                    valid = false ;
                }

                else{
                    formLabels[3].innerHTML = "Event Name:";
                    formLabels[3].style.color = "black";
                    valid = (valid)? true :false ;
                }

                //Handle date of Event
                var dateOfTheEvent = document.eventReservation.date.value;
                if(dateOfTheEvent == ""){
                    formLabels[4].innerHTML = "date of event: *Required";
                    formLabels[4].style.color = "red";
                    valid = false ;
                }

                else {
                    formLabels[4].innerHTML = "date of event:";
                    formLabels[4].style.color = "black";
                    valid = (valid)? true :false ;
                }
                
                //Handle Number of the people
                var numOfPeople = document.eventReservation.numberOfPeople.value;
                if(numOfPeople == ""){
                    formLabels[5].innerHTML = "Number of people: *Required";
                    formLabels[5].style.color = "red";
                    valid = false ;
                }

                else if (numOfPeople > 20){
                    formLabels[5].innerHTML = "Number of people: [The number of people greater than 20 cantact us to pay 40% of the price]";
                    formLabels[5].style.color = "red";
                    valid = false ;
                }

                else{
                    formLabels[5].innerHTML = "Number of people:";
                    formLabels[5].style.color = "black";
                    valid = (valid)? true :false ;
                }
   
                return valid ; 
            }
            
                //Handle clear button
                function clear2(){
                var myLabels = new Array();
                myLabels[0] ="Name:";
                myLabels[1] ="Telphone Number:";
                myLabels[2] ="Email:";
                myLabels[3] ="Event Name:";
                myLabels[4] ="Date of Event:";
                myLabels[5] ="Number of people:";

                formLabels[0].innerHTML = myLabels[0];
                formLabels[0].style.color ="black";
                
                formLabels[1].innerHTML = myLabels[1];
                formLabels[1].style.color ="black";

                formLabels[2].innerHTML = myLabels[2];
                formLabels[2].style.color ="black";

                formLabels[3].innerHTML = myLabels[3];
                formLabels[3].style.color ="black";

                formLabels[4].innerHTML = myLabels[4];
                formLabels[4].style.color ="black";

                formLabels[5].innerHTML = myLabels[5];
                formLabels[5].style.color ="black";
            }
            return;

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
        <div align="center" id="eventReservation">
            <!--<h1 style="text-align:center"><u><b><i>Reservation</i></b></u></h1>-->
            <img src="photos\Event Reservation\Reservation.png">
            <br/>
            <fieldset style="width:fit-content; text-align: left;">
                    <legend><b> Event Reservation</b></legend>
                    <form  onsubmit="return validition()" name = "eventReservation" method=POST action = php/eventReservation/insertReservation.php>

                    <label><b>Name:</b></label>
                    <input type="text" name="name" placeholder="Enter Your Name...">
                    <!-- <label style="color: red;">*Required</label> -->
                    <br/><br/>
                    
                    
                    <label><b>Telphone Number:</b></label>
                    <input type="tel" name="tel" value="+20" placeholder="Enter Your Phone Number...">
                    <!-- <label style="color: red;">*Required</label> -->
                    <br/><br/>

                    
                    <label><b>Email:</b></label>
                    <input type="email" name="email" placeholder="Enter Your Mail...">
                    <!-- <label style="color:darkgrey;">(*Optional)</label> -->
                    <br/><br/>

                    
                    <label><b>Event Name:</b></label>
                    <input type="text" name="eventName" placeholder="Enter the Event Name...">
                    <!-- <label style="color: red;">*Required</label> -->
                    <br/><br/>


                    <label><b>Date of Event:</b></label>
                    <input type="date" name="date" placeholder="Enter The Date...">
                    <br/><br/>
                    
                    
                    <label><b>Number of people:</b></label>
                    <input type="number" name="numberOfPeople" placeholder="Enter The Number of People..." min="1" >
                    <!-- <label style="color: red;">*Required</label> -->
                    <br/><br/>
                    
                    
                    <input type="reset" value="Clear All" onclick="clear2();"/>
                    <input type="submit" value="Submit"/>
                </form>
            </fieldset>
        </div>
    </body>
</html>