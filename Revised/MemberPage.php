<html>
	<body>
    
	<?php
	
	    // pass in some info;
		require("common.php"); 
		
		if(empty($_SESSION['user'])) { 
  
			// If they are not, we redirect them to the login page. 
			$location = "http://" . $_SERVER['HTTP_HOST'] . "/TestingHomePage.php";
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
			//exit;
         
        	// Remember that this die statement is absolutely critical.  Without it, 
        	// people can view your members-only content without logging in. 
        	die("Redirecting to TestingHomePage.php"); 
    	} 
		
		// To access $_SESSION['user'] values put in an array, show user his username
		$arr = array_values($_SESSION['user']);
		echo "Welcome " . $arr[1];

		// open connection
		$connection = mysql_connect($host, $username, $password) or die ("Unable to connect!");

		// select database
		mysql_select_db($dbname) or die ("Unable to select database!");

		// create query
		$query = "SELECT * FROM symbols";
       
		// execute query
		$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

		// see if any rows were returned
		if (mysql_num_rows($result) > 0) {

    		// print them one after another
    		echo "<table cellpadding=10 border=1>";
    		while($row = mysql_fetch_row($result)) {
        		echo "<tr>";
				//echo "<td>".$row[0]."</td>";
        		echo "<td>" . $row[1]."</td>";
        	//	echo "<td>".$row[2]."</td>";
            //    echo "<td>".$row[3]."</td>";
				echo "<td><a href=".$_SERVER['PHP_SELF']."?id=".$row[0].">Delete</a></td>";
        		echo "</tr>";
    		}
		    echo "</table>";

		} else {
			
    		// print status message
    		echo "No rows found!";
		}

		// free result set memory
		mysql_free_result($result);

		// set variable values to HTML form inputs
		$Tweet = mysql_escape_string($_POST['Tweet']);
    	//$animal = mysql_escape_string($_POST['animal']);
		
		// check to see if user has entered anything
		if ($Tweet != "") {
	 		// build SQL query
			$query = "INSERT INTO Tweets (Content) VALUES ('$Tweet')";
			// run the query
     		$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
			// refresh the page to show new update
	 		echo "<meta http-equiv='refresh' content='0'>";
		}
		
		// if DELETE pressed, set an id, if id is set then delete it from DB
		if (isset($_GET['id'])) {

			// create query to delete record
			echo $_SERVER['PHP_SELF'];
    		$query = "DELETE FROM symbols WHERE id = ".$_GET['id'];

			// run the query
     		$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
			
			// reset the url to remove id $_GET variable
			$location = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
			exit;
			
		}
		
		// close connection
		mysql_close($connection);

	?>
    
    <!-- This is the HTML form that appears in the browser -->
   	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    	Tweet: <input type="text" name="tweet">
<!--    	National animal: <input type="text" name="">-->
    	<input type="submit" name="submit">
    </form>
    <form action="TestingLogout.php" method="post"><button>Log out</button></form>
    
	</body>
</html>