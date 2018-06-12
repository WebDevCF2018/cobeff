<?php
	session_start();
	if(isset($_SESSION['username'])){
		echo "Bienvenue ".$_SESSION['username']." !";
		echo "<script>setTimeout(function(){location.replace('../');}, 3000)</script>";
		}else if(isset($_GET['code'])){
			switch($_GET['code']){
				case 403:
					echo "Identifiants incorrects";
					echo "<script>setTimeout(function(){location.replace('../?p=login');}, 3000)</script>";
					break;

				case 'what':
					echo "Une erreur inconnue est survenue";
					echo "<script>setTimeout(function(){location.replace('../?p=login');}, 3000)</script>";
					break;

				default:
					header('Location: ../');
			}

		}else{
			header('Location: ../');
	}
?>
