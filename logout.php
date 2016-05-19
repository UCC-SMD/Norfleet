  

<?php
    	//Execute common
    require("common.php");
    	//Remove user data
    unset($_SESSION['user']);
    	//Redirect to login page
    echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=index.php">';
    exit;
?>
