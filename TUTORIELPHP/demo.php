<?php

// declare(strict_types=1); Ne eprmet pas la conversion implicite des params.

function repondre_oui_non (string $phrase): bool {   
    while (true) {

        $reponse = readline($phrase . "(o/n): ");
        
        if ($reponse === 'o') {
            return true;

        } elseif ($reponse === 'n') {
            return false;
        }
    }
}


function demander_creneau ($phrase = 'Veuillez entrer un creneau') {
    echo $phrase."\n";
    while (true) {
        $ouverture = (int)readline("Heure d'ouverture : ");
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;
        }
    }
    while (true) {
        $fermeture = (int)readline("Heure de fermeture : ");
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
            break;
        }
    }
    return [$ouverture, $fermeture];
        
}

// $resultat = repondre_oui_non("Voulez-vous continuer?");
/* $creneau = demander_creneau();
$creneau2 = demander_creneau("Veuillez entrer votre creneau");

var_dump($creneau, $creneau2); */

// typage des params.
// typage de ce que retrourne la fct.
function demander_creneaux (string $phrase = "Veuillez entrer vos creneaux : "):  array {
    $creneaux = [];
    $continuer = true;

    while ($continuer) {
        $creneaux[] = demander_creneau();
        $continuer = repondre_oui_non('Voulez-bous continuer? ');
    }
    return $creneaux;
}
$creneaux = demander_creneaux ("Entrez vos creneaux");
var_dump($creneaux);


/* 
function demo (string $param) {
    var_dump($param);
}

demo(1.2); */