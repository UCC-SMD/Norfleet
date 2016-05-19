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
    
    <div><center><h1> About Norfleet</h1>
<b> What are we?</b>
<p> Norfleet is a social media platform for people to share their thoughts, actions, and experiences with people all over the world!</p>
</center></div><br>
    <div><center>#Behold! A summary of every development made by our group! Updated every other day!

<h1>Day One: May 3rd, 2016</h1>
<h3>Objectives:</h3>
- Get basic requirements on the Rubric done (Camran and Charlie)
  - Secure login/logout
  - Ability "tweet" with hashtags
  - Ability to search for users, hashtags and tweets
  - Errors for incorrect usernames/passwords
- Start on an HTML page with some fancy CSS and Bootstrap (John/Campbell)
- Keep updating the GitHub (John/Campbell)

<h3>Accomplishments</h3>
While John was away today, Charlie, Camran and I were pleasantly surprised to find that the GitHub had magically been set up for us (thanks a bunch John!). Camran started working on the back-end support for users and Error messages if a user incorrectly typed their username or password. Meanwhile Charlie started to work on a SQL search function based off of Mr Hoel's code. Charlie ended up finishing his project, Camran ended up scrapping part of his code to improve it next class and I (Campbell) am working hard to make sure that we have a great burndown chart and that the Wiki stays updated from class to class. We are all generally busy this week and hopefully after this weekend we can start devoting more time outside of class to this project to make it awesome!

<h1>Day Two: May 5th, 2016</h1>
<h3> Objectives:</h3>
- Create register page
  - Errors for incorrect usernames/passwords
- Collect all code we have so far and put it in a website
- Keep working on the webpage

<h3>Accomplishments</h3>
Today we all got GitHub desktop set up on our computers so that we could work on the project more efficiently without going into our browsers. Camran got the error notification on the login page working, John got working on a sidebar for our website, Charlie worked on our homepage and incorporated his SQL search function from last class into the home page, I am still here, typing away at our GitHub and leading the standup meetings... but alas, tis the life of a Scrum Master. But in all seriousness we were really productive today and Camran especially learned a lot about session variables (cool).

<h1>Day Three: May 9th, 2016</h1>
<h3> Objectives:</h3>
- Create a hashtags, trending page and mentions
- Implement some of the PHP code into the website
- Working on hashtags
- Getting registration secure and logical

<h3> Accomplishments </h3>
Happy Monday (not really though). John did some awesome work over the weekend getting the HTML, CSS and Bootstrap organized for our webpage. He did this by combining a few different bootstrap templates and it looks awesome. Camran worked on registration again today and succeeded in fixing the registration and got the error messages working. John got the dashboard of the front-end working, all that needs to be done now is a hashtag page. Charlie kept working on some PHPmyAdmin stuff that will be implemented into the front-end at a later time. I am starting on the burndown chart and am hoping to have it complete by the end of the week.

<h1>Day Four: May 11th, 2016</h1>
<h3> Objectives:</h3>
- Clean up the GitHub

<h3> Accomplishments </h3>
Because this class was a 45 minute period, we spent the majority of our time today cleaning up the GitHub, along with making sure that all of our variables are properly named and descriptive. Camran also worked on password retrieval today. In other news, there has been an interesting development in our GitHub. We had a random GitHub user come and contribute on our code. He helped solve a problem with out icons and text.
        
        
<h1>Day Five: May 13th, 2016</h1>
<h3> Objectives:</h3>
- Work on the password encryption function
- Made enhancements to navbar and css; generally front-end work

<h3> Accomplishments </h3>
This class Campbell was away, so I (Charlie) have taken over his Scrum duties temporarily.  This class was a miscellaneous class that was split into three different tasks for the three different people.  Firstly, Camran worked on the registration, password-retrieval and encryption.  John worked on mostly front-end tasks for today: he redid the navbar and reworked the CSS file.  Charlie worked on the help/about pages and some minor front-end aesthetics.
        
<h1>Day Six: May 17th, 2016</h1>
<h3> Objectives:</h3>
- Finish up the project
- Work on Presentation
- Get design for business cards done

<h3> Accomplishments </h3>
A minor panic ensued as there was a critical error with the website. After extensive rollbacks, headscratching and debugging, the culprit of a small section of php code was found. After the crisis had been solved, we all got back to working on our tasks. John continued to work on posts, Camran worked on password retrieval, Charlie worked on the help and about pages, and I got an error page done.   </center></div>
    
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

