# Types de tests


## Grandes lignes

On prépare le test avant, on code après

## Tests unitaires

Pas de grans système,
## Tests des menus

- Afficher
  - Photos
  - Nom
  - Prix
- Liens
  - Que les liens fonctionnent
  - Les filtres
    - Prix max
Est-ce que les résultats ont effectivement 20$?
Est-ce que les titre sont vraiment en tirés ordre alphabétique


## TDD (Test Driven Development)

À toute les fois qu'il y a un push, les tests doivent être valide
Ça existe dans Git --> 

## Tests fonctionnels

On doit refaire tous les tests
create.blade doit avoir un formulaire etc.

On redémarre Laravel au complet

Les routes
BD (Ajouter, effacer)
Véfirier le HTML


## Que doit-on tester

- Un test différent pour chaque utilisation
  - Un pour filtre
  - Un pour tri
- Toutes les routes doivent avoir un test
  - La route retourne un code 200?
  - La route store est plus compliqué que la route create
    - Est-ce que ça enregistre correctement
    - Est-ce que la session envoie le bon message, les bonnes informations

## Comment ça fonctionne

### Ex. test sur la BD (En local!)

1. Préparation (Fausse BD)
2. Assertion --> On s'attend à ce qu'il y ait un code 200
Je m'attend à ce que ce soit vrai ( Il y a un h1 dans la page)

3. Clean up
   1. Effacer la BD


 ### Lister ce qu'on l'on veut test pour chaque section
 1. Show
    1. Tri asc
       1. Titre
       2. Prix
       3. etc.

    2. Tri desc
       1. Titre
       2. Prix
       3. etc.

 2. Formulaire
    1. La liste des input à tester
 3. Routes
    1. La liste des route






