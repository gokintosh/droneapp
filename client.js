
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

    var finalFlag=flag&&checkName()&&checkCity()&&checkPhone()&&checkEmail();
    return finalFlag;


}

function checkPhone(){
    var phone=document.getElementById("phone").value;
    var label=document.getElementById("phoneLabel");

    if(phone.length<10 && phone.length>0){
        label.innerHTML="phone number should be atleat 10 characters long"
        return false;
    }

    else{
        label.innerHTML="";
        return true;
    }


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



// to Adam- this function is for resetting the error when we click on the error input
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


// this is a self executing js function

(function(){
    var regForm=document.getElementById("registration_form");
    regForm.onsubmit=function(){return checkEmpty()};

    var phone=document.getElementById("phone");
    phone.onchange=function(){checkPhone()};
    phone.onfocus=resetError;

    var email=document.getElementById("email");
    email.onchange=checkEmail;
    email.onfocus=resetError;



})