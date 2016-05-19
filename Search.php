/*
Coded by Charlie
Uses SQL code to search the database
*/


<link href="images/web_assets/favicon.ico" rel="icon" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />

<head>
<title>Search Function</title>
</head>

<body>
<?php
	require("common.php");
	$connection = mysql_connect($host, $username, $password) or die ("Unable to connect!");

		// select database
		mysql_select_db($dbname) or die ("Unable to select database!");
		
		//search
		$search = mysql_escape_string($_POST('search'));
		
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
				echo "<td>".$row[0]."</td>";
        		//echo "<td>" . $row[1]."</td>";
        		//echo "<td>".$row[2]."</td>";
				//echo "<td><a href=".$_SERVER['PHP_SELF']."?id=".$row[0].">Delete</a></td>";
        		echo "</tr>";
    		}
		    echo "</table>";

		} else {
			
    		// print status message
    		echo "No rows found!";
		}
?>
</body>
</html>
