<?php 
	session_start();


	// remove all session variables
	session_unset();

	// destory
	session_destroy();

	header('location: ../login.php');
?>