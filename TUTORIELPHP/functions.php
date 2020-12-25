<?php
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

require_once 'functions_creneaux.php'; // Permet de n'inclure qu'une seule fois le fichier

