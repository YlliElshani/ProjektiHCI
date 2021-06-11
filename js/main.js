const emailReg = /^[A-Za-z0-9+_.-]+@(.+)$/;

function loginValidimi () {
    let inputs = document.querySelectorAll("input");
    
    email = inputs[0].value;
    password = inputs[1].value;

    if(email == "") {
        alert("Please enter your email!");
        return false;
    }
    else if(!emailReg.test(email)){
        alert("Please enter a valid email address!");
        return false;
    }
    else if (password == "") {
        alert("Please enter your password!");
        return false;
    }
    else if (password.length < 7) {
        alert("Password must contain at least 8 characters!");
        return false;
    }
    else{
        return true;
    }
}

function signUpValidimi () {
    let inputs = document.querySelectorAll("input");

    firstName = inputs[0].value;
    lastName = inputs[1].value;
    email = inputs[2].value;
    pass = inputs[3].value;
    passR = inputs[4].value;
    cc = inputs[5].value;

    if(firstName == ""){
        alert("Please enter your first name!");
    }
    else if(lastName == ""){
        alert("Please enter your last name!");
    }
    else if(email == ""){
        alert("Please enter your email!");
    }
    else if(!emailReg.test(email)){
        alert("Please enter a valid email address!");
        return false;
    }
    else if(pass == ""){
        alert("Please enter your password!");
        return false;
    }
    else if(pass.length<8){
        alert("Password must have at least 8 characters!");
        return false;
    }
    else if(passR == ""){
        alert("Please re-enter your password!");
        return false;
    }
    else if(!(passR.equals(pass))){
        alert("Password must be the same in two fields!");
        return false;
    }
    else if(cc == ""){
        alert("Please enter credit card no.!");
        return false;
    }
    else if(isNaN(cc)){
        alert("Credit Card No. must contain only numbers!");
        return false;
    }
    else{
        alert("You have registered succesfully!");
        return true;
    }
}