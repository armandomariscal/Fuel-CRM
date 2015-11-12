<?php 
	session_start();
	# Controllers
	include('c/c.controllers.php');
	include('m/m.models.php');
	include('v/v.views.phtml');
	$token = $_GET['v'];
?>
