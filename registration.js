console.log('Hey!');

function Validate_Register()
{
    var email   = document.getElementById('email');
    var pass1   = document.getElementById('password_1');
    var pass2   = document.getElementById('password_2');
    var valid   = true; 
    removeMessage();
    if(pass1.value.length >20 || pass1.value.length <6)
    {
        pass1.className = 'wrong-input';
        pass1.nextElementSibling.innerHTML = "Password cannot be less than 6 or more than 20 digits";
        valid=false;
    }
    if(pass1.value != pass2.value){
        pass1.className = 'wrong-input';
        pass1.nextElementSibling.innerHTML = 'Passwords does not match';
        valid = false;
    }
    function validateEmail(email){
        var reg = "/^[A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+([A-Za-z]{2,4})$/";
        if(!email.match(reg)){
            email.className = 'wrong-input';
            email.nextElementSibling.innerHTML = "InValid Email address";
            valid = false;
        }
        valid = false;
    }

    return valid;
}






function removeMessage(){

 var error= document.querySelectorAll(".error");

   error.forEach((element)=> element.innerHTML = "");
    }