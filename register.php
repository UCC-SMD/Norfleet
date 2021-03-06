<!--

    _   __           ______          __
   / | / /___  _____/ __/ /__  ___  / /_
  /  |/ / __ \/ ___/ /_/ / _ \/ _ \/ __/
 / /|  / /_/ / /  / __/ /  __/  __/ /_
/_/ |_/\____/_/  /_/ /_/\___/\___/\__/

    Social Media for Professionals


Developed by John and Camran over May 11th to May 18th.
Full team: Charlie, Campbell, Camran and John
Purpose: Provide a way for the user to input their data into the website's database, so they can log back in later
Version: 1.3
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

<div class="row">
 <div class="col-lg-12" align="right">
    <div class="pageshift">
    <h1 class="page-header" font size="18" align="center">
         <font size="18" color="black"> Register </font><!-- <small><font color="grey"> Join the club </small></font> -->
    </h1>
    </div>
</div>

<!-- Very similar to index.php, except instead of checking to see if the input is in the database, this is where the intial data is stored -->
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
<br>
</form>

<a class="btn btn-default" href="index.php">Login</a>
<br>
<br>
<div id="alertbox" class="alert alert-danger" style="visibility: hidden"role="alert">
    <p id="errormessagebox_thing"></p>
</div>
<br>
</center>

<!-- the javascript for displaying the errors_lack -->
<script type="text/javascript">
    window.errors_lack = [];
    window.repeat_errors = [];// ja ja ja ze repeat_errors ja
    window.total_error_log = "";
    function displayerrors_lack() {
        console.log(errors_lack);
        console.log(repeat_errors);
        total_error_log = "You forgot to add: ";
        for (var i = 0; i<errors_lack.length; i++) {
            // /console.log((errors_lack[i]));
            if (errors_lack.length!=1) {
                if (i+1 == errors_lack.length) {
                    total_error_log += " and " + errors_lack[i] + ".";
                } else{
                    total_error_log += " " + errors_lack[i] + ",";
                };
            }else{
                total_error_log += errors_lack[i] + ".";
            };
        };
        
        display_the_errors();
        

    }
    function display_the_errors () {
        document.getElementById('errormessagebox_thing').innerHTML = total_error_log;
        document.getElementById('alertbox').style.visibility = 'visible';
    }
    function display_other_things() {
        if(repeat_errors.length!=0){

            console.log(repeat_errors + "we are doing it");
            console.log(errors_lack.indexOf('username'));
            if (errors_lack.length == 0){
                console.log("first branch");
                total_error_log = "Please change your ";
                for (var i = 0; i < repeat_errors.length; i++) {
                    if (repeat_errors.length == 1){
                        total_error_log += repeat_errors[i] + ", because it is taken."
                    }
                    else{
                        if (i == 0) {
                            total_error_log += repeat_errors[i];
                        } else{
                            total_error_log += "and" + repeat_errors[i] + ", because they are taken." 
                        };
                    }
                };
            }else{
                console.log("second branch");

                total_error_log += " Please change your ";
                console.log("error hause length " + repeat_errors.length)
                if (repeat_errors.length == 1){
                        
                        total_error_log += repeat_errors[0] + ", because it is taken."
                    }else{
                        console.log(repeat_errors.length + "  =  " + 1)
                        if (i == 0) {
                            total_error_log += repeat_errors[i];
                        } else{
                            total_error_log += "and" + repeat_errors[i] + ", because they are taken." 

                        };
                }   
            }
            display_the_errors();
        }
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
            errors_lack.push('username');
            displayerrors_lack();
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
            errors_lack.push('password');;
            // alert('test 1');
            displayerrors_lack();
            
            </script>";
            $cont = FALSE;
        } 
         

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { 
            echo "<script>
            errors_lack.push('email');  
            displayerrors_lack();
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
            echo "<script>
            // alert(errors_lack.indexOf('username'));
            if(errors_lack.indexOf('username')== -1){
                // alert('username');
                repeat_errors.push('username');
                console.log('the user neesd to change their fuck');
            };
            </script>";
            $cont = FALSE;
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

            echo "<script>
            // alert(errors_lack.indexOf('email'));
            if(errors_lack.indexOf('email') == -1){
                repeat_errors.push('email');
                console.log('the user neesd to change their email');
            }else{
                
            }
            
            
            </script>";

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
                echo "<script>alert('Registration successful, please log in.');</script>";//imma get rid of this later
                                                                          //Dont' worry Camran, I got your back :3
                // header("Location: login.php"); 
            } 
            catch(PDOException $ex) 
            { 
                // Note: On a production website, you should not output $ex->getMessage(). 
                // It may provide an attacker with helpful information about your code.  
                die("Failed to run query: " . $ex->getMessage()); 
                // echo "<script>alert(\"fuck you\");</script>";
            } 
        }else{
            echo "<script>display_other_things();</script>";
        }
         
        // This redirects the user back to the login page after they register 
        // 
         
        // Calling die or exit after performing a redirect using the header function 
        // is critical.  The rest of your PHP script will continue to execute and 
        // will be sent to the user if you do not die or exit. 
        // die("Redirecting to login.php"); 
    }//if !empty post
     
?> 

                 <!-- /.container-fluid -->

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


<!--  

      ( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )
      ( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )
      ( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° ) 

                    N I C E   J O B   G U Y S 

                                            - C. Hansen
      
      ( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )
      ( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )
      ( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )( ͡° ͜ʖ ͡° )  

-->

