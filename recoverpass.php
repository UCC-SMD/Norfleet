<link href="images/web_assets/favicon.ico" rel="icon" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />
<center><h1>Password Reset</h1>
<h2>Please enter the email and username of your account.  Once entered, a new generated-password will be sent to your email.</h2>
<form action="recoverpass.php" method="post"> 
Username:<br /> 
<input type="text" name="username" value="" /> 
<br /><br /> 
E-Mail:<br /> 
<input type="text" name="email" value="" /> 
<br /><br /> 
<input type="submit" value="recover password" /> 
</form>
</center>

 <!-- this will allow the user to recover their password. general outline: two fields in a form, one for username other for email, 
submit button. use php mail function to email forgotten password to user. 
 -->
<?php

function sendpass($email, $username, $password)
{
	
	$subject = "Password Retrieval for your Norfleet Account";
	
	$headers = "From: passwordretrieval.noreply@norfleet.com";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = '<html><body>';
	$message .= '<h1>Hello, World!</h1>';
	$message .= '</body></html>';
	mail("camran.hansen@ucc.on.ca",$subject,$message,$headers);
	echo "did it";
}

sendpass("camran.hansen@ucc.on.ca","camran","asdf");
?>