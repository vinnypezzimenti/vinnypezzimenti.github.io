<?php ob_start();



	if(isset($_POST['submit'])) {
		
	$to = "vinnypezzimenti@gmail.com";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$txt = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	"CC: vinnyp45@yahoo.com";
	
	mail($to,$name,$subject,$txt,$headers);
	
	header("Location: /contact.html");
	

		
	
	}




?>
