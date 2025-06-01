
let fandlname=document.getElementById("firstandlast");
let phone=document.getElementById("phone_number");
let email=document.getElementById("Email");
let pass=document.getElementById("password");
let confirm=document.getElementById("confirmpassword");
let error_element1=document.getElementById("error_message_fandl");
let error_element2=document.getElementById("error_message_phone");
let error_element3=document.getElementById("error_message_email");
let error_element4=document.getElementById("error_message_confirmpassword");
let register_form=document.getElementById("myform");

fandlname.addEventListener("blur",function(event){
    if(event.target.value===""){
       error_element1.textContent="Required*";
    }
    else{
        error_element1.textContent="";
    }
});
phone.addEventListener("blur",function(event){
    if(event.target.value===""){
        error_element2.textContent="Required*";
    }
    else{
        error_element2.textContent="";
    }
});
email.addEventListener("blur",function(event){
    if(event.target.value===""){
        error_element3.textContent="Required*";
    }
    else{
        error_element3.textContent="";
    }
});
let originalpass=pass.value;
confirm.addEventListener("blur",function(event){
    if(event.target.value===originalpass){
        error_element4.textContent="";
    }
    else{
        error_element4.textContent="passward must be same";
    }
});
register_form.addEventListener("submit",function(event){
    event.preventDefault();
})


