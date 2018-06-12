<?php
	session_start();
	if(isset($_SESSION['username'])){
		echo "à bientôt ".$_SESSION['username']." !";
		session_destroy();
		echo "<script>setTimeout(function(){location.replace('../');}, 3000)</script>";
	}else{
		echo "<script>location.replace('../')</script>";
	}

?>