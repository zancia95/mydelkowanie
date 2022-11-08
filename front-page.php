<?php get_header();?>
<?php
    $scieszka = get_template_directory_uri();
    ?>

 
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $scieszka; ?>/images/slider2ok.jpg" class="d-block w-100" alt="slider1">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $scieszka; ?>/images/sliderok1.jpg" class="d-block w-100" alt="slider2">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $scieszka; ?>/images/slider30.jpg" class="d-block w-100" alt="slider3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- MYDEŁKA -->

  <div class="container spaceT">
    <div class="row">
     
       <?php
        /*---------------------------------------
                mydelka
        -----------------------------------------*/
        $args = array(
        'category_name' => 'zapachowe',
        'showposts' => '3'
        /*'tag' => 'polecane'*/
         );     
        $produkty = new WP_Query($args);
     
        while ($produkty->have_posts()): $produkty->the_post();
        
        //nie wyświetlaj
        if(  $post->ID == $duplikat ) continue;
        update_post_caches($posts); ?>

          <div class="col-md-4">
            <h2><a href="<?php the_permalink(); ?>" style="color: #444; text-decoration:none;"><?php the_title(); ?></a></h2>
              <?php the_post_thumbnail('full', array('class' =>'img-fluid2')); ?>
              <div class="ele-center">
              <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-warning">Czytaj więcej</button></a>
              </div>
          </div>

    
        <?php 
        endwhile;
        wp_reset_postdata();
        ?>

    </div>
  </div>

<!-- /MYDEŁKA -->





  <!-- oferta specjalna -->

  <div class="pasek">
    <div class="container spaceT">
    <div class="row">
    <div class="col-md-12">
           <?php
        /*---------------------------------------
               oferta specjalna
        -----------------------------------------*/
        $args = array(
        'post_type' => 'page',
        'pagename' => 'oferta-specjalna'
         );     
        $oferta = new WP_Query($args);
     
        while ($oferta->have_posts()): $oferta->the_post();
        
        //nie wyświetlaj
        if(  $post->ID == $duplikat ) continue;
        update_post_caches($posts); ?>
              <h2 class="oferta"><a href="<?php the_permalink(); ?>" style="color:white; text-decoration:none;"><?php the_title(); ?></a></h2>
              <p><?php the_excerpt(); ?></p>
              <div class="ele-center">
                <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-warning">Czytaj więcej</button></a>
              </div>
          

    
        <?php 
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    </div>
    </div>
  </div>

  <!-- /oferta specjalna -->




  <div class="container">
    <div class="row">
        <?php
        /*---------------------------------------
                o nas
        -----------------------------------------*/
        $args = array(
        'post_type' => 'page',
        'pagename' => 'o-mnie'
         );     
        $omnie_petla = new WP_Query($args);
     
        while ($omnie_petla->have_posts()): $omnie_petla->the_post();
        
        //nie wyświetlaj
        if(  $post->ID == $duplikat ) continue;
        update_post_caches($posts); ?>

          <div class="col-md-9">
            <?php the_content(); ?>
          </div>
          <div class="col-md-3">
              <?php the_post_thumbnail('full', array('class' =>'img-fluid2 image')); ?>
          </div>

    
        <?php 
        endwhile;
        wp_reset_postdata();
        ?>

  </div>
</div>







<?php get_footer();?>
