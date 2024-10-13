# Tacha

## Introduction

Tacha est née de ma propre expérience au fil de divers projets. Je me suis souvent retrouvé à devoir catégoriser les tâches en fonction de deux critères principaux : leur priorité et la charge de travail qu'elles représentaient. Cependant, ces deux seuls attributs ne suffisaient pas toujours à rendre la gestion fluide, et je me retrouvais à utiliser des outils comme Excel, totalement inadaptés pour une gestion complexe de tâches. C’est là que j’ai réalisé qu’il fallait un moyen plus intuitif et flexible pour trier et gérer ces tâches, prenant en compte plusieurs dimensions au-delà de ces deux critères. C'est ainsi qu'a émergé l'idée de Tacha, une application pensée pour combler ces manques.

## Apprentissage

Ce projet est un moyen pour moi d'apprendre le framework Symfony en autodidacte.

L'objectif est simple : réaliser une base de données peu compliqué (> 6 tables), de manière optimisée et aboutie pour bien apprivoiser le framework.

J'aimerais également m'améliorer en DevOps, en déployant l'application avec Docker et en intégrant éventuellement de la distribution continue (CD).

Les APIs générées pourraient éventuellement servir plus tard à lancer une réelle application (car je ne compte pas la faire en PHP).

## Fonctionnalités

L'idée est de sauvegarder des tâches non pas sous forme de liste mais sous forme visuelle dans un tableau 2 dimensions, de manière à pouvoir facilement les trier / ordonner en fonction d'attributs pré définis.

### Attributs

Chaque attribut peut aller de 0 à 100. On retrouve notament :

- la priorité : s'il faut vite exécuter la tache
- la désirabilité : si on c'est une tâche agréable ou désagréable
- la concentration : s'il demande beaucoup de réflexion
- charge de travail
- deadline : définit la priorité.

De cette manière, on peut en un simple coup d'oeil visualiser les tâches sur un tableau sur lequel on sélectionne les attributs en x et en y. Par exemple : priorité et désirabilité pour rapidement voir ce qui est ennuyeux à faire mais prioritaire. Autre exemple : désirabilité et charge de travail pour sélectionner une tâche rapide à faire mais ennuyeuse si on n'a pas beaucoup de temps.

### Hierarchie

Un aspect hiérarchique est également ajouté aux tâches. Ainsi, on peut savoir quelle tâche nécessite l'accomplissement de quelle autre tâche pour être utilisable, ce qui permet d'ordonner les tâches de gros projets

### Sous-tâches

J'aimerais mettre en place des sous-tâches mais le besoins n'étant pas assez clair, je me laisse le temps de mieux y réfléchir pour y trouver un réel intérêt.

## Perspectives

Des maquettes Figma ont été réalisées mais face à la forte demande en outils de gestion du temps et des tâches, de nombreuses solutions payantes existent déjà sur le marché, et elles intègrent probablement des fonctionnalités similaires à celles que je souhaite développer.

Je pense que ce projet n'a pas d'avenir face à la concurrence.

Je continuerai peut-être pour mon apprentissage de Symfony et du framework qui l'accompagnera.

J'aimerais avoir cet outils, façonné à mon image, et propre à mes besoins pour mon quotidien.

## Utilisation

Crer un fichier .env.local avec APP_SECRET notament
Modifier APP_ENV en fonction de l'environnement souhaité avant d'executer le docker-compose.

### Production

docker-compose --env-file .env.prod -f compose.yaml -f compose.prod.yaml up --build
php bin/console cache:clear --env=prod --no-debug
php bin/console cache:warmup --env=prod

### Developpement

Création du fichier .env (copie du example)
Completion du fichier
`docker-compose up -d` : Fusionne par défaut compose et compose.override.
Permet de lancer la base de données avec PhpMyAdmin.
`php bin/console doctrine:schema:create`
`php bin/console server:start`
