<?php

$nameErr = "";
$emailErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST['firstname']) || empty($_POST['lastname'])) {
    $nameErr = "Please fill in name";
  } else {
      $firstname = checkInput($_POST['firstname']);
      $lastname = checkInput($_POST['lastname']);
//checks valid characters have been entered
if(!preg_match("/^[a-zA-Z]*$/", $firstname || $lastname)) {
  $nameErr = "Only letters allowed!";
}
}


if(empty($_POST['email'])) {
  $emailErr = "Email field must be filled in";
} else {
$email = checkInput($_POST['email']);
//checks email address is in a valid format
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid format";
}
}
$password = checkInput($_POST['password']);

}

function checkInput($data) {
$data = htmlspecialchars($data);
$data = stripslashes($data);
$data = trim($data);
return $data;

}
echo $firstname;
echo $lastname;
echo $email;
echo $password;

 ?>
