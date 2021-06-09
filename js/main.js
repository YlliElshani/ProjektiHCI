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