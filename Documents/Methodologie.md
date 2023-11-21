
-------------Méthodologie pour Symfony -------------
1 - Installer une configuration AMP (apache, Mysql, PHP)
2 - Installer les dépendances liées à l'ecosysteme de Symfony : Composer, Symfony CLI, Yarn
3 - symfony check:requirements
4 - Créer un projet en full
5 - Configurer son projet : .env.local à jour pour se connecter à la BDD
6 - Créer ses premières entités (bin/console make:entity)
7 - Créer ses premières classes de migrations (bin/console make:mig)
8 - Pousser ses migrations en base (bin/console doctrine:migrations:migrate)
9 - Créer les CRUDS des entités en base avec la commande (make:crud)
10 - Modifier ses formtypes notamment s'il y a des relations entre les entités (entityType::class)
11 - Mettre à jour ses controllers, ses visuels (twig)
12 - Installer webpack encore, utiliser yarn run dev pour compiler ses fichiers SCSS
13 - Configurer la scurité du projet : (make:user pour clé l'entité User -> make:registration-form pour créer la route /register avec le form d'inscription -> make:auth pour créer le login form et la route / login)
14 - Adapter les vues et les controllers précédemment créés
15 - FIN : Ajouter sa logique métier





->est ce que dans vehicle j'ai besoin de faire une marque pour le choix par filtre ?ou alors creer une autre table categories?
->a partir de quand devrais-je utiliser asset pour mes asset ?
-> Pourquoi ma relation dans hours est grise et apparait pourtant dans phpmyadmin?(OneToOne)
->Faire l'ajourt des champs manquant dans appfixtures(frontpic,pics)
->Problemes avec le caroussel et les fleches il devrait defiler pt fontawesome mais je pense l'avoir bien integrer

->Possibilité d'ajouter des priority sur les routes 
-> est ce que pour le champ price je passe un MoneyType ou textType


=> details j'ai juste besoin de show{id}
=> et c'est dans le panel d'administration qu'il faut un crud complet pour les vehicles 
un autre crud pour la creation utilisateurs 
et un edit sur hours 
testimonials pour la moderation ??


=>role par defaut User creer le role employee qui aura au moi le role user et le admin qui aura au moin le role employee 


