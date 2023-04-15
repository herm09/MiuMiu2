<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_test.css">
  <title>MiuMiu</title>
</head>
<body>
  <?php require_once 'header2.template.php'; ?>
  <main>
    <h1 class="Title1">Inscription :</h1>
    <p class="Title2">Formulaire</p>
    <form action="index2.template.php" method="GET">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <form class="inscription">
            <p><span class="error">* Champs requis</span></p>
            <p class="infos">Nom :</p>
            <div class="require">
                <input type="text" name="nom" id="nom" required>
                <span class="error"> * </span>
            </div>

            <p class="infos">Prénom :</p>
            <div class="require">
                <input type="text" name="nom" id="nom" required>
                <span class="error"> * </span>
            </div>

            <p class="infos">Pseudo :</p>
            <div class="require">
                <input type="text" name="nom" id="nom" required>
                <span class="error"> * </span>
            </div>

            <p class="infos">N° de téléphone :</p>
            <div class="require">
            <input class="form-control" type="tel" id="tel" required>
                <span class="error"> * </span>
            </div>

            <p class="infos">E-mail :</p>
            <div class="require">
                <input type="text" name="mail" id="mail" required>
                <span class="error"> * </span>
            </div>

            <p class="infos">Date de naissance :</p>
            <div class="form-group">
                <label class="birthdate" for="date"></label>
                <input class="form-control" type="date" id="date" >
                <span class="error"> * </span>
            </div>

            <p class="infos">Mot de passe :</p>
            <div class="require">
                <input type="password" name="pass" id="pass" required>
                <span class="error"> * </span>
            </div>

            <br><br>

            <input class="btn btn-success w-100" href="index3.html"  type="submit" value="créer mon compte">
            <imput class="btn btn-success w-100"><a href="index3.html">Login</a>
        </form>
    </form>

    <br>
    <?php if (isset($_GET['prenom']) && isset($_GET['message'])) : ?>
    <h2>Données :</h2>
    <?= "Nom : $nom" ?>
    <br>
    <?= "Prénom : $prenom" ?>
    <br>
    <?= "Mot de passe : $pass" ?>
    <?php endif; ?>
    <br>

  </main>

</body>
</html>