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

     <title>Norfleet Help: Tweets</title>

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
                     <a class="navbar-brand" href="dashboard.php">  <font size="10" color="white"> Norfleet </font> </a>
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
                 <br>
                 <li>
                     <a href="help.php"> <i class="fa fa-fw fa-comments"></i> Help! </a>
                 </li>
             </ul>
         </div>
         <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Sidebar</a>
    </div>
    
    <div class="row">
                         <div class="col-lg-3 col-md-6">
                             <div class="panel panel-grey">
                                 <div class="panel-heading">
                                     <div class="row">
                                         
                                         <div class="col-xs-9 text-right">
                                             <div class="huge"></div>
                                             <!-- Pull this from something -->
                                             <div><h3>Profile</h3></div>
                                             <div><h4>Your profile is who you are, learn how to maximize your personal customization here...</h4></div>
                                         </div>
                                     </div>
                                 </div>
                                 <a href="profileHelp.php">
                                     <div class="panel-footer">
                                         <span class="pull-left"> Profile Help </span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6">
                             <div class="panel panel-grey">
                                 <div class="panel-heading">
                                     <div class="row">
                                         
                                         <div class="col-xs-9 text-right">
                                         <!-- Pull this from something -->
                                             <div class="huge"></div>
                                             <div><h3>Hashtag Help</h3></div>
                                             <div><h4>Hashtags are keywords used to identify specific points of note, learn how to use them here...</h4></div>
                                         </div>
                                     </div>
                                 </div>
                                 <a href="hashtagHelp.php">
                                     <div class="panel-footer">
                                         <span class="pull-left">View Hashtags</span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6">
                             <div class="panel panel-grey">
                                 <div class="panel-heading">
                                     <div class="row">
                                         
                                         <div class="col-xs-9 text-right">
                                         <!-- Pull this from something -->
                                             <div class="huge"></div>
                                             <div><h3>Tweets</h3></div>
                                             <div><h4>Tweeting is the primary method of communication on this website, learn how to 'tweet' here...</h4></div>
                                         </div>
                                     </div>
                                 </div>
                                 <a href="tweetHelp.php">
                                     <div class="panel-footer">
                                         <span class="pull-left">Tweet Help</span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6">
                             <div class="panel panel-grey">
                                 <div class="panel-heading">
                                     <div class="row">
                                         
                                         <div class="col-xs-9 text-right">
                                             <!-- Pull this from something -->
                                             <div class="huge"></div>
                                             <div><h3>What is Norfleet?</h3></div>
                                             <div><h4>Norfleet is the exciting and dynamic social media platform that you are on!</h4></div>
                                         </div>
                                     </div>
                                 </div>
                                 <a href="norfleetAbout.php">
                                     <div class="panel-footer">
                                         <span class="pull-left">Learn more about Norfleet</span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                         </div>
                     </div>
    
    <div><center><h1> Help Page: Tweets</h1>
<b> What are they?</b>
<p>Tweets are the name for messages sent across our social media platform.  They are sent to share your thoughts and expierences with teh world, eliciting reactions.</p>
<b> How they work </b>
<p>Once a tweet is sent, it is available for the whole world to see.  Of course, should you want to revoke a tweet, you can always delete it.</p></center></div>
    
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

