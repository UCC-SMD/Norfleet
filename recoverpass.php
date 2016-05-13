<!-- this will allow the user to recover their password. general outline: two fields in a form, one for username other for email, 
submit button. use php mail function to email new password to user, and reset it using sql
 -->
<h1>reset yo password</h1>
<h2>enter your the email and username of the account you would like to reset password of</h2>
<form action="recoverpass.php" method="post"> 
Username:<br /> 
<input type="text" name="username" value="" /> 
<br /><br /> 
E-Mail:<br /> 
<input type="text" name="email" value="" /> 
<br /><br /> 

<input type="submit" value="recover password" /> 

</form>
<?php
// il add more later
include 'passwordencrypt.php';
require("common.php"); 
echo encrypt_password("test");
?> 