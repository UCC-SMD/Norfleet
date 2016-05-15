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
                     <a class="navbar-brand" href="index.php">  <font size="10" color="white"> Norfleet </font>  </a>
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
                     <a href="#"> <i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                 </li>
                 <br>
                 <li>
                     <a href="#"> <i class="fa fa-fw fa-comments"></i> Tweets </a>
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
                         <div class="col-lg-12" align="right">
                            <div class="pageshift">
                            <h1 class="page-header" font size="18" align="left">
                                 <font size="18" color="black"> Login </font><small><font color="grey"> Welcome back </small></font>
                            </h1>
                                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Sidebar</a>
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

<center>
<form action="register.php" method="post"> 
   <h2> Username <br /> </h2>
    <input type="text" name="username" value="" /> 
    <br /><br /> 
   <h2> E-Mail <br /> </h2>
    <input type="text" name="email" value="" /> 
    <br /><br /> 
    <h2> Password <br /> </h2>
    <input type="password" name="password" value="" /> 
    <br /><br /> 
    <input type="submit" value="Register" class="btn btn-default"/> 
    <br>
<!--     <div class="registerlink">
        <center> 
            <a input type="submit" value="Register" class="btn btn-default"> Register</a>
        </center>
    </div>  -->
<br>

    
</form>
<div id="alertbox" class="alert alert-danger" style="visibility: hidden"role="alert">
    <p id="errormessagebox_thing"></p>
</div>
</center>

<!-- the javascript for displaying the errormessages -->
<script type="text/javascript">
    window.errormessages = [];
    function displayerrormessages() {
        console.log(errormessages);
        var total_error_log = "You forgot to add: ";
        for (var i = 0; i<errormessages.length; i++) {
            // /console.log((errormessages[i]));
            if (errormessages.length!=1) {
                if (i+1 == errormessages.length) {
                    total_error_log += " and " + errormessages[i] + ".";
                } else{
                    total_error_log += " " + errormessages[i] + ",";
                };
            }else{
                total_error_log += errormessages[i];
            };
            
            
        };

        document.getElementById('errormessagebox_thing').innerHTML = total_error_log;
        document.getElementById('alertbox').style.visibility = 'visible';

    }
</script>
<!-- Dongers -->
<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
    // This if statement checks to determine whether the registration form has been submitted 
    // If it has, then the registration code is run, otherwise the form is displayed 
    //$_POST is an associative array 
    //  ($_POST as $variable) {
    //     echo $variable;
    // }
    $cont = TRUE;
    if(!empty($_POST)) 
    {  
        //zthese 3 if statements are the filters to make sure the person fills out the stuff correctly
        if(empty($_POST['username'])) 
        { 
            //javascript code goes here! 
            echo "<script>
            errormessages.push('username');
            displayerrormessages();
            // alert('test 0');
            </script>";
            // echo "errormessagebox_thing";
            $cont = FALSE;
            // // Note that die() is generally a terrible way of handling user errors 
            // // like this.  It is much better to display the error with the form 
            // // and allow the user to correct their mistake.  However, that is an 
            // // exercise for you to implement yourself. 
            // die("Please enter a username."); 
        }
        
        // Ensure that the user has entered a non-empty password 
        if(empty($_POST['password'])) 
        { 
            echo "<script>
            errormessages.push('password');;
            // alert('test 1');
            displayerrormessages();
            
            </script>";
            $cont = FALSE;
        } 
         

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { 
            // echo "<script>alert(\"fuck you\");</script>";
            echo "<script>
            errormessages.push('email');  
            displayerrormessages();
            // alert('test 2');
            
            
            </script>";
            $cont = FALSE;
        }

        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        "; 
         
       
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try 
        { 
            // These two statements run the query against your database table. 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            //something went wrong page like error.html maybe would go here (send user here)

            $cont = FALSE;
        } 
         
        // The fetch() method returns an array representing the "next" row from 
        // the selected results, or false if there are no more rows to fetch. 
        $row = $stmt->fetch(); 
         
        // If a row was returned, then we know a matching username was found in 
        // the database already and we should not allow the user to continue. 
        if($row) 
        { 
            // die("This username is already in use");
            $cont = FALSE;
            // echo "<script>alert(\"fuck you\");</script>";
        } 
         
        // Now we perform the same type of check for the email address, in order 
        // to ensure that it is unique. 
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                email = :email 
        "; 
         
        $query_params = array( 
            ':email' => $_POST['email']
        ); 
         
        try 
        { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        $row = $stmt->fetch(); 
         
        if($row) 
        { 
            // die("This email address is already registered"); 
            // echo "<script>alert(\"fuck you\");</script>";
            $cont = FALSE;
        } 
         
        // An INSERT query is used to add new rows to a database table. 
        // Again, we are using special tokens (technically called parameters) to 
        // protect against SQL injection attacks. 
        $query = " 
            INSERT INTO users ( 
                username, 
                password, 
                salt, 
                email 
            ) VALUES ( 
                :username, 
                :password, 
                :salt, 
                :email 
            ) 
        ";
        //import hte passwordencrypt function 
        include 'passwordencrypt.php';
        $passwordsystem = encrypt_password($_POST['password']);
        $query_params = array( 
            ':username' => $_POST['username'], 
            ':password' => $passwordsystem[0], 
            ':salt' => $passwordsystem[1], 
            ':email' => $_POST['email'] 
        ); 
         
        if($cont==TRUE){
            try{ 
                // Execute the query to create the user 
                $stmt = $db->prepare($query); 
                $result = $stmt->execute($query_params); 
                echo "<script>alert('fuck yeah murica');</script>";
            } 
            catch(PDOException $ex) 
            { 
                // Note: On a production website, you should not output $ex->getMessage(). 
                // It may provide an attacker with helpful information about your code.  
                die("Failed to run query: " . $ex->getMessage()); 
                // echo "<script>alert(\"fuck you\");</script>";
            } 
        }else{
            echo "<script>alert('fuck');</script>";
        }
         
        // This redirects the user back to the login page after they register 
        // header("Location: login.php"); 
         
        // Calling die or exit after performing a redirect using the header function 
        // is critical.  The rest of your PHP script will continue to execute and 
        // will be sent to the user if you do not die or exit. 
        // die("Redirecting to login.php"); 
        // echo "<script>alert(\"fuck you\");</script>";
    }//if !empty post
     
?> 

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