| ------------> code console                          | ------------> Utilisation                                                                   |
| --------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| symfony new my_project_directory --version="6.3.\*" | Creation de l'app symfony sans packages                                                     |
| symfony new my_project_directory --demo             | Application demonstrative bonne maniere symfony                                             |
| symfony check:requirements                          | Le symfonybinaire fournit un outil pour vérifier si votre pc répond à toutes les exigences. |
| symfony server:start                                | Démarrer un serveur symfony                                                                 |
| symfony serve -d                                    | Démarrer un serveur symfony en fond                                                         |
| symfony check:security                              | Contrôle de sécurité est effectué local en récupérant la base de données du composer.lock   |
| symfony console doctrine:database:create            | Creation de la BDD .env                                                                     |
| symfony console make:migration                      | Creation un fichier de migration avec requetes SQL pour creer les tables sur le serveur     |
| composer require twig                               | Installe le package pour Twig                                                               |
| composer require --dev symfony/maker-bundle         | Installe le bundle make uniquement en dev                                                   |
| php bin/console make:user                           | Le bundle maker creer un user avc userInterface                                             |
| php bin/console make:entity:"nom_du_entity"         | Le bundle maker creer une entité                                                            |
| php bin/console make:controller "nom_du_controller" | Le bundle maker creer un controller avec le nom du controleur qui suit                      |
| php bin/console debug:router                        | obtenir une liste de toutes les routes de votre système                                     |
| php bin/console router:match "nom_de_la_route"      | indique quelle route correspondra à l'URL donnée                                            |
| symfony console doctrine:fixtures:load              | Pret a etre ecris au SGBDR                                                                  |
| symfony console cache:clear                         | Supprime le cache (a la moindre erreur fonctionne pas)                                      |
| php bin/console doctrine:migrations:diff            | génère un fichier de migration basé sur ces différences                                     |
| php bin/console doctrine:migrations:migrate         | analyse vos entités, détecte les changements                                                |
| symfony console doctrine:schema:validate            | Vérifie le pammping entre entités                                                           |
