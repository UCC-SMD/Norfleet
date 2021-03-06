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
                     <a class="navbar-brand" href="dashboard.php">  <font size="10" color="white"> Norfleet </font> </a>
                 </li>
                 <li>
                     <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                         <i class="fa fa-fw fa-user"></i> Username <i class="fa fa-fw fa-caret-down"></i>
                       <br>
                     </a>
                     <ul id="demo" class="collapse">
                             <a href="profile.php"> <span class="fa fa-fw fa-user"></span> Profile </a>
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
                     <a href="events.php"> <i class="fa fa-fw fa-map-o"></i> Events</a>
                 </li>
             </ul>
         </div>
         <!-- /#sidebar-wrapper -->

         <!-- Page Content -->
         <div id="page-content-wrapper">
             <!-- <div class="container-fluid">
                 <div class="row">
                     <div class="col-lg-12">
                         <h1>Simple Sidebar</h1>
                         <p>This template has a responsive menu toggling system.
                         The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens.
                         When toggled using the button below, the menu will appear/disappear.
                         On small screens, the page content will be pushed off canvas.</p>
                         <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                         <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                     </div>
                 </div>
             </div> -->
                     <!-- Page Heading -->
                    <div class="row">
                         <div class="col-lg-12" align="right">
                            <div class="pageshift">
                            <h1 class="page-header" font size="18" align="left">
                                 <font size="18" color="black"> Events </font><small><font color="grey"> What's cooking? </small></font>
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
                     
                     <!-- <div class="element">
                      </div> -->
                         <div class="col-lg-13">
                             <div class="panel panel-default">
                                 <div class="panel-heading">
                                     <h3 class="panel-title"><!-- <i class="fa fa-clock-o fa-fw"></i> --> Events</h3>
                                 </div>
                                 <div class="panel-body">
                                     <div class="list-group">
                                         <a href="#" class="list-group-item">
                                             <span class="badge">just now</span>
                                             <i class="fa fa-fw fa-calendar"></i> Task
                                         </a>
                                     </div>
                                     <div class="text-right">
                                         <!-- <a href="posts.php">View All Activity <i class="fa fa-arrow-circle-right"></i></a> -->
                                     </div>
                                 </div>
                             </div>

                     <!-- /.row -->

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

