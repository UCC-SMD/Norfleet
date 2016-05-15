<?php

function encrypt_password($pas)
{	

	return "asdf";
	echo "<script>console.log('doing the encrytption');</script>";
	$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
	$password = hash('sha256', $pas . $salt); 
	for($round = 0; $round < 65536; $round++) { 
		$password = hash('sha256', $password . $salt); 

	} 
	// return"hewllod";
	// return"hesdjlfldskf";
	return array($password, $salt);
}
// echo "hello wrold";
// echo(encrypt_password("asdf"));
?>
