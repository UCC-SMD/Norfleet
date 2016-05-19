<!--

    _   __           ______          __
   / | / /___  _____/ __/ /__  ___  / /_
  /  |/ / __ \/ ___/ /_/ / _ \/ _ \/ __/
 / /|  / /_/ / /  / __/ /  __/  __/ /_
/_/ |_/\____/_/  /_/ /_/\___/\___/\__/

    Social Media for Professionals


Developed by John and Charlie over May 11th to May 18th.
Full team: Charlie, Campbell, Camran and John
Purpose: Provide a space for the user to access information on how to use and search for hashtags
Version: 0.9.3


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
                     <a href="posts.php>"> <i class="fa fa-fw fa-comments"></i> Posts </a>
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
                     <a href="norfleetAbout.php"> <i class="fa fa-fw fa-male"></i> About Us </a>
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
                                 <font size="18" color="black">Posts/tweets</font><small><font color="grey"> A guide </small></font>
                            </h1>
                                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Sidebar</a>
                            </div>
                         </div>
                     </div>

                     <div class="row" align="right">
                         <h3>
                            Tweets are the name for messages sent across our social media platform.  They are sent to share your thoughts and expierences with the world, eliciting reactions.
                         </h3>
                         <br>
                         <h4>
                            Once a tweet is sent, it is available for the whole world to see. To post a tweet, simply click on the "post" page on the sidebar, and then fill out the fields required to post a tweet. You can even search for tweets by username or by hashtag included in the tweet.

                         </h4>
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