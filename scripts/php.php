<?php
$Firstname=$_POST['firstname'];
$Lastname=$_POST['lastname'];
$Username=$_POST['username'];
$Email=$_POST['email'];
$CertificationNumber=$_POST['certificationnumber'];
$Password=$_POST['password'];
$PasswordConfirmation=$_POST['passwordconfirmation'];
$submit=$_POST['Submit'];
// Check if form was submitted.
if (isset($submit)){
  //Check if the Firstname field is left empty.
  if(empty($Firstname)){
    echo "Your firstname is required";
  }
  else{
    // Check for invalid characters in firstname field.
    if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/", $Firstname)){
    echo "The firstname field contains invalid characters";
    }
  }
  //Check if the Lastname field is left empty.
  if(empty($Lastname)){
    echo "Your lastname is required";
  }
  else{
    //Check if Last name field contains invalid characters.
    if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/", $Lastname)){
    echo "The lastname field contains invalid characters";
    }
  }
  //Check if the Username field is left empty.
  if(empty($Username)){
    echo "A username is required";
  }
  else{
    //Check for invalid charactes in the Username field.
    if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/", $Username)){
    echo "The username field contains invalid characters";
    }
  }
  // Checking if the Email field is empty.
  if (empty($Email)) {
  echo "Your email is required";
  }
  else{
    // Check if Email's format is valid
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)){
      	echo"This is not a valid email address.";
    }
    }
  //Check if the password has any invalid characters.
  if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/", $Password))
  {
    echo "Your password contains invalid characters";
  }
  //check if the passwords match.
  if(strcmp($Password,$PasswordConfirmation)==0){
    echo "Form was created sucessfully";
  }
  else{
    echo"Your password is not a match";
  }
}
else{
  //creating a file.
  $file=fopen("Tables.csv", "a" );
  $no_rows= count(file("Tables.csv"));
  if($no_rows > 1){
    $no_rows=($no_rows-1)+1;
  }
  //Creating an array for variables
  $formentries= array($Firstname,$Lastname,$Username, $Email, $CertificationNumber, $Password, $PasswordConfirmation);
  fputcsv($file, $formentries);
  //Close file.
  fclose($file);
  echo "User sucessfully created";
}
?>
