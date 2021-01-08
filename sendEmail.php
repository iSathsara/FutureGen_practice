<?php
use PHPMailer\PHPMailer\PHPMailer;

  require_once 'phpmailer/PHPMailer.php';
  require_once 'phpmailer/SMTP.php';
  require_once 'phpmailer/Exception.php';

  $mail = new PHPMailer(true);

  $alert = '';

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    try{
      // smtp settings
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'myemail@gmail.com';
      $mail->Password = 'mypwd';
      $mail->Port = 465;
      $mail->SMTPSecure = 'ssl';

      $mail->setFrom('myemail@gmail.com');
      $mail->addAddress('receiver@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Message Received';
      $mail->Body = '<h3>Sender : $name <br>From : $email<br>Message: $message</h3>';

      $mail->send();
      //$alert = '<div><span>Message sent!</span></div>';

    } catch (Exception $e){
      //$alert = '<div><span>'.$e->getMessage().'</span></div>';
    }

  }

?>
