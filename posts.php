
 <!DOCTYPE html>
 <html lang="en">

 <head>

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
                     <a class="navbar-brand" href="dashboard.php">  <font size="10" color="white"> Norfleet </font>  </a>
                 </li>
                 <li>
                     <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                         <i class="fa fa-fw fa-user"></i>  Username <i class="fa fa-fw fa-caret-down"></i>
                       <br>
                     </a>
                     <ul id="demo" class="collapse">
                         <li>
                             <a href="#"> <span class="fa fa-fw fa-user"></span> Profile </a>
                         </li>
                         <li>
                             <a href="#"> <i class="fa fa-fw fa-gear"></i> Settings  </a>
                         </li>
                         <li>
                             <a href="#"> <i class="fa fa-fw fa-power-off"></i> Log Out </a>
                         </li>
                     </ul>
                 </li>
                 <br>
                 <li class="active">
                     <a href="dashboard.php"> <i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                 </li>
                 <br>
                 <li>
                     <a href="posts.html"> <i class="fa fa-fw fa-comments"></i> Tweets </a>
                 </li>
                 <br>
                 <li>
                     <a href="#"> <i class="fa fa-fw fa-bullhorn"></i> Hashtags </a>
                 </li>
                 <br>
                 <li>
                     <a href="#"> <i class="fa fa-fw fa-users"></i> Mentions </a>
                 </li>
                 <br>
                 <li>
                     <a href="#"> <i class="fa fa-fw fa-map-o"></i> Trending Events</a>
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
                         <div class="col-lg-12">
                            <div class="pageshift" align="right">
                                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Sidebar</a>
                                </div>
                             <h1 class="page-header">
                                 <font size="12" color="black">Posts </font><small><font color="grey">
                                    What people are talking about
                                 </small></font>
                                 <!-- <right>
                                  <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                                 </right> -->
                                 <div class="pageshift">
                                   <right>
                                     <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Sidebar</a>
                                   </right>
                                 </div>
                             </h1>

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
