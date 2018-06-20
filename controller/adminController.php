<?php
	if(isset($_GET['p'])){
		switch ($_GET['p']){

			case "admin":
				require "vues/admin.php";
				break;

			case "membres":
				require "vues/membres.php";
				break;

			case "formations":
				require "vues/formations.php";
				break;

			case "contact":
				require "vues/contact.php";
				break;

			case "restaurant":
                //update
			if (isset($_GET['modifMenu'])) {
                // formulaire non envoyé
                if (empty($_POST)) {
                    // on récupère toutes les catégories
                    $menu= categorie($mysqli);
                    // on récupère l'article
                    $recup = vueArt($mysqli, $update, false);
                    // on prend l'iduser du user dans la db et on le compare avec l'iduser de session, et si ils sont différents, on déconnecte l'utilisateur
                    if ($recup['idUtilisateur'] != $_SESSION['idUtilisateur']) header("Location: ?logout");
                    // appel de la vue
                    require_once "Vues/UpdateAdmin.php";
                } else {
                    // traitement de l'envoi
                    if (updateArt($mysqli, $update, $_POST)) {
                        // redirection sur l'accueil
                        header("Location: ./");
                    } else {
                        // création de la faute
                        $erreur = "Erreur lors de la modification de votre article";
                        $menu = categorie($mysqli);
                        $recup = vueArt($mysqli, $update, false);
                        // appel de la vue
                        require_once "Vues/UpdateAdmin.php";
                    }
                }
        }
				require "vues/restaurant.php";
				break;

			case "actualités":
				require "vues/actualites.php";
				break;

			case "présentations":
				require "vues/présentations.php";
				break;

			case "about":
				require "vues/about.php";
				break;

			default:
				require "vues/404.php";
				break;
		}
	}else{
		require "vues/accueil.php";
	}
?>
