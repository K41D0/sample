<?php
	session_start();
	unset($_SESSION["id"]);
	unset($_SESSION["login_type"]);
	header("Location:login.php");
?>