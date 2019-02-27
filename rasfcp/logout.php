<?php

	session_start();
	
	if (!isset($_SESSION['user'])) {
		header("Location: adminportal.php");
	} 

	if (!isset($_SESSION['user'])) {
		header("Location:  records.php");
	} 

	if (!isset($_SESSION['user'])) {
		header("Location: view.php");
	} 

	if (!isset($_SESSION['user'])) {
		header("Location: insert.php");
	} 

	if (!isset($_SESSION['user'])) {
		header("Location: schedules.php");
	} 


     else if(isset($_SESSION['user'])!="") {
		header("Location: adminportal.php");
	}
else if(isset($_SESSION['user'])!="") {
		header("Location: studentportal.php");
	}
else if(isset($_SESSION['user'])!="") {
		header("Location: lecportal.php");
	}
else if(isset($_SESSION['user'])!="") {
		header("Location: technicianportal.php");
	}
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: admin.php");
		exit;
	}
?>