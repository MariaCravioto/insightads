<?php
$my_email = 'hi@insightads.mx';

$form_fullname = $_POST['fullname'];
$form_email = $_POST['email'];
$form_subject = $_POST['subject'];
$form_message = $_POST['message'];


$to = $my_email;
$subject = $form_subject.' form '.$form_fullname;
$txt = $form_message;
$headers = "From: $form_email" . "\r\n" .
"Reply-To: $form_email";
$status = mail($to,$subject,$txt,$headers);


if($status){
  $ress = array('status' => '¡Gracias, te responderemos lo antes posible!');
}else{
  $ress = array('status' => NULL);
}
header('Content-Type: application/json');
echo json_encode($ress);
