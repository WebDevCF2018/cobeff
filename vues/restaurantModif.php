<div class="container-fluid">

        <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-white">Accueil</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">​
                        Nous voilà repartis pour une année de formation cuisine.
                        A cet effet, n'hésitez pas à venir nous rejoindre pour venir déguster les plats préparés par nos stagiaires sous les ordres avisés de nos deux chefs.Nouveauté de cette année: N'hésitez pas à nous suivre sur notre compte Facebook en cliquant sur le logo ci dessous</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nos menus</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <?php
                foreach ($listeMenu as $item){
                ?>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto"><img src="./img/icon/update.png" height="50" width="50">
                        <h3 class="mb-3"><?= $item["date"];?></h3>
                        <p class="text-muted mb-0"><?=$item["descritpion"]?></p>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Nos tarifs!</h2>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <h3 class="mb-3">Mercredi 30 juin</h3>
                    <p class="text-muted mb-0">​
                        Menu du jour
                        (Potage ou Entrée + Plat +Dessert)
                        Potage ou Entrée
                        Grande Entrée
                        Plat
                        Suggestion
                        Supplément légumes
                        Dessert
                        Soft (33cl.)
                        Eau plate (50cl.)
                        Vin - le verre
                        Vin - 1/4
                        Vin - 1/2
                        Vin - la bouteille
                        Café/Thé
                        10,00€
                        2,50€
                        5,00€
                        6,50€
                        6,50€
                        1,00€
                        2,00€
                        1,20€
                        1,20€
                        1,80€
                        3,50€
                        7,50€
                        10,00€
                        1,20€</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Horaires et accés</h2>
                    <hr class="my-4">
                    <p class="mb-5">Les heures d'ouverture
                        Service assuré de 12h à 13h45.
                        Adresse:
                        Rue Philomène 37
                        1030 Bruxelles.
                        Bus 65 et 66, tram 25 arrêt "Coteaux".
                        Bus 59 arrêt "Geefs".</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                    <p></p>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                    <p>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
