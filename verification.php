<?php
// Permet d'empecher les hackers d'exploiter les faills de la variable PHP_SELF
// verification sur chaque valeur 
$nameError = $lastNameError = $emailError = $genderError = $commentError ="";
$name = $lastName = $email = $gender = $comment ="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  // verify if input are empty
  if(empty($_POST["name"]) )
  {
    $nameError = "Name is required";
  }else
  {
    $name = verifyInput($_POST["name"]);
    if(!preg_match("/^[a-zA-Z\. ]*$/",$name)){
      $nameError = "Only letter and wite space !";
    }
  }

  if(empty($_POST["lastName"]))
  {
    $lastNameError = "lastname is required";
  }else
  {
     $lastName = verifyInput($_POST["lastName"]);
     if(!preg_match("/^[a-zA-Z\. ]*$/",$name)){
      $nameError = "Only letter and wite space !";
    }
  }

  if(empty($_POST["email"]))
  {
    $emailError = "email is required";
  }else
  {
    $email = verifyInput($_POST["email"]);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $emailError = "example : blabla46@gmail.com";
    }
  }
  if(empty($_POST["gender"]))
  {
    $genderError = "gender is required";
  }else
  {
    $gender = verifyInput($_POST["gender"]);
  }
 
  
  if(empty($_POST["comment"]))
  {
    $commentError = " ";
  }else
  {
    $comment = verifyInput($_POST["comment"]);
  }
 
}

function verifyInput($data)
{
  // Delete space befor and after 
  $data = trim($data);
  // Delete backslashes
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>