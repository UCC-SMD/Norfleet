<?php
function encrypt_password($pas)
{	
	echo "<script>console.log('doing the encrytption');</script>";
	$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
	$password = hash('sha256', $pas . $salt); 
	for($round = 0; $round < 65536; $round++) { 
		$password = hash('sha256', $password . $salt); 

	} 
	
	return $password;
}	

?>