# Pokédex

Projet à faire en groupe de 2 à 3 personnes

## Fonctionnalités

* Liste des pokémons (id, nom, type, image)
* Détail d'un pokémon (id, nom, type, image, liste des attaques)
* Ajouter/Modifier/Supprimer pokemon
* Ajouter/Modifier/Supprimer des attaques
* Connexion/Inscription

## Base de données

* types (id, name)
* pokemons (id, name, type_id, image)
* moves (id, name, power, accuracy, type_id)
* move_pokemon (move_id, pokemon_id)

## Instructions

### Mise en place du projet

Personne A : 
1. Mettre en place Laravel avec composer
2. Initialiser le dépôt git dans le projet (avec git init)
3. Créer un premier commit
4. Créer le dépôt Github
5. Envoyer les fichiers de base de Laravel sur le dépôt Github
6. Ajouter le ou les collaborateurs sur le dépôt Github

Personnes B (et C) :
1. Accepter l'invitation au dépôt Github
2. Cloner le projet depuis le dépôt
3. Installer les dépendances avec composer
4. Créer et configurer le fichier .env

Tout le monde :
1. Créer une base de données {nomutilisateur}_pokedex
2. Créer (s'il n'existe pas encore) le fichier .env et le configurer

### Créer la base de données avec les migrations