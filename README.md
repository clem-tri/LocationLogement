# LocationLogement

Le projet à pour but de mettre en place une application permmettant de voir les logements disponibles en locations en fonction de la recherche de lieu lancé. Ensuite de pouvoir voir les dates de réservations, pouvoir réserver et permettres au utilisateur d'administrer leur locations mise en ligne.

## Téléchargement et installation du projet

### Pré-requis
 * Server WAMP
 * Composer
 * Télécharger le projet
 
### Installation

 * Executer la commande à l racine du projet `composer install`
 * Aller dans le fichier `.env`et modifier les lignes DATABASES pour avoir `DATABASE_URL=mysql://IdentifiantBDD:MotdepasseBDD:@127.0.0.1:3306/NomBaseDeDonnee` 
 * Excuter la commande à la racine du projet `php bin/console doctrine:schema:create`
 * Importer le fichier sql joint au projet dans votre base de données créer précédemment
 * Puis `php bin/console server:run`
 
### Lancer le projet

http://localhost:8000/

