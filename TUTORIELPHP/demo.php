<?php

    $heure = (int)readline('Entrez une heure: ');

    if (($heure >= 9 && $heure <= 12) || ($heure >= 14 && $heure <= 16)) {
        echo 'Le magasin est ouvert.';
    } else {
        echo 'Le magasine st fermé.';
    }
    

/*  $action = (int)readline('Entrez votre action : (1: attaquer, 2: défe,dre, 3: passer son tour)');

    switch ($action) {
        case 1:
            echo 'J\'attaque !';
            break;
        case 2:
            echo 'Je défends !';
            break;
        case 3:
            echo 'Je ne fais rien';
            break;
        default:
            echo 'Commande inconnue.';
            break;
    }
 */
   