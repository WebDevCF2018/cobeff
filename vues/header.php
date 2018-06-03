<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Cobeff</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            display: none;
        }
    </style>
</head>

<body onload="document.body.style.display = 'block' ">
<div class="row">
    <div class="col-lg-12">
        <nav class="navbar">
                        
            <div id="tmNavbar">
                <div class="nav navbar-nav tm-nav">
                                
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                        <div id="nav-accueil" class="nav-item">
                            <a class="nav-link" href="./">Accueil</a>
                        </div>
                        <div id="nav-about" class="nav-item">
                            <a class="nav-link" href="./?p=about">Présentations</a>
                        </div>    
                    </div>
                                
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                        <div id="nav-formations" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                            <a class="nav-link" href="./?p=formations">Formations</a>
                        </div>
                        <div id="nav-actualités" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                            <a class="nav-link" href="./?p=actualités">Actualités</a>
                        </div>    
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                        <div id="nav-contact" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                            <a class="nav-link" href="./?p=contact">Contact</a>
                        </div>
                        <div id="nav-contact" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                                <a class="nav-link" href="./?p=restaurant">Restaurant</a>
                        </div>
                        </div>
                    </div>
                <?php
                // si il n'existe pas de variable de connexion
                if (!isset($_SESSION["clef"])) {

                // lien pour se connecter
                echo '<li style="list-style: none"><a class="btn btn-primary" href="?log">Connexion</a></li>';

                // sinon il existe une connexion
                } else {

                // lien pour se déconnecter
                echo '<li style="list-style: none"><a class="btn btn-primary" href="?logout">Déconnexion</a></li>';
                }
                ?>

                <ul>
                    <?php
                    if(!isset($_SESSION['permission'])){
                    }else {
                        // toutes personnes connectées à accès à la page 1
                        ?>
                        <li><a href="accueil.php"></a></li>
                        <?php
                        // seul l'admin a accès à ces pages
                        if ($_SESSION['permission'] == 0){
                            ?>
                            <li><a href="?admin">Espace membre</a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
                </div>    
            </div>                    
        </nav>     
    </div>       
</div>
