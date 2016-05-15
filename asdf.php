<?php
include 'passwordencrypt.php';
$werefucked = encrypt_password("fuck_la");
echo $werefucked[0]. "   " . $werefucked[1];
?>
