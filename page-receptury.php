<?php get_header();?>
<div class="sygnatura">
 <h2><?php the_title(); ?></h2>
</div>

  <div class="container spaceT">
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-12">
      <p><?php the_content(); ?></p>
      <?php the_post_thumbnail('full',array('class' =>'img-fluid2 receptury'));?>
    </div>

        <?php endwhile; else: ?>
        <h1>Nie znaleziono treści</h1>
        <?php endif; ?>
  </div>
  </div>

<?php get_footer();?>
