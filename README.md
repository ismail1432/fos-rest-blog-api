fosrest-api-blog
================

##Etapes d'installation

```sh
$ git clone https://github.com/ismail1432/fos-rest-blog-api.git
$ cd fosrest-api-blog
$ php composer.phar update
```
###Création de la base de données
paramétrer les infos de votre base de donnée dans app/config/parameters.yml

```sh
$ php bin/console doctrine:database:create
$ php bin/console doctrine:schema:update --dump-sql
$ php bin/console doctrine:schema:update -f
```
###Création d'un jeu de donnée pour tester l'application

```sh
$ php bin/console doctrine:fixtures:load --append
```

###Lancer les tests de l'application

```sh
$ ./vendor/bin/phpunit tests

```

###Have Fun ;-)