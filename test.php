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
<<<<<<< HEAD
        $arr = array_values($_SESSION['user']); echo "Welcome " . $arr[1];
        echo $_SESSION['user'] . $arr[1] . $arr[2];
=======
        $arr = array_values($_SESSION['user']);
        echo "Welcome " . $arr[1];

>>>>>>> parent of 57040bf... now this works! username detection initialized ja  ja ja cyka blyat

?>