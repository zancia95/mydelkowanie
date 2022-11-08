<?php get_header();?>

  <div class="container spaceT">
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-4 produkt">

      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-fluid2')); ?></a>
        <a href="<?php the_permalink(); ?>" class="but">Czytaj więcej</a>
    </div>
   
        <?php endwhile; else: ?>
        <h1>Nie znaleziono treści</h1>
        <?php endif; ?>

  </div>
  </div>

<?php get_footer();?>
