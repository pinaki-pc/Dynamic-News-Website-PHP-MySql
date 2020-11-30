<?php
	session_start();
	session_unset();

	header('location:admin_login.php');
?>