<?php

// Selfwork PHP 4

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Laura', 'surname' => 'Rossi', 'gender' => 'LGBTQ+'],
    ['name' => 'Giovanni', 'surname' => 'Bianchi', 'gender' => 'M'],
    ['name' => 'Alessandra', 'surname' => 'Verdi', 'gender' => 'Identify as a dog'],
    ['name' => 'Marco', 'surname' => 'Esposito', 'gender' => 'M'],
    ['name' => 'Elena', 'surname' => 'Galli', 'gender' => 'F'],
    ['name' => 'Andrea', 'surname' => 'Ricci', 'gender' => 'M'],
];

foreach ($users as $user) {

    switch ($user['gender']) {
        case 'M':
            $saluto = "Buongiorno Sig.";
            break;
        case 'F':
            $saluto = "Buongiorno Sig.ra";
            break;
        default:
            $saluto = "Buongiorno";
            break;
    }


    echo $saluto . " " . $user['name'] . " " . $user['surname'] . "\n";
}
