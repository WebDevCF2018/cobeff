<?php
    //Ouverture de connexion
    session_start();

	//Charger base fichier de db
	require "vues/header.php";
	
	// redirection vers le controlleur approprié entre fonction de l'utilisateur
	if(isset($_SESSION['permission'])){
		if($_SESSION['permission'] == 1){
			require "controller/adminController.php";
		}else{
			require "controller/usersController.php";
		}
	}else{
		require "controller/publicController.php";
	}

	require "vues/footer.php";
?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
	<script src="js/ajax.js"></script>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
