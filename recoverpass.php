<!-- this will allow the user to recover their password. general outline: two fields in a form, one for username other for email, 
submit button. use php mail function to email new password to user, and reset it using sql
 -->
<center><h1>Password Reset</h1>
<h2>Please enter the email and username of your account; once entered, a new generated-password will be sent to your email.</h2>
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
<?php
// il add more later
include 'passwordencrypt.php';
require("common.php"); 
echo encrypt_password("test");
?> 