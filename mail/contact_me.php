<?php
// Check for empty fields
if(isset($_POST['username'])  		&&
   isset($_POST['email']) 		&&
   isset($_POST['phone']) 		&&
   isset($_POST['message'])	)
   {
    /*echo "The data is stored\n";
	echo "\n".$_POST['username'];
	echo "\n".$_POST['email'];
	echo "\n".$_POST['subject'];
	echo "\n".$_POST['message'];*/



	$name = $_POST['username'];
	$email_address = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	//echo $phone;



   }

   else {
    echo "data is not completed";
   }
	





	
// Create the email and send the message
$from = "admin@skyatlasintl.com";
$email_subject = "New Question from Prospective Client $name";


//$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: $from";
$headers .= "Reply-To: $email_address";
//mail($to,$email_subject,$email_body,$headers);



$to = "xuezhou9019@gmail.com";
$subject = $email_subject;
$email_body = "You have received a new message from a prospective client\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: $from" . "\r\n";

if(mail($to,$subject,$email_body,$headers)) {
    echo "Thanks and we will be with you soon";
}
else
    echo "Please resend the message again";




?>
