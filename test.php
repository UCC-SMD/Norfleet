<?php

require("common.php"); 
        
        if(empty($_SESSION['user'])) { 
  
            // If they are not, we redirect them to the login page. 
            $location = "http://" . $_SERVER['HTTP_HOST'] . "/login.php";
            echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
            //exit;
         
            // Remember that this die statement is absolutely critical.  Without it, 
            // people can view your members-only content without logging in. 
            die("Redirecting to login.php"); 
        } 
        
        // To access $_SESSION['user'] values put in an array, show user his username
        $arr = array_values($_SESSION['user']);
        echo "Welcome " . $arr[1];


?>