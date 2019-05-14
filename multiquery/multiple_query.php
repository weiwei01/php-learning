<?php 

	if($_GET['submit'])
	{	
		$fieldLimit1=$_GET['fieldLimit1'];
		echo $fieldLimit1;
	   
		echo "<br>";
	   
		$checkbox_new=$_GET['checkbox_new'];
		echo $checkbox_new;
	   
		echo "<br>";
		
		$checkbox_borrow=$_GET['checkbox_borrow'];
		echo $checkbox_borrow;
		
		echo "<br>";
		
		$checkbox_central=$_GET['checkbox_central'];
		echo $checkbox_central;
	}

?>