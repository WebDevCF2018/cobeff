<?php
	// Toutes les requêtes en ajax sont faites dans ce fichier.
	// Il faut obligatoirement envoyer une variable $_POST['function'] lors du chargement du fichier et lui attribué le numéro de fonction que l'on souhaite utiliser.

	if(isset($_POST['function'])){
		switch($_POST['function']){
			
			// Fonction de connexion: syntaxe -> $.post("chemindecefichier.php", "fonction=1&username=value&password=value", fonction de reCall);
			case 1:
					$response = 200; // Au départ code = 200 = pas d'erreur

					if(isset($_POST['username'])){
						if($_POST['username'] != ""){
							$username = $_POST['username']; // sujet à modification
						}else{
							$response = 2;
						}
					}else{
						$response = 2; // code 2 :Champ(s) innexistant ou vide
					}

					if(isset($_POST['password'])){
						if($_POST['password'] != ""){
							$password = $_POST['password']; // sujet à modification
						}else{
							$response = 2;
						}
					}else{
						$response = 2; // code 2 :Champ(s) innexistant ou vide
					}

					// Si code est toujours 200 alors faire une requête SQL.
					if($response == 200){ 
						$req = $db->query('SELECT username FROM login WHERE username="'.$username.'" and password = "'.$password.'"');

						$req = $req->fetch();
					
					// Sinon envoyé le code d'erreur 0.
					}else{
						echo $response;
						die;
					}

					// Résultat de la requête.
					if($req['username'] != ""){
						$_SESSION['username'] = $req['username'];
						$response = 200; // Correspondance
					}else{
						$response = 403; // Pas de coresspondance
					}
					echo $response;

			default:
				die;
		}
	}else{
		die;
	}
?>