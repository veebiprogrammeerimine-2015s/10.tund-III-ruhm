<?php
	require_once("functions.php");
	require_once("InterestsManager.class.php");

	if(!isset($_SESSION["logged_in_user_id"])){
		header("Location: login.php");
		
		// see  katkestab faili edasise lugemise
		exit();
	}
	
	if(isset($_GET["logout"])){
		
		session_destroy();
		
		header("Location: login.php");
	}
	
	//uus instants klassist
	$InterestsManager = new InterestsManager($mysqli, $_SESSION["logged_in_user_id"]);
	
?>

<p>
	Tere, <?=$_SESSION["logged_in_user_email"];?> 
	<a href="?logout=1"> Logi välja <a> 
</p>


