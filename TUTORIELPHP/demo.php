<?php

/* $mot = readline("Veuillez entre un mot: ");
$mot = strtolower($mot);
$reverse = strrev($mot);

if ($mot === $reverse) {
    echo "Ce mot est un palindrome.";
} else {
    echo "Ce mot n'est pas un palindrome.";
}
 */

/* $notes = [10, 18, 19];
$notes2 &= $notes; // Ici on passe une référence, la modification d'une variable implique la modif de la seconde variable. (Fct mutable)
array_push($notes, 16, 17); // Cette fct modifie la variable $notes, Présence du & dans la description php.net 
$notesReversed = array_reverse($notes); // Cette fct ne modifie pas la valeur de sa variable, d'où la nécessité de la stocker dans une variable. (Fct imutable)
print_r($notes);
$somme = array_sum($notes);
$nbreElements = count($notes);
$moyenne = round($somme / $nbreElements);
echo "Votre moyenne est de " . $moyenne .".";

 */

/* while (true) {
    $mot = readline("Entrez votre mot : \n");
    if ($mot === '') {
        exit('Fin du programme'); // La fct. exit() permet d'arrêter le script.
    }
    $reverse = strtolower(strrev($mot));
    if (strtolower($mot) == $reverse) {
        echo "Ce mot est un palindrome \n";
    } else {
        echo "Ce mot n'est pas un palindrome \n";
    }
}
 */

$insultes = ['con', 'merde'];
$asterisque = [];
foreach ($insultes as $insulte) {

    $premiereLettre = substr($insulte, 0, 1);
    $asterisque[] = $premiereLettre . str_repeat('*', strlen($insulte) - 1);
    
}

$phrase = readline("Entrez votre phrase : \n");
$phrase = strtolower($phrase);
$phrase = str_replace($insultes, $asterisque, $phrase);

/* foreach ($insultes as $insulte) {
    $taille = strlen($insulte);
    $replace = str_repeat('*', $taille);
    $phrase = str_replace($insulte, $replace, $phrase);
}
*/




echo $phrase;
