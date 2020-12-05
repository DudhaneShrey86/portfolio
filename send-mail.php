<?php

if(isset($_POST['name'], $_POST['email'], $_POST['message']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
  $res = "ok";
  $name = addslashes($_POST['name']);
  $email = addslashes($_POST['email']);
  $message = addslashes($_POST['message']);
  $txt = "\n Looks like you have got a new client friend!";
  $txt .= "\n Name: ".$name;
  $txt .= "\n Email ID: ".$email;
  $txt .= "\n \n Message: \n".$message;
  $txt .= "\n \n All the best black guy! Remember your goals";
  $to = "dudhaneshrey86@gmail.com";
  $subject = "A mail from your portfolio!";
  mail($to, $subject, $txt);
}

?>
