<?php
session_start();
include 'class/Rating.php';
$rating = new Rating();
if(!empty($_POST['action']) && $_POST['action'] == 'saveRating' 
	&& !empty($_SESSION["user_id"]) 
	&& !empty($_POST['rating']) 
	&& !empty($_POST['vetgroomid'])) {
		$userID = $_SESSION["user_id"];	
		$rating->saveRating($_POST, $userID);	
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);		
}
if(!empty($_GET['action']) && $_GET['action'] == 'logout') {
	session_unset();
	session_destroy();
	header("Location:index.php");
}
?>