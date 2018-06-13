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

        @media (max-width: 640px){
            #style{
                right: 0!important;
            }

            #connexion input, #connexion button{
                position: static;
                display: block;
            }
        }
    </style>
</head>

<body onload="document.body.style.display = 'block' ">

 <?php
        if(isset($_SESSION['permission'])){
            switch ($_SESSION['permission']){
                case 1:
                     $info = "<p style='position: absolute;top: 8px;left:5px;'>Vous êtes Administrateur</p>";
                    break;

                case 2:
                     $info = "<p style='position: absolute;top: 8px;left:5px;'>Vous êtes Formateur pour";
                    break;
                default:
                    $info = "<p style='position: absolute;top: 8px;left:5px;'>Vous êtes Stagiaire pour ";
                    break;
            }
        }


        if(isset($_SESSION['filiere'])){
            switch ($_SESSION['filiere']){
                case 1:
                    $info .= "Vendeuse Polyvalente</p>";
                    break;

                case 2:
                    $info .= "Cuisine et service en salle</p>";
                    break;

                case 3:
                    $info .= "Auxiliaire de l'enfance</p>";
                    break;

                case 4:
                    $info .= "Service aide au personnes / Aide soignante</p>";
                    break;

                case 5:
                    $info .= "Agent d'entretien en milieu hospitalier</p>";
                    break;

                case 6:
                    $info .= "Préparation au jury du 2e degré</p>";
                    break;

                case 7:
                    $info .= "Complément CESS</p>";
                    break;
            }
            echo $info;
        }
    ?>

<div id="style" style="text-align: right; position: relative; right: 50px; top: 15px">

    <?php 
        if(!isset($_SESSION['permission'])){
    ?>
        <div id="connexion">
        <input type="text" id="username" placeholder="Identifiant">
        <input type="password" id="password" placeholder="Mot de passe">
        <button onclick="connexion()">Valider</button>
        </div>
    <?php
        }else{
    ?>
    	<?php if($_SESSION['permission'] == 1){ ?> <a href="./?p=admin">Administration</a> | <?php } ?>
        <a href="./?p=membres">Espace membres</a> | 
        <a href="vues/logout.php">Se déconnecter</a>
    <?php
        }
    ?>

</div>
<br>

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
            </div>
        </nav>
    </div>
</div>
</body>
