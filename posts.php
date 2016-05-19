<!DOCTYPE html>
 <html lang="en">

 <head>

           <!-- Imports -->
           
           <!-- Import Favicon (The little image that you see in the browser tab -->
        <link href="images/web_assets/favicon.ico" rel="icon" />

            <!-- General Bootstrap CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
            <!-- Wrapper template -->
        <link href="css/sb-admin.css" rel="stylesheet">
            <!-- Sidebar suppliment -->
        <link href="css/animate.css" rel="stylesheet">
            <!-- Font Awesome: The source of the icons you see across the website, such as in the sidebar or the dashboard -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
            <!-- Custon CSS file for fine tuning other files by overriding the load process -->
        <link href="css/ourstyle.css" rel="stylesheet" />

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Initial scale set to one -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- The text that shows up in the browser tab (along with the favicon) -->
     <title>Norfleet</title>

     <!-- Bootstrap Core CSS  -->
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
                     <a class="navbar-brand" href="dashboard.php">  <font size="10" face="avenir" color="white"> Norfleet </font> </a>
                 </li>
                 <li class="active">
                     <a href="dashboard.php"> <i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                 </li>
                 <br>
                 <li>
                     <a href="posts.php"> <i class="fa fa-fw fa-comments"></i> Posts </a>
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
                             <a href="tweetHelp.php"> <span class="fa fa-fw fa-comments"></span> Posts </a>
                             <!-- <a href="#"> <i class="fa fa-fw fa-gear"></i> Settings  </a> -->
                             <a href="hashtagHelp.php"> <i class="fa fa-fw fa-bullhorn"></i> Hashtags </a>
                     </ul>
                 </li>
                 <br>
                 <li>
                 <a href="logout.php"> <i class="fa fa-fw fa-power-off"></i> Log Out </a>
                 </li>
                 <br>
                 <li>
                     <a href="https://github.com/UCC-SMD/Norfleet/wiki/Team-Biographies"> <i class="fa fa-fw fa-male"></i> About Us </a>
                 </li>
             </ul>
         </div>
         <!-- /#sidebar-wrapper -->

         <!-- Page in_content -->
         <div id="page-content-wrapper">
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
                             <div class="panel panel-default">
                                     <div class="list-group">
                                         <!-- <a href="#" class="list-group-item">
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
                                     </div> -->



<!-- This is the HTML form that appears in the browser -->
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
this will be changed soon: 
<input type="text" name="in_content">
<input type="text" name="hashtag">
<input type="submit" name="submit">
</form>                             

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
Search for Hashtag: <input type="text" name="hsearch">
<input type="submit" name="submit">
</form>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
Search for Username: <input type="text" name="usearch">
<input type="submit" name="submit">
</form>

<?php

// pass in some info;
require("common.php"); 

if(empty($_SESSION['user'])) { 

// If they are not, we redirect them to the login page. 
$location = "http://" . $_SERVER['HTTP_HOST'] . "/norfleet/index.php";
echo '<META HTTP-EQUIV="refresh" in_content="0;URL='.$location.'">';
//exit;

// Remember that this die statement is absolutely critical.  Without it, 
// people can view your members-only content without logging in. 
die("Redirecting to login.php"); 

} 

// To access $_SESSION['user'] values put in an array, show user his username
$arr = array_values($_SESSION['user']);
// echo "Welcome " . $arr[2];

// open connection
$connection = mysql_connect($host, $username, $password) or die ("Unable to connect!");

// select database
mysql_select_db($dbname) or die ("Unable to select database!");



// create query
if(empty($_POST['in_content'])!=True){
    $query = "SELECT * FROM posts";
}elseif (empty($_POST['hsearch'])!=True) {
    $query = "SELECT * FROM posts WHERE hashtag LIKE '%" . $_POST['hsearch'] . "%'";
}elseif (empty($_POST['usearch'])!=True) {
    $query = "SELECT * FROM posts WHERE doneby LIKE '" . $_POST['usearch'] . "'";
}else{
    $query = "SELECT * FROM posts";
}


// execute query
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned
if (mysql_num_rows($result) > 0) {

// print them one after another
while($row = mysql_fetch_row($result)) {
//the code above ensures that the user does not enter HTML code, meaning that 
echo "<a href='#' class='list-group-item'><span class='badge'>" . filter_var($row[1], FILTER_SANITIZE_STRING) .  "</span><i class='fa fa-fw fa-comment'></i></i>" . filter_var($row[2], FILTER_SANITIZE_STRING) . "<b> <i>". $row[3] . "</b> </i>"  ."</a><br>";
}

} else {

// print status message
echo "FATAL ERROR: No rows found!";
}

// free result set memory
mysql_free_result($result);

// set variable values to HTML form inputs
$in_content = mysql_escape_string($_POST['in_content']);
$hashtag = mysql_escape_string($_POST['hashtag']);
// check to see if user has entered anything
if ($in_content != "") {
// build SQL query
$query = "INSERT INTO posts (`doneby`, `in_content`, `hashtag`) VALUES ('$arr[1]', '$in_content', '$hashtag')";
// run the query
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
// refresh the page to show new update
echo "<meta http-equiv='refresh' content='0'>";
}


// close connection
mysql_close($connection);

?>  
</div>
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

