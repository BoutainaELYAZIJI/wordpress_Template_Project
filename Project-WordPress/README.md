# Project_WordPress
## :exclamation: Installation du Mysql 
<p>Wordpress  nécessite un système de base de données pour stocker toute sa configuration.
Utilisez la commande Ubuntu APT pour installer le serveur MySQL.</p>

> * apt-get update
> * apt-get install mysql-server mysql-client

<p>Utilisez la commande suivante pour accéder à la console de service MySQL.</p>

 * mysql -u root -p

<p>Sur la console MySQL, vous devez effectuer les tâches suivantes:</p>

*  Créez une base de données nommée wordpress.
*  Créez un compte utilisateur MySQL nommé wordpress.
*  Donnez le contrôle total sur la base de données wordpress à l'utilisateur wordpress.

#### CREATE DATABASE 
>  * wordpress CHARACTER SET UTF8 COLLATE UTF8_BIN;
> * CREATE USER 'wordpress'@'%' IDENTIFIED BY 'sokaina';
> * GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'%';
> * FLUSH PRIVILEGES;
> * quit;

## :exclamation: Installation d'Apache :
<p>WordPress nécessite un serveur Web avec support PHP pour présenter ses pages Web.
Utilisez la commande Ubuntu APT pour installer le serveur Apache.</p>
> * apt-get update
> * apt-get install apache2 php7.2 php7.2-mysql libapache2-mod-php7.2
> * service apache2 restar
<p>
Optionnel Utilisez la commande suivante pour installer les modules PHP les plus utilisés d’Apache.
</p>


<p>
Optionnel Utilisez la commande suivante pour activer apache mod_rewrite et SSL.
Activez le module SSL uniquement si vous envisagez de proposer du contenu HTTPS.
</p>

<p>
Recherchez l'emplacement du fichier de configuration PHP sur votre système.
</p>
:heavy_check_mark:

Editez le fichier de configuration php.ini.

>  * updatedb
>  * locate php.ini
>  * vi /etc/php/7.2/apache2/php.ini

<p>Votre version de PHP n'est peut-être pas la même que la nôtre.</p>
<p>
Votre emplacement de fichier de configuration PHP peut ne pas être le même que le nôtre.</p>

 :arrow_right_hook: Voici le fichier avec notre configuration.

> * file_uploads = On
> * max_execution_time = 300
> * memory_limit = 256M
> * post_max_size = 32M
> * max_input_time = 60
> * max_input_vars = 4440

:arrows_counterclockwise:  Redémarrez le serveur Web Apache manuellement.

> *  service apache2 restart
> *  service apache2 status

Vérifiez l'état du service Apache. :white_check_mark:

> ● apache2.service - The Apache HTTP Server
> Loaded: loaded (/lib/systemd/system/apache2.service; enabled)
> Drop-In: /lib/systemd/system/apache2.service.d
> └─apache2-systemd.conf
> Active: active (running) since Mon 2020-03-19 03:41:12 -02;



## :exclamation: Installation de WordPress

<p>Après avoir terminé la configuration de MySQL et Apache, nous pouvons commencer l’installation de WordPress.</p>
<p>
 Téléchargez la dernière version de WordPress et extrayez le package. :point_left:
</p> 



>  cd /tmp
>  wget https://wordpress.org/latest.tar.gz
>  tar -zxvf latest.tar.gz
