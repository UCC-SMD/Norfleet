<?php
include 'passwordencrypt.php';
$passwordsystem = encrypt_password("fuck_la");
echo $passwordsystem[0]. "   " . $passwordsystem[1];
?>
