<?php get_header();?>
<div class="sygnatura"style="background-color: #efd78f;
  padding: 12px 0;">
 <h2 style="color: white;font-size: 3rem;"><?php the_title(); ?></h2>
</div>

  <div class="container spaceT">
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <p><?php the_content(); ?></p>
    
        <?php endwhile; else: ?>
        <h1>Nie znaleziono treści</h1>
        <?php endif; ?>
        </div>
        <div class="col-md-2">
        </div>
  </div>
  </div>

<?php get_footer();?>
