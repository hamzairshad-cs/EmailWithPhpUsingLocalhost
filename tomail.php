<?php
if(isset($_POST['submit']))
{
	$msg=$_POST['message'];
	$subject= "Simple Email With PHP";
	$email=$_POST['email'];
		$headers="From: charaswalicolgate@gmail.com";
}
else {
		echo "Error";	# code...
}

if(mail($email,$subject,$msg,$headers))
{ 
echo "mail sent";
}





?>