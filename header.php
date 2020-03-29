<!DOCTYPE html>
 <html>
 <head>
  <title>ESTSB</title>
    <meta charset="UTF-8">
    <?php wp_head();?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/interfaceWP/wp-content/themes/ESTSBWP/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body >
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">ESTSB</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Accueil<i class="fa fa-caret-down"></i></button>     
          <div class="w3-dropdown-content w3-card-4 w3-bar-block">
              <a href="#" class="w3-bar-item w3-button">Accueil</a>
              <a href="#" class="w3-bar-item w3-button">Mot De Directeur</a>
          </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications"> Filières<i class="fa fa-caret-down"></i></button>     
          <div class="w3-dropdown-content w3-card-4 w3-bar-block">
              <a href="#" class="w3-bar-item w3-button">GI</a>
              <a href="#" class="w3-bar-item w3-button">TM</a>
              <a href="#" class="w3-bar-item w3-button">GA</a>
          </div>
      </div>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Formation</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-group"></i> Réglement</a>
      <a href="http://192.168.1.102/wordpress/home/article/" class="w3-bar-item w3-button"><i class=" fa fa-calendar-check-o"></i>Articles</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-calendar-check-o"></i> Suivi des lauréats</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-address-book"></i> CONTACT</a>
      <div class="container w3-bar-item">
        
         <?php get_search_form()?>
        
       </div>
      </div>   
    </div>
   <!-- Hide right-floated links on small screens and replace them with a menu icon -->

   <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Filères<i class="fa fa-caret-down"></i></button>     
          <div class="w3-dropdown-content w3-card-4 w3-bar-block">
              <a href="#" class="w3-bar-item w3-button">GI</a>
              <a href="#" class="w3-bar-item w3-button">TM</a>
              <a href="#" class="w3-bar-item w3-button">GA</a>
          </div>
      </div>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i>  Formation</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i>  Réglement</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-user"></i>  Suvi des lauréats</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Accueil<i class="fa fa-caret-down"></i></button>     
          <div class="w3-dropdown-content w3-card-4 w3-bar-block">
              <a href="#" class="w3-bar-item w3-button">Accueil</a>
              <a href="#" class="w3-bar-item w3-button">Mot De Directeur</a>
          </div>
      </div>
</nav>
