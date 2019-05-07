<?php
   //ob_start();
   //session_start();
?>



        <?php
            $msg = '';
            $flag = FALSE;
			
			
           // if (isset($_POST['login']) && !empty($_POST['username']) 
            //   && !empty($_POST['password'])) {
			if (isset($_POST['login'])){
				$username=$_POST['username'];
				$password=$_POST['password'];

				
				include("login_php.php");
				
				if($flag){
					$_SESSION['valid'] = true;
					$_SESSION['timeout'] = time();
					$_SESSION['username'] = $username ;
					$msg = 'Correct username and password';
					//sleep(3);
					header("Location:index.php" );
				}else{
					$msg = 'Wrong username or password';
				}

            }
         ?>


