# Garage Parrot  
Je suis David Le Gouellec actuellement en formation chez STUDI depuis Avril 2022 en 
tant que Développeur Web et Web mobile Fullstack. Dans ce readme, je vous propose toutes les démarches 
à suivre pour l'exécution en local du projet Garage Parrot. Le projet est malheureusement encore en cours veuillez m'en excusez je fais mon possible pour qu'il soit crédible devant un jury, mais toutes remarques sur le peu fonctionnel est bon a prendre 
Cordialement 

## Prérequis pour le projet avec Symfony

```bash
 php -v
```  
```bash
 composer -v
```  
```bash
 symfony check:requirements
```  
[Documentation Symfony](https://symfony.com/doc/current/setup.html)   

## Installation
```bash
 git clone https://github.com/DdLgc/GarageParrot.git
```
```bash
 cd garageparrot
```
```bash
 composer install
```

```bash
 composer require doctrine/orm
```
```bash
 php bin/console doctrine:database:import GarageParrot\Documents\garageparrot.sql
```

## Serveur local

```bash
 symfony server:start
```  
ou  
```bash
 symfony serve -d
```   
[Serveur local](https://symfony.com/doc/5.4/setup/symfony_server.html)  



->On peux se connecter avec un compte qui a pour adresse email foo@foo.com et mtp 1234 
->On peux aussi rentrer details/4 apres le localhost pour aller chercher un vehicule en bdd 


## Documentation Bootstrap  
[GetBootstrap](https://getbootstrap.com/)  
[Documentation](https://getbootstrap.com/docs/5.3/getting-started/download/)


## Fonctionnalités clés

- Gestion des Utilisateurs : Nous offrons un accès à notre site web aux administrateurs et aux employés du garage. Les comptes d'employés sont créés exclusivement par l'administrateur.

- Informations sur les Services : Notre site web affiche clairement les différents services de réparation automobile que nous proposons. L'administrateur peut mettre à jour ces informations depuis son espace d'administration.

- Horaires d'Ouverture : Les horaires d'ouverture du garage sont accessibles aux visiteurs du site pour faciliter la planification de leur visite. L'administrateur peut les gérer depuis son espace dédié.

- Véhicules d'Occasion : Nous présentons des véhicules d'occasion à la vente, avec des descriptions détaillées, des images, et des informations techniques. Nos employés ont la possibilité d'ajouter de nouveaux véhicules sur le site.

- Filtrage des Véhicules : Les visiteurs peuvent filtrer la liste des véhicules d'occasion en fonction de critères tels que le prix, le kilométrage, ou l'année de mise en circulation.

- Témoignages Clients : Nous recueillons et affichons les témoignages des clients sur notre site. Les avis sont modérés pour assurer la qualité du contenu.  


## Vous trouverez ci-joint les liens utiles pour la creation du site  
### Links


[![Github](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/DdLgc/GarageParrot)  
[![Trello](https://img.shields.io/badge/Trello-0052CC?style=for-the-badge&logo=trello&logoColor=white)](https://trello.com/b/69ozFGfD/projet-garage-parrot)  
[![Canva](https://img.shields.io/badge/Canva-%2300C4CC.svg?&style=for-the-badge&logo=Canva&logoColor=white)](https://www.canva.com/design/DAFxjK9iKfc/_ZsHvCQPB8QKw1dvVRLOhw/edit)  
[![Figma](https://img.shields.io/badge/Figma-F24E1E?style=for-the-badge&logo=figma&logoColor=white)](
https://www.figma.com/file/fgCCjfhNbPctL6bWLLQA7p/Untitled?type=whiteboard&node-id=0-1&t=Ls2NnPW8p67gPkgd-0)  
[![DbDiagram]( https://img.shields.io/badge/DbDiagram-0d9431)](
https://dbdiagram.io/d/Garage-Parrot-654ce0c37d8bbd6465da04ce)  
