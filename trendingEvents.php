<!DOCTYPE html>
 <html lang="en">

 <head>

	 <!-- This is so many levels of bad all at one time.
	 Why does this even work? -->

	 	<link href="images/web_assets/favicon.ico" rel="icon" />

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/sb-admin.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
		<link href="css/ourstyle.css" rel="stylesheet" />

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <title>Norfleet Trending Events</title>

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
                     <a class="navbar-brand" href="index.php">  <font size="10" color="white"> Norfleet </font> </a>
                 </li>
                 <li>
                     <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                         <i class="fa fa-fw fa-user"></i> <?php echo $query; ?> <i class="fa fa-fw fa-caret-down"></i>
                       <br>
                     </a>
                     <ul id="demo" class="collapse">
                             <a href="profile.php"> <span class="fa fa-fw fa-user"></span> Profile </a>
                             <!-- <a href="#"> <i class="fa fa-fw fa-gear"></i> Settings  </a> -->
                             <a href="logout.php"> <i class="fa fa-fw fa-power-off"></i> Log Out </a>
                     </ul>
                 </li>
                 <br>
                 <li class="active">
                     <a href="#"> <i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
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
                     <a href="mentions.php"> <i class="fa fa-fw fa-users"></i> Mentions </a>
                 </li>
                 <br>
                 <li>
                     <a href="trendingEvents.php"> <i class="fa fa-fw fa-map-o"></i> Trending Events</a>
                 </li>
             </ul>
         </div>
         <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Sidebar</a>
    </div>

     
     <script src="javascript/jquery.js"></script>
     
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
     
     
     <?php 

    // Obligatory
    require("common.php");

    $query = " 
    SELECT 
        id, 
        username
    FROM users 
    WHERE 
        username = $submitted_username "; 


?>
