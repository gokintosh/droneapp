function checkEmpty(){
    var fields=document.getElementsByClassName("fields");
    var labels=document.getElementsByClassName("label");
    var flag=true;

    for(var i=0;i<fields.length;i++)
    {
        if(fields[i].nodeValue.length<1||fields[i].nodeValue.length==""){
            fields[i].style.backgroundColor="#FFA758";
            labels[i].innerHTML="field is required";
            if(flag!=false)
            flag=false;
        }
    }

    var finalFlag=flag&&checkLogin()&&checkEmail()&&checkPassword()&&checkClientId();
    return finalFlag;


}

function checkEmail()
{
    var email = document.getElementById("email").value;
    var label = document.getElementById("emailLabel");

    if(email.indexOf(" ") !== -1)
    {
        label.innerHTML = "No spaces allowed in the email";
        return false;
    }
    else if(email.indexOf('@') == -1)
    {
        label.innerHTML = "'@' is required in email address";
        return false;
    }
    else if(email.indexOf('.') == -1 || (email.indexOf('.') - email.indexOf('@') < 2) || ((email.length - email.indexOf('.'))<3 ))
    {
        label.innerHTML = "Domain is required (ex: gmail.com)";
        return false;
    }
    else
    {
        label.innerHTML = "";
        return true;
    }
}

function checkLogin()
{
    var username = document.getElementById("username").value;
    var label = document.getElementById("lblUsername");

    if(username.indexOf(" ") !== -1)
    {
        label.innerHTML = "No spaces allowed in the username";
        return false;
    }
    else
    {
        var flag = true;
        for(var i = 0; i < username.length; i++)
        {
            var code = username.charCodeAt(i);

            if (!(code > 47 && code < 58) && // numeric (0-9)
                !(code > 64 && code < 91) && // upper alpha (A-Z)
                !(code > 96 && code < 123)) // lower alpha (a-z)
            {
                label.innerHTML = "Only latin letters and numbers allowed";
                flag = false;
            }
            else
            {
                label.innerHTML = "";
                flag = true;
            }
        }
        return flag;

    }
}

function checkPassword()
{
    var password = document.getElementById("password").value;
    var label = document.getElementById("passwordLabel");

    if(pass.length < 8 && pass.length > 0)
    {
        label.innerHTML = "Password should be at least 8 characters long"
        return false;
    }
    else
    {
        label.innerHTML = "";
        return true;
    }
}

function resetError(){
    var labels=document.getElementsByClassName("label");
    var fields=document.getElementsByClassName("fields");

    for(var i=0;i<fields.length;i++){
        if(this.id==fields[i].id){
            labels[i].innerHTML="";
        }
    }
    this.style.backgroundColor="white";
}

(function(){


    var clientForm=document.getElementById("client_form");
    clientForm.onsubmit=function(){return checkEmpty()};


    var login=document.getElementById("login");
    login.oninput=checkLogin;
    login.onfocus=resetError;

    var email=document.getElementById("email");
    email.onchange=checkEmail;
    email.onfocus=resetError;

    var password=document.getElementById("password");
    password.onchange=checkPassword;
    password.onfocus=resetError;




})