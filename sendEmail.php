<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



$mail = new PHPMailer();
try {
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug  = 0;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "itraspberry147@gmail.com";
    $mail->Password   = "123becode";

    $mail->AddAddress("itraspberry147@gmail.com", "Zak");
    $mail->SetFrom("$email", "$name $lastName");
    
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = "Name: $name $lastName $gender  <br>from: $email <br> The content:  $comment  ";
    $mail -> send();
    echo '<div id="sender"> 
      <p>Message has been sent</p>
      <button type="submit" >close</button>
     </div>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>