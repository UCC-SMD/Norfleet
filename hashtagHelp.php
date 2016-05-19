<!--

    _   __           ______          __
   / | / /___  _____/ __/ /__  ___  / /_
  /  |/ / __ \/ ___/ /_/ / _ \/ _ \/ __/
 / /|  / /_/ / /  / __/ /  __/  __/ /_
/_/ |_/\____/_/  /_/ /_/\___/\___/\__/

            NICE WORK LADS
 -->


 <!DOCTYPE html>
 <html lang="en">

 <head>

	 <!-- These are the importations of boostrap, css, our font (font awesome), our icon, in addition to some technically browser-specific stuff. -->
        <!-- This is the icon for the website -->
	 	<link href="images/web_assets/favicon.ico" rel="icon" />

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/sb-admin.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
		<link href="css/ourstyle.css" rel="stylesheet" />

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                             <a href="helpPages/tweetHelp.php"> <span class="fa fa-fw fa-comments"></span> Posts </a>
                             <!-- <a href="#"> <i class="fa fa-fw fa-gear"></i> Settings  </a> -->
                             <a href="helpPages/hashtagHelp.php"> <i class="fa fa-fw fa-bullhorn"></i> Hashtags </a>
                     </ul>
                 </li>
                 <br>
                 <li>
                 <a href="logout.php"> <i class="fa fa-fw fa-power-off"></i> Log Out </a>
                 </li>
                 <br>
                 <li>
                     <a href="helpPages/norfleetAbout.php"> <i class="fa fa-fw fa-male"></i> About Us</a>
                 </li>
             </ul>
         </div>
         <!-- /#sidebar-wrapper -->
        <div class="pageshift">
                    <h1 class="page-header" font size="18" align="left">
                        <font size="18" color="black">Help: Hashtags</font>
                        <small><font color="grey">  </small></font>
                    </h1>
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Sidebar</a>
        </div>
    
         <div class="row">
             <div><center>
        <h1> Hashtags</h1>
        <b> What are they?</b>
        <p> Hashtags are words or phrases preceded by a pound sign (#) that are used to identify messages on a specific topic.</p>
        <b> How they work </b>
        <p> If a tweet is sent with a hashtag, it will automatically show up in the hashtag section, where a user can search for specific hashtags.</p>
        </center></div>
     </div>
                         <div class="col-lg-3 col-md-6">
                             <div class="panel panel-grey">
                                 <div class="panel-heading">
                                     <div class="row">
                                         
                                         <div class="col-xs-9 text-right">
                                         <!-- Pull this from something -->
                                             <div class="huge"></div>
                                             <div><h3>Profiles</h3></div>
                                             
                                         </div>
                                     </div>
                                 </div>
                                 <div><h4>
                                     Your profile is who you are, learn how to maximize your personal customization here...
                                 </h4></div>
                                 <a href="profileHelp.php">
                                     <div class="panel-footer">
                                         <span class="pull-left">Profile Help</span>
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
                                             <div><h3>Hashtags</h3></div>
                                             
                                         </div>
                                     </div>
                                 </div>
                                 <div><h4>
                                     Hashtags are keywords used to identify specific points of note, learn how to use them here...
                                 </h4></div>
                                 <a href="hashtagHelp.php">
                                     <div class="panel-footer">
                                         <span class="pull-left">Hashtag Help</span>
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
                                            <div class="huge"></div>
                                             <div><h3>Tweets</h3></div>
                                         </div>
                                     </div>
                                 </div>
                                 <div><h4>
                                    Tweeting is the primary method of communication on this website, learn how to 'tweet' here...
                                 </h4></div>
                                 <a href="tweetHelp.php">
                                     <div class="panel-footer">
                                         <span class="pull-left">Tweet Help</span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                         </div>
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

 </html>



  
