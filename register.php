<!-- Import the bootstrap -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<center><h1>Register</h1>
<form action="register.php" method="post"> 
    Username:<br /> 
    <input type="text" name="username" value="" /> 
    <br /><br /> 
    E-Mail:<br /> 
    <input type="text" name="email" value="" /> 
    <br /><br /> 
    Password:<br /> 
    <input type="password" name="password" value="" /> 
    <br /><br /> 
    <input type="submit" value="Register" /> 
    
</form>

<div id="alertbox" class="alert alert-danger" style="visibility: hidden"role="alert">
    <p id="errormessagebox_thing"></p>
</div>
</center>
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
            // Note: On a production website, you should not output $ex->getMessage(). 
            // It may provide an attacker with helpful information about your code.  
            //die("Failed to run query: " . $ex->getMessage()); 
            // echo "<script>alert(\"fuck you\");</script>";
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
        $password = encrypt_password($_POST['password']);
        $query_params = array( 
            ':username' => $_POST['username'], 
            ':password' => $password, 
            ':salt' => $salt, 
            ':email' => $_POST['email'] 
        ); 
         
        if($cont==TRUE){
            try{ 
                // Execute the query to create the user 
                $stmt = $db->prepare($query); 
                $result = $stmt->execute($query_params); 
            } 
            catch(PDOException $ex) 
            { 
                // Note: On a production website, you should not output $ex->getMessage(). 
                // It may provide an attacker with helpful information about your code.  
                die("Failed to run query: " . $ex->getMessage()); 
                // echo "<script>alert(\"fuck you\");</script>";
            } 
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
