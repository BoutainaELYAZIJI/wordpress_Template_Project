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

>  * apt-get update
>  * apt-get install apache2 php7.2 php7.2-mysql libapache2-mod-php7.2
>  * service apache2 restar
<p>
Optionnel Utilisez la commande suivante pour installer les modules PHP les plus utilisés d’Apache.
</p>
>  * apt-get install php7.2-xml php7.2-curl php7.2-gd php7.2-mbstring
>  * apt-get install php7.2-bz2 php7.2-zip php7.2-xml php7.2-curl
>  * apt-get install php7.2-json php7.2-opcache php7.2-readline
<p>
Optionnel Utilisez la commande suivante pour activer apache mod_rewrite et SSL.
Activez le module SSL uniquement si vous envisagez de proposer du contenu HTTPS.
</p>
> *  a2enmod rewrite
> *  a2enmod ssl
> *  service apache2 restart
<p>
Recherchez l'emplacement du fichier de configuration PHP sur votre système.
</p>
## :heavy_check_mark:


