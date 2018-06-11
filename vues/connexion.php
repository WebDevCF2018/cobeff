<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/connexion.css" type="text/css">
</head>

<body class="text-center">

<form class="form-signin" name="connect" method="post">
    <img class="mb-4" src="" alt="" width="300px" height="300px">

    <h1 class="h3 mb-3 font-weight-normal">Espace membre</h1>


    <input type="text" name="lelogin" class="form-control" placeholder="Identifiant" required autofocus>


    <input type="password" name="lepwd" id="inputPassword" class="form-control" placeholder="Mot de passe" required>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Valider</button>
    <p class="mt-5 mb-3 text-muted">&copy; COBEFF</p>
</form>
</body>
</html>