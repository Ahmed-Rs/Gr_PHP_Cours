<?php

// $chiffre = null;

/* while ($chiffre !== 10) {
    $chiffre = (int)readline('Entrez une valeur: ');
    // break; Nous fait sortir de la boucle même si la conditionn'est pas remplie
}

echo 'Bravo vous avez gagné !'; */

// for ($i = 0; $i < 10; $i +=2) { 
//     echo "- $i \n";
// }

// for ($i=0; $i < 3; $i++) { 
//     echo '- ' . $notes[$i]. "\n";
// }

/*  $notes = [10, 15, 19];
$eleves = [
    'CM-2' => 'Jean',
    '6e' => 'Fred'
];

foreach ($notes as $note) {
    echo '- ' . $note . "\n";
}

foreach ($eleves as $classe => $eleve) {
    echo "$eleve est en classe de $classe \n";
} */

/*     EXERCICE 
$eleves = [
    'CM2' => ['Jean', 'Francois', 'Mathilde'],
    '5e'  => ['Brigite', 'Andrea']
];

foreach ($eleves as $classe => $listeEleves) {

    echo "La classe $classe: \n";

    foreach ($listeEleves as $nomEleve) {
        echo "- $nomEleve \n";
    }
    echo "\n";
} */
/* 
$requete = null;
$notes = [];

while (true) {
    $requete = readline('Entrez une note ou tapez fin pour finaliser: ');
    if ($requete === 'fin') {
        break;
    } else {
        $notes[] = (int)$requete;
    }
}

echo "Les notes des élèves sont: \n\n";
foreach ($notes as $note) {
    echo "- $note \n";
} */


$horaires = [];

while (true) {

    $heureOuvert = (int)readline('Veuillez entrer une heure d\'ouverture du magasin: ');
    $heureFerme = (int)readline('Veuillez entrer une heure de fermeture du magasin: ');

    if ($heureOuvert < $heureFerme) {

        $horaires[] = [$heureOuvert, $heureFerme];

        $confirmation = readline('Souhaitez-vous ajouter un creneaux ? (o/n) :');

        if ($confirmation == 'n' ) {
            break;

        } elseif ($confirmation == 'o') {
            
        }
    
    } else {
        echo "Votre heure de fermeture n'est pas valide veuillez ressaisir les horaires. \n";
    }

}

// echo "Votre magasin sera ouvert de ";
// foreach ($horaires as $k => $horaire) {
//     if ($k > 0) {
//         echo " et de ";
//     }
//     echo " {$horaire[0]}h à {$horaire[1]}h";
// }


$cond = false;
while ($cond == false) {

    foreach ($horaires as $horaire) {

        $heureClient = (int)readline('Veuillez saisir une heure à laquelle vous souhaitez effectuer vos achats: ');

        if ($heureClient >= $horaire[0] && $heureClient <= $horaire[1]) {
            echo "Notre magasin sera ouvert, vous y serez le bienvenue !";
            $cond = true;

        } else {
            echo "Notre magasin sera fermé, veuillez choisir une autre heure. \n"; 

        }
    }
}