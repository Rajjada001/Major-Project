console.log('Hey');

window.history.forward();
function Validate_Login(){
console.log('Hey');
var email = document.form.email.value;
var pass  = document.form.password.value;
var err    = document.getElementById('error');
var valid = true;
removeMessage();
// Validate email

if(email == null || email==""){
    err.innerHTML("Email can't be empty");
    valid= false;
}
// Validate pass
else if(pass.length<6){  
    pass.className = 'wrong-input';
    pass.nextElementSibling.innerHTML = "Password must be at least 6 characters long.";  
    valid= false;  
    }  
    return valid;
}

function removeMessage(){

var error= document.querySelectorAll(".error");
error.forEach((element)=> element.innerHTML = "");
       
}
    