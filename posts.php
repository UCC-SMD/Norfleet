<!DOCTYPE html>
 <html lang="en">

 <head>

      <!-- These are the importations of boostrap, css, our font (font awesome), our icon, in addition to some technically browser-specific stuff. -->
     
	 	<link href="images/web_assets/favicon.ico" rel="icon" />

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/sb-admin.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
		<link href="css/ourstyle.css" rel="stylesheet" />

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" in_content="IE=edge">
     <meta name="viewport" in_content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <title>Norfleet</title>

     <!-- Bootstrap Core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="css/simple-sidebar.css" rel="stylesheet">

 </head>




 <body>

     <div id="wrapper">

         <!-- Sidebar -->
         <div id="sidebar-wrapper">
             <ul class="sidebar-nav">
                 <li class="sidebar-brand">
                    <br>
                     <a class="navbar-brand" href="dashboard.php">  <font size="10" face="avenir" color="white"> Norfleet </font> </a>
                 </li>
                 <li class="active">
                     <a href="dashboard.php"> <i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                 </li>
                 <br>
                 <li>
                     <a href="#"> <i class="fa fa-fw fa-comments"></i> Posts </a>
                 </li>
                 <br>
                 <li>
                     <a href="hashtags.php"> <i class="fa fa-fw fa-bullhorn"></i> Hashtags </a>
                 </li>
                 <br>
                 <li>
                     <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                         <i class="fa fa-fw fa-user"></i> Help <i class="fa fa-fw fa-caret-down"></i>
                       <br>
                     </a>
                     <ul id="demo" class="collapse">
                             <a href="#"> <span class="fa fa-fw fa-comments"></span> Posts </a>
                             <!-- <a href="#"> <i class="fa fa-fw fa-gear"></i> Settings  </a> -->
                             <a href="logout.php"> <i class="fa fa-fw fa-bullhorn"></i> Hashtags </a>
                     </ul>
                 </li>
                 <br>
                 <li>
                 <a href="logout.php"> <i class="fa fa-fw fa-power-off"></i> Log Out </a>
                 </li>
                 <br>
                 <li>
                     <a href="aboutus.php"> <i class="fa fa-fw fa-male"></i> About Us </a>
                 </li>
                 <br>
                 <li>
                     <a href="help.php"> <i class="fa fa-fw fa-comments"></i> Help! </a>
                 </li>
             </ul>
         </div>
         <!-- /#sidebar-wrapper -->

         <!-- Page in_content -->
         <div id="page-in_content-wrapper">
             <!-- <div class="container-fluid">
                 <div class="row">
                     <div class="col-lg-12">
                         <h1>Simple Sidebar</h1>
                         <p>This template has a responsive menu toggling system.
                         The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens.
                         When toggled using the button below, the menu will appear/disappear.
                         On small screens, the page in_content will be pushed off canvas.</p>
                         <p>Make sure to keep all page in_content within the <code>#page-in_content-wrapper</code>.</p>
                         <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                     </div>
                 </div>
             </div> -->
                     <!-- Page Heading -->
                     <div class="row">
                         <div class="col-lg-12" align="right">
                            <div class="pageshift">
                            <h1 class="page-header" font size="18" align="left">
                                 <font size="18" color="black"> Posts </font><small><font color="grey"> What everyone's talking about </small></font>
                            </h1>
                                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Sidebar</a>
                            </div>
                            <br>

                             <!-- Maybe put an alert or something here. I really don't know -->
														 <!-- Over-Descriptive and unnecessary -->
                        <!-- <ol class="breadcrumb">
                                 <li class="active">
                                     <i class="fa fa-dashboard"></i> Dashboard
                                 </li>
                             </ol> -->
                         </div>
                     </div>

										 <!-- Banner Alert -->
                     <!-- <div class="row">
                         <div class="col-lg-12">
                             <div class="alert alert-info alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 <i class="fa fa-info-circle"></i>  <strong>I am a banner alert</strong>
                                 Click here <a href="index.php" class="alert-link"> to reload the page!</a>
                             </div>
                         </div>
                     </div> -->
                     <!-- /.row -->


                     <!-- <div class="element">
                      </div> -->
                         <div class="col-lg-14">
                             <!-- <div class="panel panel-default">
                                     <div class="list-group">
                                         <a href="#" class="list-group-item">
                                             <span class="badge">just now</span>
                                             <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                         </a>
                                         <br>
                                         <a href="#" class="list-group-item">
                                             <span class="badge">4 minutes ago</span>
                                             <i class="fa fa-fw fa-comment"></i> Commented on a post
                                         </a>
                                         <br>
                                         <a href="#" class="list-group-item">
                                             <span class="badge">23 minutes ago</span>
                                             <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                         </a>
                                         <br>
                                         <a href="#" class="list-group-item">
                                             <span class="badge">46 minutes ago</span>
                                             <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                         </a>
                                         <br>
                                         <a href="#" class="list-group-item">
                                             <span class="badge">1 hour ago</span>
                                             <i class="fa fa-fw fa-user"></i> A new user has been added
                                         </a>
                                         <br>
                                         <a href="#" class="list-group-item">
                                             <span class="badge">2 hours ago</span>
                                             <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                         </a>
                                         <br>
                                         <a href="#" class="list-group-item">
                                             <span class="badge">yesterday</span>
                                             <i class="fa fa-fw fa-globe"></i> Saved the world
                                         </a>
                                         <br>
                                         <a href="#" class="list-group-item">
                                             <span class="badge">two days ago</span>
                                             <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                         </a>
                                     </div>
                                     <div class="text-right">
                                         <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                     </div>
                                 </div> -->

