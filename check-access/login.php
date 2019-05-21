<?php
   ob_start();
   session_start();
?>



        <?php
            $msg = '';
            $flag = FALSE;
			
			if (isset($_POST['submit'])){
				$username=$_POST['stdID'];
				$password=$_POST['password'];
				$identity=$_POST['login-identity'];
				
				include("login_php.php");
				
				if($flag){
					$_SESSION['valid'] = true;
					$_SESSION['timeout'] = time();
					$_SESSION['username'] = $username ;
					$_SESSION['login-identity'] = $identity ;
					$msg = 'Correct username and password';
					//sleep(3);
					
					if ($identity == "people"){
						header("Location:people_page.php" );
					}
					if ($identity == "student"){
						header("Location:student_page.php" );
					}					
					
					

				}else{
					$msg = 'Wrong username or password';
					echo "<br>";
					echo $msg;
				}

            }
         ?>


