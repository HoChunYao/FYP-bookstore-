<?php 

session_start();

session_unset();

session_destroy();

echo "<SCRIPT> //not showing me this
		alert('Logged Out !!')
		window.location.replace('index.php');
	</SCRIPT>";
?>