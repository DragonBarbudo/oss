<?php

$to="mflores@oss-pls.com";
$to="pricing@oss-pls.com";
$to="kmichel@oss-pls.com";
/*Your Email*/

$subject="Mensaje desde sitio web";

$date=date("l, F jS, Y");
$time=date("h:i A");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
$msg="
		Message sent from website on date:  $date, hour: $time.\n
		Name:  $name\n
		Email: $email\n
		Phone: $phone\n
		Subject: $subject\n
		Message: $message\n
	";
	
	if($name=="") {
		echo "<div class='alert alert-danger'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Warning!</strong> Please fill the name field.
		</div>";
	
	} else if($email=="") {
		echo "<div class='alert alert-danger'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Warning!</strong> Please fill the email field.
		</div>";
	
	} else if($subject=="") {
		echo "<div class='alert alert-danger'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Warning!</strong> Please fill the subject field.
		</div>";
		
		} else if($message=="") {
		echo "<div class='alert alert-danger'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Warning!</strong> Please fill the message field.
		</div>";
	
	} else {
		mail($to,$subject,$msg,"From:".$email);
		echo "<div class='alert alert-success'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Gracias!</strong>
		</div>";
	}
?>
