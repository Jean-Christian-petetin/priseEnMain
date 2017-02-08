priseEnMain
===========

## Prise en main de symfony:

### Comprendre certain aspect de son fonctionnement
    * Découverte de l'architecture de symfony
    * htaccess: Il est utilisé pour les redirections, http, hosts et environement
    * Routing: Explication de la relation route/uri.
    * Controller: prise en main des Controllers.
    * Découverte de la fonction twig parent

#### Procédure d'instalation (sur Netbeans).
    
    1. Projet Click droit, composer, install dev.
    2. Faire un chmod -R a+rwx a la racine du dossier. (sous linux)
    3. Configurer la base de donnée dans parameters.yml
    4. Terminal : php bin/console doctrine:database:create
                : php bin/console doctrine:schema:create:update --force

A Symfony project created on February 7, 2017, 9:34 am.
