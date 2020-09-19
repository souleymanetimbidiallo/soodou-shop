var form = document.getElementsByTagName("form")[0];
var name = document.getElementById("name");
var mail = document.getElementById("mail");
var tel = document.getElementById("tel");
var password = document.getElementById("password");
var error_mail = document.querySelector('.error-mail');
var error_tel = document.querySelector('.error-tel');
var error_password = document.querySelector('.error-password');


function inputValidate(type, champ){
  var regex = "";
  switch (type) {
    case "mail":
      regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
      break;
    case "tel":
      regex =/^(0|(00|\+)33)[0-9]{9}$/;
      break;
    case "password":
        regex =/^(0|(00|\+)33)[0-9]{9}$/;
        break;
    default:
      regex="";
  }
  if(!regex.test(champ.value)){
    return false;
  }else{
    return true;
  }
}

//Vérification de l'adresse mail
mail.addEventListener('blur', function(){
  error_mail.innerHTML = "";
  if(!inputValidate("mail", this)){
    error_mail.style.display = "inline";
    error_mail.innerHTML += " Cet e-mail n'est pas valide !";
  }else{
    error_mail.innerHTML = "";
  }
});

//Verification du téléphone
tel.addEventListener('blur', function(){
  error_tel.innerHTML = "";
  if(!inputValidate("tel", this)){
    error_tel.style.display = "inline";
    error_tel.innerHTML += " Format de téléphone incorrect";
  }else{
    error_tel.innerHTML = "";
  }
});


//Vérification et envoi du formulaire
form.addEventListener("submit", function (event) {

  if(!inputValidate("tel", tel) || !inputValidate("mail", mail)){
    event.preventDefault();
  }

}, false);
  


