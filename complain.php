<!DOCTYPE html>
<html>
    <head><title>Complain</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="Conan,Cafe">
        <meta name="description" content="Conan Cafe">
        <link rel="stylesheet" href="Style.css">
        <script src="script.js"></script>
        <script>
           
            function complain(){
                var valid = true ;
                //global array 
                formLabels = document.getElementsByTagName("label");
                var checks = document.getElementsByClassName("usrComplain"); 
                var text = "";


                for(var i = 0 ;i < checks.length ; i++){
                    if(checks[i].checked == true){
                        text+= checks[i].value +"\n";
                    }          
                }

                //Handle Type of the problem checkbox.
                if(text == ""){
                    formLabels[0].innerHTML = "Type of the problem: *Required[At least choose one] ";
                    formLabels[0].style.color = "rgb(177, 54, 54);";
                    valid = false ;
                }

                else{
                    formLabels[0].innerHTML = "Type of the problem:";
                    formLabels[0].style.color = "rgb(177, 54, 54);";
                    valid = (valid)? true: false ;
                }

                
                //Handle mobile
                var mobile = document.ComplainForm.usrComplainMobile.value;
                if(isNaN(mobile)){
                    formLabels[5].innerHTML = "Mobile: [Numbers only]";
                    formLabels[5].style.color = "rgb(177, 54, 54);";
                    valid = false ;
                }
                else if(mobile == ""){
                    formLabels[5].innerHTML = "Mobile: *Required";
                    formLabels[5].style.color = "rgb(177, 54, 54);";
                    valid = false ;
                }
                else if (mobile.length != 11){
                    formLabels[5].innerHTML = "Mobile: [Must be 11 digit]";
                    formLabels[5].style.color = "rgb(177, 54, 54);";
                    valid = false ;
                }
                else{
                    formLabels[5].innerHTML = "Mobile:";
                    formLabels[5].style.color = "rgb(177, 54, 54);";
                    valid = (valid) ? true : false ;
                }

                return valid ;
            }
            //Handle Clear Button
            function clear2(){
                var myLabels = new Array();
                myLabels[0] ="Type of the problem:";
                myLabels[1] = "Mobile: ";

                formLabels[0].innerHTML = myLabels[0];
                formLabels[0].style.color ="rgb(177, 54, 54);";
                formLabels[5].innerHTML = myLabels[1];
                formLabels[5].style.color = "rgb(177, 54, 54);";    
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
        <div align="center">
            <fieldset style="width: fit-content; text-align: left;">
                <form onsubmit="return complain()" method=POST name= "ComplainForm" id="ComplainForm" action = php/Complain/insertComplain.php >

                    <h1 >We are sorry for what happen to you and we want to make sure everything with you will be okay next time  </h1>
                    <p><strong>please fill the next form to make sure we can help you</strong></p>

                    <label class="complain">Type of the problem:</label>
                    <br>
                    <input type="checkbox" class="usrComplain" name="usrComplainName[]" value="Food" ><label >Food</label><br>
                    <input type="checkbox" class="usrComplain" name="usrComplainName[]" value="Drinks" ><label >Drinks</label><br>
                    <input type="checkbox" class="usrComplain" name="usrComplainName[]" value="The Place" ><label >The Place</label><br>
                    <input type="checkbox" class="usrComplain" name="usrComplainName[]" value="stuff" ><label >The Stuff</label><br>
                
                    
                    <label class="complain">Mobile:</label>
                    <input type="text" name="usrComplainMobile" placeholder="Enter Your Number" >
                    <br>  <br>

                    <textarea placeholder="Enter your complain here with all details" name = "usrComplainDetails" ></textarea>
                    <br>

                    <input type="submit" value="Submit"/>
                    <input type="reset" value="Clear All" onclick="clear2();"/>

                </form>
            </fieldset>
        </div>
    </body>
</html>