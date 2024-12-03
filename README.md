# **Application de gestion de cartes**

## **Description** :

Cette application PHP permet de créer des cartes contenant une question et une réponse, puis de les afficher. 
Elle est conçue en suivant les principes de la programmation orientée objet (POO) et utilise Composer pour la gestion de l'autoloading.

---

## Prérequis
- PHP 7.4 ou une version ultérieure.
- Composer installé sur votre machine.

---

## Installation
1. Clonez ce repository sur votre machine :
   ```bash
   git clone <URL_DU_REPOSITORY>
   cd <NOM_DU_PROJET>

2. Installez les dépendances avec Composer :
    ```bash
    composer install

---

## **Utilisation** :

1. Lancez l'application dans le terminal :
    ```bash
    php index.php

2. Suivez les instructions à l'écran :

        1. Entrez le nombre de cartes que vous souhaitez ajouter.

        2. Fournissez une question et une réponse pour chaque carte.

L'application affichera la liste des cartes créées, avec leurs questions et réponses.

---

## **Exemple d'interaction**

Voici un exemple d'exécution de l'application :

```text
Combien de cartes voulez-vous ajouter ? 2
Entrez une question pour la carte 1 : Quelle est la capitale de la France ?
Entrez une réponse à la question : Paris
Entrez une question pour la carte 2 : Quelle est la capitale de l'Espagne ?
Entrez une réponse à la question : Madrid

Listing des cartes contenues dans la liste :

Infos sur la carte 1 :
Question: Quelle est la capitale de la France ?
Answer: Paris

Infos sur la carte 2 :
Question: Quelle est la capitale de l'Espagne ?
Answer: Madrid
```
---

## **Structure du projet** :

    src/ : Contient les classes PHP (Card et ListCards).
    index.php : Point d'entrée du projet.
    composer.json : Fichier de configuration pour Composer.
    vendor/ : Répertoire généré automatiquement par Composer.

---

## **Fonctionnalités principales** :

    . Ajouter des cartes avec une question et une réponse.
    . Afficher toutes les cartes créées avec leurs informations.
