function validation(){
  var Firstname= document.getElementById('fname').value;
  var Lastname= document.getElementById('lname').value;
  var Username= document.getElementById('uname').value;
  var Email= document.getElementById('email').value;
  var CertificationNumber= document.getElementById('certifnum').value;
  var Password= document.getElementById('pass').value;
  var PasswordConfirmation= document.getElementById('passconfirm').value;
  var errormsg="";
  var regexpres=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var regexp= /^(?=.*[A-Zaz])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/
  if (Firstname=='')
  {
    errormsg+= "Please enter your firstname.\n";
  }
  if (Lastname=='')
  {
    errormsg+= "Please enter your lastname.\n";
  }
  if (Username=='')
  {
    errormsg+= "Please enter your username.\n";
  }
  if (Email=='')
  {
    errormsg+= "Please enter your email.\n";
  }
  if (CertificationNumber=='')
  {
    errormsg+= "Please enter your certification number.\n";
  }
  if (Password=='')
  {
    errormsg+= "Please enter a password.\n";
  }
  if (PasswordConfirmation=='')
  {
    errormsg+= "Please confirm your password.\n";
  }
  if (errormsg!='')
  {
    alert(errormsg);
    return false;
  }
  if (Password!= PasswordConfirmation){
    alert("Password does not match");
    return false;
  }
  if(Password < 8){
    alert("Password is too short");
    return false;
  }
  //if(Email.matches(regexpres)){
  //  return true;
  //  else{
    //  alert("Email contains invalid characters");
    //  return false;
    //}
  //}
  //if(Password.matches(regexp)){
  //  return true;
  //  else{
    //  alert("Password contains invalid characters");
    //  return false;
    //}

  else{
    return true;
  }

}
