function validateName(){
    var name=document.getElementById("InputName").value;
    var result=/^[a-zA-Z ]+$/.test(name);
    if(result==false){
        setTimeout(function(){
            document.getElementById("NameError").innerHTML="Name Field Does Not Contain a Valid Input";
        },500);
    }
    else{
        
        setTimeout(function(){
            document.getElementById("NameError").innerHTML="";
        },500);
        
    }


}

function validatePhone(){
    var phone=document.getElementById("phone").value;
    var result=/^([0-9])+([-])+([0-9])+$/.test(phone);
    if(result==false){
        setTimeout(function(){
            document.getElementById("phoneError").innerHTML="Phone number is not valid";
        },500);
    }
    else{
        document.getElementById("phoneError").innerHTML="Phone number is valid";
        setTimeout(function(){
            document.getElementById("phoneError").innerHTML="";
        },500);
        
    }

}



function validateEmail(){
    var email=document.getElementById("emaill").value;
    var result=/^([a-zA-Z])+([0-9]?)+([@])+([a-zA-Z])+([.])+([com])+$/.test(email);
    if(result==false){
        setTimeout(function(){
            document.getElementById("emailError").innerHTML="Email address is not valid";
        },500);
    }
    else{
        document.getElementById("emailError").innerHTML="Email address is valid";
        setTimeout(function(){
            document.getElementById("emailError").innerHTML="";
        },500);
    
    }

}