<?php

require("common.php"); 
        
        if(empty($_SESSION['user'])) { 
  
            // If they are not, we redirect them to the login page. 
            $location = "http://" . $_SERVER['HTTP_HOST'] . "/norfleet";
            echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
            //exit;
         
            // Remember that this die statement is absolutely critical.  Without it, 
            // people can view your members-only content without logging in. 
            die("Redirecting to login.php"); 
        } 
        
$arr = array_values($_SESSION['user']); echo $arr[1]; 
?> 

