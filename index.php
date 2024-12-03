<?php

require 'vendor/autoload.php';

use Gomez\PooTp\Card;
use Gomez\PooTp\ListCards;

// Créer un tableau vide pour stocker les cartes
$nbCards = [];

// Demander à l'utilisateur combien de cartes il veut ajouter
do {
    $input = readline("Combien de cartes voulez-vous ajouter ? ");
    $cardCount = filter_var($input, FILTER_VALIDATE_INT);
    
    if ($cardCount === false || $cardCount <= 0) {
        echo "Erreur : Veuillez entrer un entier positif.\n";
    }
} while ($cardCount === false || $cardCount <= 0);

$listCards = new ListCards();

// Demander les questions et réponses pour chaque carte
for ($i = 1; $i <= $cardCount; $i++) {
    do {
        $question = trim(readline("Entrez une question pour la carte $i: "));
        if (empty($question)) {
            echo "Erreur : La question ne peut pas être vide.\n";
        }
    } while (empty($question));

    do {
        $answer = trim(readline("Entrez une réponse à la question : "));
        if (empty($answer)) {
            echo "Erreur : La réponse ne peut pas être vide.\n";
        }
    } while (empty($answer));

    $card = new Card($question, $answer);
    $listCards->addCard($card);
    
    // Ajouter la carte au tableau $nbCards
    $nbCards[] = $card;
}

// Afficher les cartes
echo "\nListing des cartes contenues dans la liste :\n\n";
$listCards->printCardsInfo();

// require 'vendor/autoload.php';

// use Gomez\PooTp\Card;
// use Gomez\PooTp\ListCards;

// $listCards = new ListCards();

// do {
//     echo 'Combien de cartes voulez-vous ajouter ? ';
//     $input = trim(fgets(STDIN));
//     if (!ctype_digit($input) || (int)$input <= 0) {
//         // Message d'erreur si l'entrée n'est pas un entier positif
//         echo "Erreur : Veuillez entrer un nombre entier positif.\n";
//     }
// } while (!ctype_digit($input) || (int)$input <=0); // Condition pour continuer la boucle tant que l'entrée est invalide

// $nbCardsCount = (int)$input; // Conversion de l'entrée en entier
// $nbCards = []; // Tableau pour stocker les cartes

// for ($i = 1; $i <= $nbCardsCount; $i++) {
//     // Validation pour la question
//     do {
//         echo "Entrez une question pour la carte $i : ";
//         $question = trim(fgets(STDIN));
//         if (empty($question)) {
//             echo "Erreur : La question ne peut pas être vide. Veuillez réessayer.\n";
//         }
//     } while (empty($question));

//     // Validation pour la réponse
//     do {
//         echo "Entrez une réponse à la question : ";
//         $answer = trim(fgets(STDIN));
//         if (empty($answer)) {
//             echo "Erreur : La réponse ne peut pas être vide. Veuillez réessayer.\n";
//         }
//     } while (empty($answer));

//     // Création de la carte et ajout à la liste et au tableau
//     $card = new Card($question, $answer);
//     $listCards->addCard($card);
//     $nbCards[] = $card;
// }

// //Affichage des cartes dans la liste
// echo "\nListing des cartes contenues dans la liste : \n\n";
// $listCards->printCardsInfo();
