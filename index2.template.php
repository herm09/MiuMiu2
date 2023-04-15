<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiuMiu</title>
    <link rel="stylesheet" href="style_test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
    <body style="background-color: rgb(27, 26, 26);">
        <!-- <header class="banner"> -->
        <?php require_once 'header.template.php'; ?>
            <!-- <nav class="links"> -->
                <!-- <img src="Images_test/logo.png" alt="Logo" class="imglogo">
                <img src="Images_test/icon_home.png" alt="Home" class="imglink">
                <img src="Images_test/icon_search.png" alt="Search" class="imglink">
                <img src="Images_test/icon_notifs.png" alt="Notifications" class="imglink">
                <img src="Images_test/icon_messages.png" alt="Messages" class="imglink">
                <img src="Images_test/icon_favoris.png" alt="Favorites" class="imglink">
                <img src="Images_test/icon_listes.png" alt="Lists" class="imglink">
                <img src="Images_test/icon_profil.png" alt="Profil" class="imglink">
                <img src="Images_test/icon_more.png" alt="More" class="imglink">
                <img src="Images_test/pp.png" alt="Photo de profil" class="rond">
            </nav> -->
        <!-- </header> -->
            <div class="mainpage">
                <div class="tweets"> <!-- division gauche avec les nv tweets et les tweets deja postes -->
                    <div class="home"> <!-- 1ere division des tweets -->
                        <h3 class="accueil">Home</h3>
                        <div class="HomeButtons">
                            <p class="page">For you</p>
                            <p class="autre">Following</p>
                        </div>
                    </div>
                    <div class="newtweet"> <!-- division pour les nouveaux posts -->
                        <img src="Images_test/pp.png" alt="Photo de profil" class="cercle">
                        <nav class="new">
                            <p class="question">Nouveau post</p>
                            <div>
                                <img src="Images_test/icon_images.png" alt="Images" class="post">
                                <img src="Images_test/icon_gif.png" alt="Gif" class="post">
                                <img src="Images_test/icon_poll.png" alt="Poll" class="post">
                                <img src="Images_test/icon_emoji.png" alt="Emojis" class="post">
                                <img src="Images_test/icon_schedule.png" alt="Schedule" class="post">
                                <img src="Images_test/icon_position.png" alt="Position" class="post">
                            </div>
                        </nav>
                        <div class="BoutonDiv">
                            <button>Post</button>
                        </div>
                    </div>
                    <div class="recenttweet"> <!-- division des tweets deja postés -->
                    <h2 class="articles">Articles</h2>
                    <br>
                    <form action="" method="get">
                        <input type="hidden" name="form" value="formulaire_recherche">
                        <label for="recherche" class="Rechercher">Rechercher :</label>
                        <input type="text" name="recherche" id="recherche">
                        <br>
                    </form>
                        <div class="tweet1">
                            <div>
                                <img src="Images_test/pp_person1.png"alt="Photo de profil" class="person1">
                            </div>
                            <div>
                                <h6 class="pseudo1">Siscoups</h6>
                                <p class="resum1">Je viens de me réveiller ... je n'aurai jamais dû</p>
                            </div>
                            <nav>
                                <img src="Images_test/icon_bin.png" alt="Poubelle" class="Poubelle">
                                <img src="Images_test/icon_commentaire.png" alt="Commentaires" class="post1">
                                <img src="Images_test/icon_rt.png" alt="Repost" class="post1">
                                <img src="Images_test/icon_like.png" alt="Like" class="post1">
                                <img src="Images_test/icon_share.png" alt="Partager" class="post1">
                                <img src="Images_test/icon_vues.png" alt="Vues" class="post1">
                                <p class="opacity" style="text-align: center;">Vues : <br> 60% de femmes <br> 40% d'hommes</p>
                            </nav>
                        </div>
                        <div class="tweet2">
                            <div>
                                <img src="Images_test/pp_person1.png"alt="Photo de profil" class="person2">
                            </div>
                            <div>
                                <h6 class="pseudo2">Actu Mangas</h6>
                                <p class="resum2">Une animation époustouflante !</p>
                                <video src="Images_test/demon_slayer.mp4" alt="Image" class="img_resum2" controls>
                            </div>
                            <nav>
                                <img src="Images_test/icon_bin.png" alt="Poubelle" class="Poubelle">
                                <img src="Images_test/icon_commentaire.png" alt="Commentaires" class="post2">
                                <img src="Images_test/icon_rt.png" alt="Repost" class="post2">
                                <img src="Images_test/icon_like.png" alt="Like" class="post2">
                                <img src="Images_test/icon_share.png" alt="Partager" class="post2">
                                <img src="Images_test/icon_vues.png" alt="Vues" class="post2">
                                <p class="opacity" style="text-align: center;">Vues : <br> 60% de femmes <br> 40% d'hommes</p>
                            </nav>
                        </div>
                        <div class="tweet3">
                            <div>
                                <img src="Images_test/pp_person2.png"alt="Photo de profil" class="person3">
                            </div>

                            <div>
                                <h6 class="pseudo3">Ana</h6>
                                <p class="resum3">What if ...</p>
                                <img src="Images_test/resum2.png" alt="Image" class="img_resum2">
                            </div>
                            <nav style="width: 30%;">
                                <img src="Images_test/icon_bin.png" alt="Poubelle" class="Poubelle">
                                <img src="Images_test/icon_commentaire.png" alt="Commentaires" class="post3">
                                <img src="Images_test/icon_rt.png" alt="Repost" class="post3">
                                <img src="Images_test/icon_like.png" alt="Like" class="post3">
                                <img src="Images_test/icon_share.png" alt="Partager" class="post3">
                                <img src="Images_test/icon_vues.png" alt="Vues" class="post3">
                                <p class="opacity" style="text-align: center;">Vues : <br> 60% de femmes <br> 40% d'hommes</p>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="suggestions"> <!-- division droite recherche, tags, suggestions -->
                    <h3 class="suggest">Suggestions</h3>
                    <a href class="recherche">Rechercher</a>
                    <div class="hashtags">
                        <div class="tag" style="display: flex;">
                            <button type="button" class="btn btn-primary">football</button>
                            <button type="button" class="btn btn-secondary">Santé</button>
                            <button type="button" class="btn btn-success">Jeux-vidéos</button>
                            <button type="button" class="btn btn-danger">Actualités</button>
                            <button type="button" class="btn btn-warning">Nouvelles technologies</button>
                            <button type="button" class="btn btn-dark">politique</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Modal">
                <form action="" method="POST">
                    <input type="hidden" name="form" value="formulaire_ajout_article">
                    <label for="titre">Titre :</label>
                    <input type="text" name="titre" id="titre" required>
                    <br>
                    <label for="contenu">Contenu :</label>
                    <br>
                    <textarea name="contenu" id="contenu" cols="30" rows="10" required></textarea>
                    <br>
                    <input type="submit" value="Envoyer"> 
                </form>

                <?php
                foreach($article as $article) {
                    echo "<h3>" . $article["titre"] . "</h3>";
                    echo "<p>" . $article["contenu"] . "</p>";
                    echo "<p>Article écrit le" . date("d/m/Y", strtotime($article['date'])) . " à " . date("H:i", strtotime($article['date'])); 
                ?>
                    <form action="delete.php" method="POST"></form>
                        <input type="hidden" name="form" value="formulaire_suppression_article">
                        <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                        <input type="submit" value="Supprimer">
                    </form>

                <?php if (isset($_POST['form']) && $_POST['form'] === "formulaire_suppression_article") {
                if (!empty($_POST['article_id'])) {
                    $data = [
                        "article_id" => $_POST['article_id'],
                    ];

                    $request_delete = $database->prepare("DELETE FROM article WHERE id = :article_id");
                    $article_deleted = $request_delete->execute($data);
                    }
                }
            }
                ?>
                    <input type="text">
                    <button type="submit">Envoyer</button>
                    <diV style="display: flex;">
                        <div style="display: flex;flex-direction: column;width: 10%;font-size: 10px;">
                            <p style="align-self: center;">football</p>
                            <input type="checkbox" name="football" id="" wfd-id="id1">
                        </div>
                        <div style="display: flex;flex-direction: column;width: 10%;font-size: 10px;">
                            <p style="align-self: center;">Santé</p>
                            <input type="checkbox" name="football" id="" wfd-id="id1">
                        </div>
                        <div style="display: flex;flex-direction: column;width: 10%;font-size: 10px;">
                            <p style="align-self: center;">Jeux-vidéos</p>
                            <input type="checkbox" name="football" id="" wfd-id="id1">
                        </div>
                        <div style="display: flex;flex-direction: column;width: 10%;font-size: 10px;">
                            <p style="align-self: center;">Actualités</p>
                            <input type="checkbox" name="football" id="" wfd-id="id1">
                        </div>
                        <div style="display: flex;flex-direction: column;width: 10%;font-size: 10px;">
                            <p style="align-self: center;">Nouvelles technologies</p>
                            <input type="checkbox" name="football" id="" wfd-id="id1">
                        </div>
                        <div style="display: flex;flex-direction: column;width: 10%;font-size: 10px;">
                            <p style="align-self: center;">Politique</p>
                            <input type="checkbox" name="football" id="" wfd-id="id1">
                        </div>
                    </diV>
                </form>
                <button class="close">x</button>
            </div>
            <script src="main.js"></script>
    </body>
</html>