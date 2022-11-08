<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Corinthia&display=swap" rel="stylesheet">
    <title>
      <?php
      wp_title('|', true, 'right');
      bloginfo('name');
      ?>
    </title>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php
  
    $scieszka = get_template_directory_uri();
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo home_url();?>">Mydełkowanie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php
        wp_nav_menu(array(
        'theme-location'=>'topmenu',  
        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
               )
              );
              ?>
    </div>
  </div>
  <a href="https://www.instagram.com/kaskaluszcz"><img src="<?php echo $scieszka; ?>/images/instagram.svg"class="icon"></a>
  <a href="https://www.facebook.com/profile.php?id=100003315372110"><img src="<?php echo $scieszka; ?>/images/facebook.svg" class="icon"></a>
  
</nav>