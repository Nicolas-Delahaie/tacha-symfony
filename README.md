# Tacha

Tacha est née de ma propre expérience au fil de divers projets. Je me suis souvent retrouvé à devoir catégoriser les tâches en fonction de deux critères principaux : leur priorité et la charge de travail qu'elles représentaient. Cependant, ces deux seuls attributs ne suffisaient pas toujours à rendre la gestion fluide, et je me retrouvais à utiliser des outils comme Excel, totalement inadaptés pour une gestion complexe de tâches. C’est là que j’ai réalisé qu’il fallait un moyen plus intuitif et flexible pour trier et gérer ces tâches, prenant en compte plusieurs dimensions au-delà de ces deux critères. C'est ainsi qu'a émergé l'idée de Tacha, une application pensée pour combler ces manques.

## Symfony

Ce projet est un moyen pour moi d'apprendre le framework Symfony en autodidacte.

L'objectif est simple : réaliser une base de données peu compliqué (> 6 tables), de manière optimisée et aboutie pour bien apprivoiser le framework.

Les APIs générées pourraient éventuellement servir plus tard à lancer une réelle application (car je ne compte pas la faire en PHP).

## Utilisation

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

## Avenir

Des maquettes Figma ont été réalisées mais au vu de la forte demande dans la gestion du temps et des tâches, je pense que ce projet n'a pas d'avenir face à la concurrence. D'autant plus qu'il est fort probable qu'un système similaire existe déjà.

Je continuerai peut-être pour mon apprentissage de Symfony et du framework qui l'accompagnera.

J'aimerais avoir cet outils, façonné à mon image, et propre à mes besoins.
