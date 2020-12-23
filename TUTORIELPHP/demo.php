<?php

    // $eleve = [
    //     'nom' => 'Doe',
    //     'prenom' => 'Marc',
    //     'notes' => [20, 18, 9, 15]
    // ];
    // $eleve['prenom'] = 'Jean';
    // $eleve['notes'][] = 16;
    // echo $eleve['prenom'] . ' ' . $eleve['nom'];

    // $eleve[] = 'CE2-1';

    // print_r($eleve);

    $classe = [
        [
            'nom' => 'Doe',
            'prenom' => 'Marc',
            'notes' => [16, 39, 20]
        ],
        [
            'nom' => 'Dartois',
            'prenom' => 'Frank',
            'notes' => [12, 9, 14]
        ]
    ];

    echo $classe[1]['notes'][1];

