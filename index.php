<?php
require_once(__DIR__ . "/variables.php");
require_once(__DIR__ . "/check.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui Est Ce ?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100 bg-dark text-light">
    <div class="container">
        <h1 class="mt-3 mb-5 text-center">Qui Est-Ce ?</h1>

        <!-- On affiche un message si l'utilisateur n'a pas répondu à toutes les questions -->
        <?php if (isset($_SESSION['GAME_ERROR'])) : ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['GAME_ERROR'];
                unset($_SESSION['GAME_ERROR']); ?>
            </div>
        <?php endif; ?>

        <!-- Affichage des images -->
        <div class="row">
            <div class="text-wrap text-center col-9">
                <table class="table">
                    <tbody>
                        <!-- Boucle parcourant le tableau contenant les images se trouvant dans le fichier variables.php afin d'afficher les images dans le tabelau -->
                        <?php foreach ($personnages as $personnage) : ?>
                            <tr>
                                <!-- Les tests suivants permettent d'appliquer le css sur l'image du personnage trouvé par le programme -->
                                <img <?php if (isset($_SESSION["PERSO"])) : ?> <?php if ($_SESSION["PERSO"] == $personnage) : ?> class="border border-danger border-5" <?php unset($_SESSION["PERSO"]); ?> <?php endif; ?> <?php endif; ?> src="Personnages/<?= $personnage . ".png" ?>" alt="Images Personnages">
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Formulaire contennant les questions -->
            <div class="align-self-center text-center col-3">
                <form action="check.php" method="POST">
                    <div class="mb-4">
                        <h2 class="fs-5">1. A-t-il des lunettes ?</h2>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[0]" value="1">
                            <label class="form-check-label" for="lunettes">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[0]" value="0">
                            <label class="form-check-label" for="lunettes">Non</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h2 class="fs-5">2. A-t-il une moustache ?</h2>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[1]" value="1">
                            <label class="form-check-label" for="moustache">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[1]" value="0">
                            <label class="form-check-label" for="moustache">Non</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h2 class="fs-5">3. A-t-il un chapeau ?</h2>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[2]" value="1">
                            <label class="form-check-label" for="chapeau">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[2]" value="0">
                            <label class="form-check-label" for="chapeau">Non</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h2 class="fs-5">4. A-t-il des cheuveux ?</h2>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[3]" value="1">
                            <label class="form-check-label" for="cheuveux">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[3]" value="0">
                            <label class="form-check-label" for="cheuveux">Non</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h2 class="fs-5">5. A-t-il une boucle d'oreille ?</h2>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[4]" value="1">
                            <label class="form-check-label" for="boucle">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[4]" value="0">
                            <label class="form-check-label" for="boucle">Non</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h2 class="fs-5">6. A-t-il une barbe ?</h2>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[5]" value="1">
                            <label class="form-check-label" for="barbe">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[5]" value="0">
                            <label class="form-check-label" for="barbe">Non</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h2 class="fs-5">7. A-t-il un noeud papillon ?</h2>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[6]" value="1">
                            <label class="form-check-label" for="noeud">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="persos[6]" value="0">
                            <label class="form-check-label" for="noeud">Non</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-2 mb-4" name="reponse">Cliquez pour avoir la réponse</button>
                    </div>
            </div>
        </div>
        </form>

        <!-- Boutton permettant de rejouer -->
        <div class="text-center">
            <a class="btn btn-danger btn-lg mt-4 mb-5" role="button" href="index.php">Ciquez pour rejouer</a>
        </div>

        <!-- Permettant d'afficher le message de succés lorsque l'on trouve le personnage de l'utilisateur -->
        <?php if (isset($_SESSION["EXIST"])) : ?>
            <div class="alert alert-success text-center">
                <?php echo $_SESSION["EXIST"];
                unset($_SESSION["EXIST"]); ?>
            </div>
        <?php endif; ?>

        <!-- Permettant d'afficher le message d'erreur lorsque l'utilisateur a menti -->
        <?php if (isset($_SESSION["NOT_EXIST"])) : ?>
            <div class="alert alert-danger text-center">
                <?php echo $_SESSION["NOT_EXIST"];
                unset($_SESSION["NOT_EXIST"]); ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>