<?php

// pass in some info;
require("common.php"); 

if(empty($_SESSION['user'])) { 

// If they are not, we redirect them to the login page. 
$location = "http://" . $_SERVER['HTTP_HOST'] . "/login.php";
echo '<META HTTP-EQUIV="refresh" in_content="0;URL='.$location.'">';
//exit;

// Remember that this die statement is absolutely critical.  Without it, 
// people can view your members-only in_content without logging in. 
die("Redirecting to login.php"); 
} 

// To access $_SESSION['user'] values put in an array, show user his username
$arr = array_values($_SESSION['user']);
echo "Welcome " . $arr[2];

// open connection
$connection = mysql_connect($host, $username, $password) or die ("Unable to connect!");

// select database
mysql_select_db($dbname) or die ("Unable to select database!");

// create query
$query = "SELECT * FROM posts";

// execute query
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned
if (mysql_num_rows($result) > 0) {

// print them one after another
echo "<table cellpadding=10 border=1>";
while($row = mysql_fetch_row($result)) {
echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>" . $row[1]."</td>";
echo "<td>".$row[2]."</td>";
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
$in_content = mysql_escape_string($_POST['in_content']);

// check to see if user has entered anything
if ($in_content != "") {
// build SQL query
$query = "INSERT INTO posts (`by`, `in_content`) VALUES ('$arr[1]', '$in_content')";
// run the query
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
// refresh the page to show new update
echo "<meta http-equiv='refresh' content='0'>";
}

// if DELETE pressed, set an id, if id is set then delete it from DB
if (isset($_GET['id'])) {

// create query to delete record
echo $_SERVER['PHP_SELF'];
$query = "DELETE FROM posts WHERE id = ".$_GET['id'];

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
in_content: <input type="text" name="in_content">
<input type="submit" name="submit">
</form>
<form action="logout.php" method="post"><button>Log out</button></form>
                             </div>

                     <!-- /.row -->

                 </div>
                 <!-- /.container-fluid -->

             </div>
         </div>
         <!-- /#page-in_content-wrapper -->

     </div>
     <!-- /#wrapper -->

     <!-- jQuery -->
     <script src="javascript/jquery.js"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="javascript/bootstrap.min.js"></script>

     <!-- Menu Toggle Script -->
     <script>

    //  32 is JavaScript SpaceBar keycode

     $("#menu-toggle").click(function(e) {
         e.preventDefault();
         $("#wrapper").toggleClass("toggled");
     });
     </script>

 </body>

 </html>

