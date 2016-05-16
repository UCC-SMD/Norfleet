<?php
include 'passwordencrypt.php';
$passwordsystem = encrypt_password("asdf");
echo $passwordsystem[0]. "   " . $passwordsystem[1];
//this is just a testing file, no real importance
?>
