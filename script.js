function validation(){
    var valid = true;

    formLabels = document.getElementsByTagName("label")

    // ---------------------First Name--------------------------------

    var FirstName =document.signUp.FirstName.value;
    if(FirstName ==""){
        formLabels[1].innerHTML = "*[Required]";
        formLabels[1].style.color = "red";
        valid = false;
    }
    else if(!isNaN(FirstName)){
        formLabels[1].innerHTML = "*[Text Only]";
        formLabels[1].style.color = "red";
        valid = false;
    }
    else{
        formLabels[1].innerHTML = "*";
        formLabels[1].style.color = "red";
        valid = (valid)? true : false;
    }

    // ---------------------Last Name--------------------------------

    var LastName =document.signUp.LastName.value;
    if(LastName ==""){
        formLabels[3].innerHTML = "*[Required]";
        formLabels[3].style.color = "red";
        valid = false;
    }
    else if(!isNaN(LastName)){
        formLabels[3].innerHTML = "*[Text Only]";
        formLabels[3].style.color = "red";
        valid = false;
    }
    else{
        formLabels[3].innerHTML = "*";
        formLabels[3].style.color = "red";
        valid = (valid)? true : false;
    }

    // ---------------------Username--------------------------------

    var username =document.signUp.username.value;
    if(username ==""){
        formLabels[5].innerHTML = "*[Required]";
        formLabels[5].style.color = "red";
        valid = false;
    }
    else if(!isNaN(username)){
        formLabels[5].innerHTML = "*[Text Only]";
        formLabels[5].style.color = "red";
        valid = false;
    }
    else{
        formLabels[5].innerHTML = "*";
        formLabels[5].style.color = "red";
        valid = (valid)? true : false;
    }

    // -----------------------User Email------------------------------
    
    var UserEmail =document.signUp.UserEmail.value;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(UserEmail ==""){
        formLabels[7].innerHTML = "*[Required]";
        formLabels[7].style.color = "red";
        valid = false;
    }
    else if(!re.test(UserEmail)){
        formLabels[7].innerHTML = "*[Incorrect Email]";
        formLabels[7].style.color = "red";
        valid = false;
    }
    else{
        formLabels[7].innerHTML = "*";
        formLabels[7].style.color = "red";
        valid = (valid)? true : false;
    }

    // ---------------------------password--------------------------

    var password =document.signUp.password.value;
    if(password ==""){
        formLabels[9].innerHTML = "*[Required]";
        formLabels[9].style.color = "red";
        valid = false;
    }
    else if(password.length < 8){
        formLabels[9].innerHTML = "*[Must Be > 8]";
        formLabels[9].style.color = "red";
        valid = false;
    }
    else{
        formLabels[9].innerHTML = "*";
        formLabels[9].style.color = "red";
        valid = (valid)? true : false;
    }

    // -----------------------Confirm password------------------------------

    var ConfirmPassword =document.signUp.ConfirmPassword.value;
    if(password ==""){
        formLabels[11].innerHTML = "*[Required]";
        formLabels[11].style.color = "red";
        valid = false;
    }
    else if(ConfirmPassword != password){
        formLabels[11].innerHTML = "*[Wrong Password (Must be The Same as Password) ]";
        formLabels[11].style.color = "red";
        valid = false;
    }
    else{
        formLabels[11].innerHTML = "*";
        formLabels[11].style.color = "red";
        valid = (valid)? true : false;
    }

    // -----------------------Phone Number------------------------------

    var PhoneNumber =document.signUp.PhoneNumber.value;
    if(PhoneNumber =="" || PhoneNumber =="+20"){
        formLabels[13].innerHTML = "*[Required]";
        formLabels[13].style.color = "red";
        valid = false;
    }
    else if(isNaN(PhoneNumber)){
        formLabels[13].innerHTML = "*[Wrong Input (Numbers Only)]";
        formLabels[13].style.color = "red";
        valid = false;
    }
    else{
        formLabels[13].innerHTML = "*";
        formLabels[13].style.color = "red";
        valid = (valid)? true : false;
    }

    // -----------------------Address------------------------------
    var address =document.signUp.address.value;
    if(address ==""){
        formLabels[17].innerHTML = "*[Required]";
        formLabels[17].style.color = "red";
        valid = false;
    }
    else if(!isNaN(address)){
        formLabels[17].innerHTML = "*[Wrong Input (Text & Numbers )]";
        formLabels[17].style.color = "red";
        valid = false;
    }
    else{
        formLabels[17].innerHTML = "*";
        formLabels[17].style.color = "red";
        valid = (valid)? true : false;
    }


    return valid;
}

//----------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------
function LogInvalidation(){
    
}

//----------------------------------------------------------------------------------------------------
function clear2(){
    for(var i=0;i<7;i++){
        formLabels[(2*i)+1].innerHTML = "*";
        formLabels[(2*i)+1].style.color = "red";
    }
    formLabels[17].innerHTML = "*";
    formLabels[17].style.color = "red";
}

//----------------------------------------------------------------------------------------------------
//--------------------------------------------Slideshow-----------------------------------------------
//----------------------------------------------------------------------------------------------------
var counter = 1;

function next(){
	var slideshow = document.getElementById("slideshow");
	if(counter != 3){
		counter++;
	}
	else {
		counter = 1;
	}
	slideshow.src = "photos/brief/placePhoto"+counter+".jpg";
}

function prev(){
	var slideshow = document.getElementById("slideshow");
	if(counter != 1){
		counter--;
	}
	else {
		counter = 3;
	}
	slideshow.src = "photos/brief/placePhoto"+counter+".jpg";
}

setInterval(next,2000);

//----------------------------------------------------------------------------------------------------
//--------------------------------------------Side Menu------------------------------------------------
//----------------------------------------------------------------------------------------------------
function openMenu(){
	var menu = document.getElementById("sideMenu");
	menu.style.width = "250px";
}

function closeMenu(){
	var menu = document.getElementById("sideMenu");
	menu.style.width = "0";
}