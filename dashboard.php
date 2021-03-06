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

         <!-- Page Content -->
         <div id="page-content-wrapper">
                    <div class="row">
                         <div class="col-lg-12" align="right">
                            <div class="pageshift">
                            <h1 class="page-header" font size="18" align="left">
                                 <font size="18" color="black">Dashboard</font><small><font color="grey"> All things concerning you </small></font>
                            </h1>
                                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Sidebar</a>
                            </div>

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
                    <br>
                    <br>
                     <div class="row">
                        <center>
                         <div class="col-lg-6 col-md-7">
                             <div class="panel panel-grey">
                                 <div class="panel-heading">
                                     <div class="row">
                                         <div class="col-xs-3">
                                             <i class="fa fa-comments fa-5x"></i>
                                         </div>
                                         <div class="col-xs-9 text-right">
                                             <div class="huge"></div>
                                             <!-- Pull this from something -->
                                             <div><h3>Posts</h3></div>
                                         </div>
                                     </div>
                                 </div>
                                 <a href="posts.php">
                                     <div class="panel-footer">
                                         <span class="pull-left"> View Posts </span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-7">
                             <div class="panel panel-grey">
                                 <div class="panel-heading">
                                     <div class="row">
                                         <div class="col-xs-3">
                                             <i class="fa fa-user fa-5x"></i>
                                         </div>
                                         <div class="col-xs-9 text-right">
                                         <!-- Pull this from something -->
                                             <div class="huge"></div>
                                             <div><h3>Help</h3></div>
                                         </div>
                                     </div>
                                 </div>
                                 <a href="hashtagHelp.php">
                                     <div class="panel-footer">
                                         <span class="pull-left">View help topics</span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                         </div>
<!--                          <div class="col-lg-3 col-md-6">
                             <div class="panel panel-grey">
                                 <div class="panel-heading">
                                     <div class="row">
                                         <div class="col-xs-3">
                                             <i class="fa fa-users fa-5x"></i>
                                         </div>
                                         <div class="col-xs-9 text-right">
                                             <div class="huge"></div>
                                             <div><h3>Mentions</h3></div>
                                         </div>
                                     </div>
                                 </div>
                                 <a href="mentions.php">
                                     <div class="panel-footer">
                                         <span class="pull-left">View Mentions</span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                         </div> -->
<!--                          <div class="col-lg-4 col-md-7">
                             <div class="panel panel-grey">
                                 <div class="panel-heading">
                                     <div class="row">
                                         <div class="col-xs-3">
                                              <i class="fa fa-map-o fa-5x"></i>
                                         </div>
                                         <div class="col-xs-9 text-right">
                                             <div class="huge"></div>
                                             <div><h3>Events</h3></div>
                                         </div>
                                     </div>
                                 </div>
                                 <a href="trendingEvents.php">
                                     <div class="panel-footer">
                                         <span class="pull-left">View Events</span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                         </div>
                     </div> -->
                     <!-- <div class="element">
                      </div> -->
<!--                          <div class="col-lg-13">
                             <div class="panel panel-default">
                                 <div class="panel-heading">
                                     <h3 class="panel-title"> Posts</h3>
                                 </div>
                                 <div class="panel-body">
                                     <div class="list-group">
                                         <a href="#" class="list-group-item">
                                             <span class="badge">just now</span>
                                             <i class="fa fa-fw fa-calendar"></i> Task
                                         </a>
                                     </div>
                                     <div class="text-right">
                                     </div>
                                 </div>
                             </div> -->

                     <!-- /.row -->
                    </center>
                 </div>
                 <!-- /.container-fluid -->

             </div>
         </div>
         <!-- /#page-content-wrapper -->

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


