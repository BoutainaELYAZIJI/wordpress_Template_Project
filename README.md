# Project WordPress IHM

# Présentation du Project :
  Création d'une template pour le site web de notre Ecole , Ecole Supérieure de Téchnologie 
# WordPress :

# Présentation :bell: :

 WordPress est un système de gestion de contenu gratuit, libre et open-source. Ce logiciel écrit en PHP repose sur une base de données MySQL et est distribué par l'entreprise américaine Automattic.

# Installation :
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
> * wordpress CHARACTER SET UTF8 COLLATE UTF8_BIN;
> * CREATE USER 'wordpress'@'%' IDENTIFIED BY 'sokaina';
> * GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'%';
> * FLUSH PRIVILEGES;
> * quit;

## :exclamation: Installation d'Apache :
<p>
 WordPress nécessite un serveur Web avec support PHP pour présenter ses pages Web.
Utilisez la commande Ubuntu APT pour installer le serveur Apache.
</p>
<ul>
 <li> apt-get update </li>
 <li> apt-get install apache2 php7.2 php7.2-mysql libapache2-mod-php7.2 </li>
 <li> service apache2 restar </li>
 </ul>
<p>
Optionnel Utilisez la commande suivante pour installer les modules PHP les plus utilisés d’Apache.
</p>
 <ul>
 <li> apt-get install php7.2-xml php7.2-curl php7.2-gd php7.2-mbstring </li>
<li> apt-get install php7.2-bz2 php7.2-zip php7.2-xml php7.2-curl </li>
<li> apt-get install php7.2-json php7.2-opcache php7.2-readline </li>
</ul>
<p>
Optionnel Utilisez la commande suivante pour activer apache mod_rewrite et SSL.
Activez le module SSL uniquement si vous envisagez de proposer du contenu HTTPS.
</p>

<p>
Recherchez l'emplacement du fichier de configuration PHP sur votre système.
</p>

Editez le fichier de configuration php.ini.:heavy_check_mark:

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
<p>Après avoir terminé la configuration de MySQL et Apache, nous pouvons commencer l’installation de WordPress.</p>
 
 :point_right: Téléchargez la dernière version de WordPress et extrayez le package. 

> *  cd /tmp
> *  wget https://wordpress.org/latest.tar.gz
> *  tar -zxvf latest.tar.gz
<p>
Déplacez le dossier WordPress dans votre répertoire de lecteur racine Apache.
</p>
<p>
Donnez à l'utilisateur www-data le contrôle total sur le répertoire WordPress et ses fichiers.

>  mv wordpress /var/www/html/
> chown www-data.www-data /var/www/html/wordpress/* -R
</p>
<p>
Créez et éditez le fichier de configuration WordPress wp-config.php.
<p>

>  cd /var/www/html/wordpress
>  mv wp-config-sample.php wp-config.php
>  vi wp-config.php

<p>Modifiez les informations de connexion à la base de données MySQL situées sur le fichier wp-config.file.</p>

<p>A titre d'exemple, voici le fichier avec notre configuration.</p>

> define('DB_NAME', 'wordpress');
> define('DB_USER', 'wordpress');
> define('DB_PASSWORD', 'sokaina');
> define('DB_HOST', 'localhost');
> define('DB_CHARSET', 'utf8');
> define('DB_COLLATE', '');

Configuration de WordPress sur Ubuntu Linux

Ouvrez votre navigateur et entrez l'adresse IP de votre serveur Web plus / wordpress.

Dans notre exemple, l'URL suivante a été entrée dans le navigateur:


 :point_right:   http://192.168.1.102/wordpress

<p>L'assistant d'installation de WordPress sera présenté.</p>
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/langue-installation-wordpress.png">
<p>
puis vous devrez entrer les informations de votre site Web ,aprés vous recevrez la confirmation de votre installation WordPress.</p>
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/installer-wordpress2-271x300.png">
<p>
Cliquez sur le bouton Connexion et entrez le compte administrateur et le mot de passe.</p>
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/xampp_wordpress-installation_4-1.png">
<p>Une fois la connexion établie, le tableau de bord WordPress s’affiche.</p>
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/screen-themes.png">

## Utilisation du Notre Projet :
###  :one: :
   :open_file_folder: Télecharger ce dossier  
### :two: :
   Ajouter ce théme à les thémes de votre Wordpress 
### :three: :
  :memo: Ajouter Ce Existence "advanced-custom-fields-pro.zip" et Activer le <br>
  :arrow_right_hook: Vous trouver dans le menu de Wordpress une icone ACF . <br>
  :pencil2: Pour Modifier la page d'accueil vous trvouver quelque élemnet   :clipboard: dans l'apage d'accueil que vous avez remblire pour l'avoire dans  la page d'aacuiel ainsi il y a un aspace pour les articles donc vous pouvez l'ajouter 
### Screen de Page de Notre Thémes :camera: :

<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/Screenshot_2020-03-29%20ESTSB.png">
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/Screenshot_2020-03-29%20ESTSB(1).png">
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/Screenshot_2020-03-29%20ESTSB(2)%20(1).png">
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/Screenshot_2020-03-29%20ESTSB(2).png">
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/Screenshot_2020-03-29%20ESTSB(3).png">
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/Screenshot_2020-03-30%20ESTSB.png">
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/Screenshot_2020-03-29%20ESTSB(4).png">
<img src="https://github.com/BouTaina11/wordpress_Template_Project/blob/master/Project-WordPress/img/Screenshot_2020-03-29%20ESTSB(5).png">
 
###  Conclusion  : 
Nous tenons à remercier notre chére Professeur Mr Baddi Youssef , Doctorant et Professeur assistant à L'école supérieure de téchnologie , pour leur soutien , encadrant anisi le partage de l'inforamtion , et grace à lui on a cette opportunité d'améliorer nos compétences et de connaître les nouvelles technologies comme ces géantes que nous travaillé sur elle  :pray: :pray: :pray: :pray: .
 
 
Plus sur MR [Baddi Youssef](https://https://www.linkedin.com/in/youssefbaddi/?locale=fr_FR).

Crée Par : Sokaina Daabal && Boutaina El Yaziji  
