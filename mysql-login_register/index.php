<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Tutorialspoint.com</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
	
   <body>
      
      <h2>Enter Username and Password Example Index</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            if (isset($_SESSION['username'])) {
				echo "hi! ".$_SESSION['username'];
            } else{
				echo "Please click here to login.";
				echo "<a href=login.php>Link</a>";
				
				echo "<br>";
				echo "Please click here to register.";
				echo "<a href=register.php>Link</a>";

			}
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
       
			

		 
      </div> 
        <!--<a href = "login.php" tite = "Login">Click here to Login</a>.-->
		 
		<br>
		<br>
		 
        <a href = "logout.php" tite = "Logout">Click here to clean Session</a>.
		
		
   </body>
   <!-- reference:https://www.tutorialspoint.com/php/php_login_example.htm-->
</html>