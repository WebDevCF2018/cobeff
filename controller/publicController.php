<?php
	if(isset($_GET['p'])){
		switch ($_GET['p']) {

			case "formations":
				require "vues/formations.php";
				break;

			case "contact":
				require "vues/contact.php";
				break;

			case "restaurant":
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
