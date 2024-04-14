<?php 
session_start();
require_once(__DIR__ . "/variables.php");

// On vérifie si une réponse à été demandé
if (isset($_POST["reponse"])) {
    // On extrait les données du formulaire
    extract($_POST, EXTR_SKIP);
    // On vérifie si toutes les questions ont été répondu
    if (isset($persos) && is_array($persos) && count($persos) == 7) {
        // On récupére les bits séparés composant le personnage et on les transforme en une chaîne de caractères pour pouvoir la comparer avec les chaînes de caractères dans le tableau personnages contenu dans le fichier variables.php
        $perso = implode($persos);

        // On veut savoir si les données récupérer sont dans le tableau contenant les différents personnages disponibles
        $persoInArray = in_array($perso, $personnages);

        // Les deux variables suivantes vont permettre de savoir si le personnage entré par l'utilisateur existe ou non 
        $exist = false;
        $doesNotExist = false;

        // On parcour le tableau de personnages et on vérifie avec les variables précédentes si le personnage de l'utilisateur s'y trouve 
        foreach ($personnages as $personnage) {
            if ($persoInArray) {
                $exist = true;
            } else {
                $doesNotExist = true;
            }
        }

        // Dans le cas où le personnage n'existe pas on met en place le système de vérification d'erreurs ou mensonges
        if ($doesNotExist) {
            // Les tableau suivant parcours le personnage de l'utilisateur d'après la méthode de vérification pour chaque syndromes
            $s1 = [$persos[0], $persos[2], $persos[4], $persos[6]];
            $s2 = [$persos[1], $persos[2], $persos[4], $persos[5]];
            $s3 = [$persos[3], $persos[4], $persos[5], $persos[6]];

            // On vérifie alors si les différents syndromes sont égales à 1 ou 0
            $S1 = array_sum($s1) %2;
            $S2 = array_sum($s2) %2;
            $S3 = array_sum($s3) %2;

            // On stocke les syndromes dans le tableau suivant
            $syndrome = [$S1, $S2, $S3];

            //  Nous allons vérifier si le tableau syndrome correspond à une valeur dans le tableau check initialiser dans le fichier variables.php 
            $error = false;
            if (in_array($syndrome, $checks)) {
                $error = true;
                // On récupére l'index de la correspondance avec le tableau checks afin de connaitre la position de l'erreur  
                $key = array_search($syndrome, $checks);
            }
            // On affiche le résultat
            if ($error) {
                // Les tests suivants permettent de corriger l'erreur trouvé 
                if ($persos[$key] == 1) {
                    $persos[$key] = 0;
                    $persos = implode($persos);
                } else {
                    $persos[$key] = 1;
                    $persos = implode($persos);
                }
                // Message dans le cas où le joueur a menti
                $_SESSION["NOT_EXIST"] = "Vous avez menti à la question ". $key + 1 . ". Vous avez choisi le personnage encadré en rouge.";
                // On stocke le personnage choisi dans une variable de session
                $_SESSION["PERSO"] = $persos;
                header("location: index.php");
                exit();
            } 
        } elseif ($exist) {
            // Message dans le cas où le joueur n'a pas menti 
            $_SESSION["EXIST"] = "Vous n'avez pas menti. Vous avez choisi le personnage encadré en rouge";
            // On stocke le personnage choisi dans une variable de session
            $_SESSION["PERSO"] = $perso;
            header("location: index.php");
            exit();
        }
    } else {
        // Message dans le cas où le joueur n'a pas répondu a toutes les questions
        $_SESSION['GAME_ERROR'] = "Vous n'avez pas répondu à toutes les questions"; 
        header("location: index.php");
        exit();
    }
} 
