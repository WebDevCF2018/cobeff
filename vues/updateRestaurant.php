<body>
<main role="main">
    <a href="./">retour</a>
    <div class="jumbotron">
        <div class="container">
            <h1>Administration - Modifier </h1>
            <a href="?admin">Retour à l'administration des articles</a>
        </div>
    </div>
    <div class="container">
        <h2>Modifier votre article</h2>
        <form name="fff" method="post" action="">

            <input type="hidden" name="idutil" value="<?=$_SESSION['idUtilisateur']?>">
            <input type="hidden" name="idnews" value="<?=$recup['idArticle']?>">

            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input name="inserTitre" type="text" id="exampleInputEmail1" class="form-control" placeholder="Votre titre" value="<?=$recup['titre']?>"  required>
            </div>
            <div class="form-group">
                <label class="form-check-label">Votre article</label>
                <textarea name="text" class="form-control" placeholder="Votre article" required><?=$recup['Contenue']?></textarea>
            </div>
            <?php
            // tableau contenant toutes les id des catégories dans lesquelles se trouve la news
            $categ_before_update = explode(",",$recup['categname']);
            // tant qu'on a des catégories (toutes!)
            foreach ($menu AS $item) {
                // si la catégorie listée est cochée pour la news
                if(in_array($item['idCategorie'],$categ_before_update)){
                    // on coche la checkbox
                    $check = " checked ";
                }else{
                    // sinon on la coche pas
                    $check= "";
                }
                ?>
                <div class="form-check form-check-inline">
                    <input name="catid[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" <?=$check?> value="<?=$item['idCategorie']?>">
                    <label class="form-check-label" for="inlineCheckbox1"><?=$item['Nom']?> </label>
                </div>
                <?php
            }
            ?>
            <br>

            <?php
            if(isset($erreur)) {
                ?>
                <br><div class="alert-danger"><?=$erreur?></div><br>

                <?php
            }
            //var_dump($_POST);
            ?>
            <br><button type="submit" class="btn btn-primary">Modifier</button>
        </form></div>
    </div>
</main>

</body>
</html>
