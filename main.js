var email = document.getElementById('email');
var password = document.getElementById('password');

var passwordconfirm = document.getElementById('passwordconfirm');
var id= document.getElementById('idp');

alert(id);

var registrationbtn= document.getElementById('registrationbtn');

passwordconfirm.addEventListener('input', function(){
  if(password.value == passwordconfirm.value){

    registrationbtn.removeAttribute('disabled');
  }

});
