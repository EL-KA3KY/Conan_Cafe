<!DOCTYPE html>
<html>
    <head>
        <title>Jobs</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="Conan,Cafe">
        <meta name="description" content="Conan Cafe">
        <meta name ="viewport" content ="width = device-width , initial-scale:1.0">
        <link rel="stylesheet" href="Style.css">
        <script src="script.js"></script>
        <script>

        function validation(){
            valid = true ;
            //global array 
            formLabels = document.getElementsByTagName("label");


            //Handle First Name 
            var applierFirstName = document.askForJopForm.applierFirstName.value; 
            if (applierFirstName == ""){
                formLabels[0].innerHTML = "First Name: *Required";
                formLabels[0].style.color = "red"; 
                valid = false;
            }

            else if (!isNaN(applierFirstName)){
                formLabels[0].innerHTML = "First Name: [Characters only]";
                formLabels[0].style.color = "red"; 
                valid = false;
            }
            else{
                formLabels[0].innerHTML = "First Name:";
                formLabels[0].style.color = "white";
                valid =(valid)? true : false;
            }


            //Handle Last Name
            var applierLastName = document.askForJopForm.applierLastName.value; 
            if (applierLastName == ""){
                formLabels[1].innerHTML = "Last Name: *Required";
                formLabels[1].style.color = "red"; 
                valid = false;
            }

            else if (!isNaN(applierLastName)){
                formLabels[1].innerHTML = "Last Name: [Characters only]";
                formLabels[1].style.color = "red"; 
                valid = false;
            }
            else{
                formLabels[1].innerHTML = "Last Name:";
                formLabels[1].style.color = "white";
                valid =(valid)? true : false;
            }


            
            //Handle ID
            var applierID = document.askForJopForm.applierID.value;
            if(isNaN(applierID)){
                formLabels[2].innerHTML = "ID: [Numbers only]";
                formLabels[2].style.color = "red";
                valid = false ;
            }

            else if(applierID == ""){
                formLabels[2].innerHTML = "ID: *Required";
                formLabels[2].style.color = "red";
                valid = false;
            }

            else{
                formLabels[2].innerHTML = "ID:";
                formLabels[2].style.color = "white";
                valid = (valid) ? true : false ;
            }


            
            //Handle Email
            var email = document.askForJopForm.applierEmail.value;
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(email == ""){
                formLabels[3].innerHTML = "Email: *Required";
                formLabels[3].style.color = "red";
                valid = false ;
            }

            else if (!re.test(email)){
                formLabels[3].innerHTML = "Email: [Incorrect email]";
                formLabels[3].style.color = "red";
                valid = false ;
            }

            else{
                formLabels[3].innerHTML = "Email:";
                formLabels[3].style.color = "white";
                valid = (valid)? true : false ;
            }
            

            //Handle Password
            var password = document.askForJopForm.applierEmailPassword.value;
            if(password == ""){
                formLabels[4].innerHTML = "Password: *Required";
                formLabels[4].style.color = "red";
                valid = false ;
            }
            else if (password.length < 8 ){
                formLabels[4].innerHTML = "Password: [Must be greater than 8]";
                formLabels[4].style.color = "red";
                valid = false ;
            }
            else {
                formLabels[4].innerHTML = "Password:";
                formLabels[4].style.color = "white";
                valid = false ;
            }
           
            //Handle age [Not need to be handle his number in the lables array 5]


            //Handle mobile
            var mobile = document.askForJopForm.applierMobile.value;
            if(isNaN(mobile)){
                formLabels[6].innerHTML = "Mobile: [Numbers only]";
                formLabels[6].style.color = "red";
                valid = false ;
            }

            else if(mobile == ""){
                formLabels[6].innerHTML = "Mobile: *Required";
                formLabels[6].style.color = "red";
                valid = false ;
            }

            else if (mobile.length != 11){
                formLabels[6].innerHTML = "Mobile: [Must be 11 digit]";
                formLabels[6].style.color = "red";
                valid = false ;
            }

            else{
                formLabels[6].innerHTML = "Mobile:";
                formLabels[6].style.color = "white";
                valid = (valid) ? true : false ;
            }
            //Socialable from 7 to 9 
            
            //Handle Apply For [Checkbox] [10 to 13]
            var checks = document.getElementsByClassName("applyFor"); 
            var text = "";

            for(var i = 0 ;i < checks.length ; i++){
                if(checks[i].checked == true){
                        text+= checks[i].value +"\n";
                }          
            }

            if(text == ""){
                formLabels[10].innerHTML = "Apply For: *Required[At least choose one] ";
                formLabels[10].style.color = "red";
                valid = false ;
            }

            else{
                formLabels[10].innerHTML = "Apply For:";
                formLabels[10].style.color = "white";
                valid = (valid)? true: false ;
            }

            
            //Handle language [14 to 18]
            var language = document.getElementsByClassName("language");
            var text2 = "";

            for(var i = 0 ;i < language.length ; i++){
                if(language[i].checked == true){
                    text2+= language[i].value +"\n";
                }          
            }

            if(text2 == ""){
                formLabels[14].innerHTML = "Language: *Required[At least choose one] ";
                formLabels[14].style.color = "red";
                valid = false ;
            }

            else{
                formLabels[14].innerHTML = "Language:";
                formLabels[14].style.color = "white";
                valid = (valid)? true: false ;
            }

            return valid ; 
        }
        
        //Handle clear button
        function clear2(){
            var myLabels = new Array();
            myLabels[0] ="First Name:";
            myLabels[1] ="Last Name:";
            myLabels[2] ="ID:";
            myLabels[3] ="Email:";
            myLabels[4] ="Password:";
            myLabels[5] ="Age:";
            myLabels[6] ="Mobile:";
            myLabels[7] ="Apply For:";
            myLabels[8] ="Language:";

            formLabels[0].innerHTML = myLabels[0];
            formLabels[0].style.color ="White";
            
            formLabels[1].innerHTML = myLabels[1];
            formLabels[1].style.color ="White";

            formLabels[2].innerHTML = myLabels[2];
            formLabels[2].style.color ="White";

            formLabels[3].innerHTML = myLabels[3];
            formLabels[3].style.color ="White";

            formLabels[4].innerHTML = myLabels[4];
            formLabels[4].style.color ="White";

            formLabels[5].innerHTML = myLabels[5];
            formLabels[5].style.color ="White";

            formLabels[6].innerHTML = myLabels[6];
            formLabels[6].style.color ="White";

            formLabels[10].innerHTML = myLabels[7];
            formLabels[10].style.color ="White";

            formLabels[14].innerHTML = myLabels[8];
            formLabels[14].style.color ="White";
        }
        return ;

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
         <div id="jopPage"align="center"> 
            <fieldset style="width: fit-content; text-align: left;" >
                <form name = "askForJopForm" novalidate method=POST  onsubmit="return validation()"  action = php/askForAjob/insertApplierForm.php> 
                    <h1>Read Carefully Before Apply: <h3>We need people between 18 to 50 age ,handsome and work minimum 9 hours per day </h3></h1>
                    
                    <label >First Name:</label>
                    <input type="text" name="applierFirstName" placeholder="Enter First Name">
                    <br>
                    
                    <label >Last Name:</label>
                    <input type="text" name="applierLastName" placeholder="Enter Last Name">
                    <br>
                    
                    <label >ID:</label>
                    <input type="number" name="applierID" placeholder="Enter The Number In ID">
                    <br>

                    <label >Email:</label>
                    <input type="text" name="applierEmail" placeholder="Enter Email">
                    <br>

                    <label >Password:</label>
                    <input type="password" name="applierEmailPassword"placeholder="Enter Password" >
                    <br>

                    <label >Age:</label>
                    <input type="number" name="applierAge" placeholder="Age" max="50" min="18">
                    <br>

                    <label >Mobile:</label>
                    <input type="tel" name="applierMobile" value="+20">
                    <br>

                    <label >Sociable:</label>
                    <label >Low</label>
                    <input type="range" name="applierSkillsRange" min="1" max="10" >
                    <label >High</label>
                    <br>

                    <label >Apply For:</label><br>
                    <input type="checkbox" class="applyFor" name = "applierFor[]" value="cleanWorker"><label >Clean Worker</label>
                    <br>
                    <input type="checkbox" class="applyFor" name = "applierFor[]" value="parista"><label >Parista</label>
                    <br>
                    <input type="checkbox" class="applyFor"  name = "applierFor[]"value="cacher"><label >Cacher</label>
                    <br>

                    <label >Language:</label><br>
                    <input type="checkbox" class="language" name = "lang[]" value="ar"><label >Arabic</label>
                    <br>
                    <input type="checkbox" class="language" name = "lang[]"  value="En"><label >English</label>
                    <br>
                    <input type="checkbox" class="language" name = "lang[]"  value="ita"><label >Italian</label>
                    <br>
                    <input type="checkbox" class="language" name = "lang[]"  value="ger"><label >German</label>
                    <br>
                    <label >Write Something About Yourself:</label><br>
                    <textarea name = "brief"></textarea>
                    <br>
                    <input type="submit" value="submit"/>
                    <input type="reset" value="Clear All" onclick="clear2();"/>             

                    </form>
            </fieldset>
        </div>
    </body>
</html>