# Remise 4


## Accès aux routes ou action

### Implémenter un service de Login et d'autorisations

#### Apprentissages à effectuer

- Radis (queue) --> Horizon
- Cluster c'est lorsque plusieurs serveurs travaillent ensemble

##### Non mis en place

[Algorythme de compression](https://laravel.com/docs/10.x/redis#phpredis-serialization)

##### Installation de Horizon

* Demande l'installation de Redis qui demande l'installation de PhpRedis

PhpRedis est installé

Configuration de Redis
[Restera ssl au lieu de tcp](https://laravel.com/docs/10.x/redis#configuring-the-connection-scheme)

*TODO - [rendreSilencieuse certaine job éviter qu'elle soit dans la liste](https://laravel.com/docs/10.x/horizon#silenced-jobs)

Si upgrade horizon: php artisan horizon:publish

> Commandes utiles
> php artisan horizon:pause
> php artisan horizon:continue

*SECTION - Déploiement

[Déploiement de Horizon](https://laravel.com/docs/10.x/horizon#deploying-horizon)

- Nginx

Classe User.php qui est là par défaut --> Ajouter colone role

Dans Authenticate.php j'étais là

Dansd Policies accepte en fonction des ressource (Ci=dessous_)
MenuCOntroller --> authorizeRessource(Menu::class)


#### En quoi consiste ce service

Afficher le lien à tous les utilisateurs et en temps réel qu'un utilisateur vient de créer une recette.

#### Comment il a été implanté sur mon site

Utilisation de Echo

#### Temps prévu pour l'installation complète: constaté le résultat attendu

- Lecture de la documentation
  - 1h
- Mise en place de base
  - 1h
- Ajuster pour l'utilisation personnalisé
  - 1.5h
- Nettoyer le code tests
  - 1h
*NOTE Total: 4.5 Heures


#### Temps réellement passé sur le projet

Lecture de la documentation et début de l'installation
Mercredi 5 juin 14h30 @ 15h
Mercredi 5 juin 15h40 @ 



#### Références utilisés

- [Laravel.com](https://laravel.com/docs/11.x/broadcasting)

#### Notes en cours de route

```php
// Bloquer, ou permettre à tout [*]
'allowed_origins' => ['*'],

// Pour une utilisation sur plussieurs applications
'apps' => [
    [
        'app_id' => 'my-app-one',
        // ...
    ],
    [
        'app_id' => 'my-app-two',
        // ...
    ],
],




```
#!SECTION -> SÉCURITÉ Pour permettre la sécurité en version locale (Je pense le host et port ok)
> php artisan reverb:start --host="127.0.0.1" --port=8000 --hostname="laravel.test"

#ANCHOR - SECTION -> SÉCURITÉ
SSL
In most cases, secure WebSocket connections are likely handled by an upstream web server (Nginx, etc.) before the request is proxied to your Reverb server.

However, it can sometimes be useful, such as during local development, for the Reverb server to handle secure connections directly. If you are using Laravel Herd's secure site functionality, or you are using Laravel Valet and have run the secure command against your application, you may use the Herd / Valet certificate generated for your site to secure your Reverb connections. To do so, set the REVERB_HOST environment variable to your site's hostname or explicitly pass the hostname option when starting the Reverb server:

Since Herd and Valet domains resolve to localhost, running the commmand above will result in your Reverb server being accessible via the secure WebSocket protocol (wss) at wss://laravel.test:8080.

You may also manually choose a certificate by defining tls options in your application's config/reverb.php configuration file. Within the array of tls options, you may provide any of the options supported by PHP's SSL context options:

```php

'options' => [
    'tls' => [
        'local_cert' => '/path/to/cert.pem'
    ],
],

```
#LINK - [tls](https://www.php.net/manual/en/context.ssl.php)

The reverb:restart command ensures all connections are gracefully terminated before stopping the server. If you are running Reverb with a process manager such as Supervisor, the server will be automatically restarted by the process manager after all connections have been terminated:

> php artisan reverb:restart

#!SECTION - File limit
ulimit -n

This command will display the open file limits allowed for different users. You may update these values by editing the /etc/security/limits.conf file. For example, updating the maximum number of open files to 10,000 for the forge user would look like the following:

# /etc/security/limits.conf
forge        soft  nofile  10000
forge        hard  nofile  10000





[nGinx web? sur mon hébergement?](https://laravel.com/docs/10.x/reverb#web-server)

[OS](https://laravel.com/docs/10.x/reverb#operating-system)

[event-loop](https://laravel.com/docs/10.x/reverb#event-loop)

[webServer](https://laravel.com/docs/10.x/reverb#web-server)


[ports](https://laravel.com/docs/10.x/reverb#ports)

[process-management](https://laravel.com/docs/10.x/reverb#process-management)

#NOTE - Redis server
Next, you should have a dedicated, central Redis server to which all of the Reverb servers will communicate. Reverb will use the default Redis connection configured for your application to publish messages to all of your Reverb servers.

Once you have enabled Reverb's scaling option and configured a Redis server, you may simply invoke the reverb:start command on multiple servers that are able to communicate with your Redis server. These Reverb servers should be placed behind a load balancer that distributes incoming requests evenly among the servers.


/**!SECTION Commandes à effectuer pour faire fonctionner Redis, Horizon

brew services start redis
php artisan horizon
