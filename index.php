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
