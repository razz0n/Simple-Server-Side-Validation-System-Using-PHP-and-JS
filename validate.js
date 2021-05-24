function validation()
{
    
    var nameErr= "";
    var passErr= ""; 
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    
    
    if(username == "" && password == ""){
        document.getElementById("nameErr").innerHTML = " Please enter your username ";
        document.getElementById("passErr").innerHTML='Please enter your password';   
        return false;  
    } 

    if(username == ""){
        document.getElementById("nameErr").innerHTML ="Please enter your username";
    } 
       
    if(username.length<5 && password == "")
    {
        document.getElementById("nameErr").innerHTML="Username must be 5 characters long";
        document.getElementById("passErr").innerHTML='Please enter your password';   
        return false;     
    } else {
        document.getElementById("nameErr").innerHTML = "";
        document.getElementById("passErr").innerHTML = "";
    }

    if(username.length>5 && password == "")
    {
        document.getElementById("passErr").innerHTML='Please enter your password';   
        return false;
    }


    if(username.length>5 && password.length<10){
        document.getElementById("passErr").innerHTML='Password must be 10 characters long';
        return false; 
    }
    
    if(username.length>5 && password.length<10){
        document.getElementById("passErr").innerHTML='Password must be 10 characters long'; 
    }
    
    
    if(password== ""){
        document.getElementById("passErr").innerHTML='Please enter your password'; 
        return false;
    }
    
     
    
    if(username.length<5 && password.length<10){
        document.getElementById("nameErr").innerHTML="Username must be 5 characters long";
        document.getElementById("passErr").innerHTML='Password must be 10 characters long';
        return false;
    }
    

    
    
    let nameformat = /^[A-Za-z0-9_-]{5,}$/;
    if(nameformat.test(username) === false) {
        document.getElementById("passErr").innerHTML=' ';
        document.getElementById("nameErr").innerHTML = 'Please enter a valid name';
        return false;
    } 

    
    if(password.length<10){
        document.getElementById("nameErr").innerHTML = ' ';
        document.getElementById("passErr").innerHTML='Password must be 10 characters long';
        return false;
    } 

    
    var passformat= /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[_!@#\$%\^&\*])(?=.{10,})/;
    if(passformat.test(password) === false){
        document.getElementById("nameErr").innerHTML = ' ';
        document.getElementById("passErr").innerHTML='Password must have at least one uppercase,one lowercase and a symbol';
        return false;
    }

    document.getElementById("nameErr").innerHTML = "";
    document.getElementById("passErr").innerHTML = "";
}
