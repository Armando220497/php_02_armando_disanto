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

echo "\n\n";



// Selfwork PHP 5

$numbers = [10, 15, 20, 25, 30, 35, 40, 45, 50];

function calcolaMediaNumeriPari($array)
{
    $somma = 0;
    $contatore = 0;

    foreach ($array as $numero) {
        if ($numero % 2 == 0) { // Verifica se il numero è pari
            $somma += $numero;
            $contatore++;
        }
    }

    if ($contatore > 0) {
        return $somma / $contatore;
    } else {
        return 0;
    }
}

$media = calcolaMediaNumeriPari($numbers);
echo "La media dei numeri pari è: " . $media;
