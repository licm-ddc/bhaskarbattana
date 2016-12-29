<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Recipients
$recipient = "licm.ddc@gmail.com, srikanthg.techie@gmail.com, prasad.neredi@gmail.com, battana69@gmail.com";

// Subject
$subject = "Prayer Request from $name";

// Mail Header
$mailheader = "From: $email \r\n";

// Message
$formcontent="Dear Pastor, \n\n Request you to pray for my following needs. \n\t$message \n\n\n Regards,\n $name \n $phone \n $email";

error_reporting(E_ERROR | E_PARSE);

// Sending Mail
$status = mail($recipient, $subject, $formcontent, implode("\r\n", $mailheader));
// Status back to the user
$resultJson = array();
if($status) {
	$resultJson = array('status'=>'success', 'message'=>'Your prayer request has been submitted. Thank You!');
} else {
	$resultJson = array('status'=>'failure', 'message'=>'Error occurred while sending mail. Please contact Administrator');
}
header('Content-Type: application/json');
//echo $resultJson;
echo json_encode($resultJson);
?>
