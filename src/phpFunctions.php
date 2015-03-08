<?php
//Enable error detection
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');

//Validate Access via POST REQUEST ONLY
$method = $_SERVER['REQUEST_METHOD'];
if(strtolower($method) != 'post') {
	echo "You may not access this page directly. Please go back to the 
	<a href=http://localhost/myhost-exemple/Final%20Project/src/>Login</a> page";
}


//Register New User
if(isset($_GET['action']) && $_GET['action'] == 'register') {
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];	
	$dob = $_POST['dob'];
}

?>