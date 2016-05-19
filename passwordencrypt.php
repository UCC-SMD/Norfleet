<!--
Programmed by Camran on May 17th, 2016
For NORFLEET, social media for professionals
Full team: Charlie, Campbell, Camran and John
Object of code: Password encypting using hashing
*please note* Any code that is commented out is things that we either: #1 not working properly, #2 features we would like to implement at a
later time or #3 old outdated code we haven't gotten around to cleaning up yet (we're lazy xD)
-->

<?php

function encrypt_password($pas)
{	

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
