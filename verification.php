<?php
// Permet d'empecher les hackers d'exploiter les faills de la variable PHP_SELF
// verification sur chaque valeur 
$nameError = $lastNameError = $emailError = $genderError = $commentError = $countryError = $subjectError = "";
$name = $lastName = $email = $gender = $comment = $subject = $ctr = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST["honey"]) && $_POST["honey"] != "")
  {
    die();
  
  }
  // verify if input are empty
  if(empty($_POST["name"]) )
  {
    $nameError = "Name is required";
  }else
  {
    $name = verifyInput($_POST["name"]);
    // verify if only white space and letter 
    if(!filter_var($name,FILTER_SANITIZE_STRING) && !preg_match("/^[a-zA-z]*$/", $name)){
      $nameError = "Only letter and wite space !";
    }else if(!preg_match("/^[a-zA-z]*$/", $name))
    {
      $nameError = "Only letter and wite space !";
    }
  }

  if(empty($_POST["lastName"]))
  {
    $lastNameError = "lastname is required";
  }else
  {
     $lastName = verifyInput($_POST["lastName"]);
     if(!filter_var($lastName,FILTER_SANITIZE_STRING)){
      $lastNameError = "Only letter and wite space !";
    }else if(!preg_match("/^[a-zA-z]*$/", $lastName))
    {
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
    if(!filter_var($gender,FILTER_SANITIZE_STRING))
    {
      $genderError = "gender error ";
    }
  }
  if(empty($_POST["country"]))
  {
    $countryError = "Country is required";
  }
  else
  {
    $ctr = verifyInput(($_POST["country"]));
    if(!filter_var($country,FILTER_SANITIZE_STRING))
    {
      $countryError = "country error";
    }
  }
  if(empty($_POST["subject"]))
  {
    $subjectError = "Country is required";
  }
  else
  {
    $subject = verifyInput(($_POST["subject"]));
    if(!filter_var($subject,FILTER_SANITIZE_STRING))
    {
      $subjectError = "subject error";
    }
  }
  
  if(empty($_POST["comment"]))
  {
    $commentError = "";
  }else
  {
    $comment = verifyInput($_POST["comment"]);
    if(!filter_var($comment,FILTER_SANITIZE_STRING))
    {
      $commentError = "";
    }
  }

  if(empty($nameError) && empty($lastNameError) && empty($genderError) && empty($commentError))
  {
    include 'sendEmail.php';
  }

}

// Sanitize data
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