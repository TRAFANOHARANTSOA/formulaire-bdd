var email = document.getElementById('email');
var password = document.getElementById('password');

var passwordconfirm = document.getElementById('passwordconfirm');
var registrationbtn= document.getElementById('registrationbtn');

passwordconfirm.addEventListener('input', function(){
  if(password.value == passwordconfirm.value){

    registrationbtn.removeAttribute('disabled');
  }

});


var idform = document.getElementById('idform');
idform.addEventListener('submit', function(){
if(password.value != '' && email.value != '' && passwordconfirm.value != '' ){
return true;
} else{
  if(password.value == ''){
    alert('Mot de passe requis!');
  }
  if(email.value == ''){
    alert('Email requis!');
  }
  if(passwordconfirm.value == ''){
    alert('Mot de passe requis!');
  }
  return false;
}
})


var iduserconnexion = document.getElementById('iduserconnexion');
iduserconnexion.addEventListener('submit', function(){
if(password.value != '' && email.value != ''){
return true;
} else{
  if(password.value == ''){
    alert('Mot de passe requis!');
  }
  if(email.value == ''){
    alert('Email requis!');
  }

  return false;
}
})


function validateregistration(){
  if(password.value != '' && email.value != '' && passwordconfirm.value != '' ){
  return true;
  } else{
    if(email.value == ''){
      alert('Email required');
    }
    if(password.value == ''){
      alert('Password required');
    }
    if(passwordconfirm.value == ''){
      alert('Password required');
    }
    return false;
  }

}
