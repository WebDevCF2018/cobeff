<?php
$Restaurant = new RestaurantManager($db);
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
                $recup = $Restaurant->listMenu();

                if($recup){
                    foreach ($recup as $item){
                        $listView[]=new Restaurant($item);
                    }
                }else{
                    $listView="pas de menu";
                }
				require "vues/restaurant.php";
				break;

			case "actualites":
				require "vues/actualites.php";
				break;

			case "presentations":
				require "vues/présentations.php";
				break;

			case "about":
				require "vues/about.php";
				break;

			case"modifMenu":
                $recupModif = $Restaurant->listMenu();

                if($recupModif){
                    foreach ($recupModif as $item){
                        $listView[]=new Restaurant($item);
                    }
                }else{
                    $listView="pas de menu";
                }

                if (isset($_GET['update']) && ctype_digit($_GET['update'])) {

                    $idMenu = (int) $_GET['update'];

                    if (empty($_POST)) {

                        $recup = $Restaurant->oneMenu($idMenu);
                        if ($recup) {
                            $recup2 = new Restaurant($recup);
                        }

                        require_once "vues/restaurantModif.php";

                    } else {

                        $update = new Restaurant($_POST);
                        $change = $Restaurant->updateMenu($update, $idMenu);
                        if ($change) {
                            header("Location: restaurantModif.php");
                        } else {

                        }
                    }
                }
                require_once "vues/restaurantModif.php";
			break;


			default:
				require "vues/404.php";
				break;
		}
	}else{
		require "vues/accueil.php";
	}
?>
