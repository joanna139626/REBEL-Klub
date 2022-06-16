<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo("name"); ?></title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory") ?>/dist/styles/main.css" type="text/css">   

    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory") ?>/style.css?version=<? echo time(); ?>" type="text/css">   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#"><img src="<?php echo get_bloginfo("template_directory") ?>/dist/img/logo.png" alt="startup.logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#startupNavbar" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="startupNavbar">
        <?php 
        wp_nav_menu( [
            'theme_location' => 'header-menu',
            'menu_class' => 'navbar-nav ml-sm-auto',
            'container' => 'ul',
            'container_class' => 'nav-item'
            ] );
            ?>
      </div>
        
        <!-- 
        <div class="collapse navbar-collapse" id="startupNavbar">
        <ul class="navbar-nav ml-sm-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
        </ul> 
      </div>
      -->
    </nav>