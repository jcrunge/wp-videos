<?php

get_header();
the_post();
?>
<!--Estamos en page-eventos.php-->

<section class="container">
        <article class="col-lg-8 fondo" >

  <h1>Nos gusta destacar</h1>
</div>
<div id="lista-eventos">


  <?php
    $args = array(
      'post_type' => 'eventos',
      'posts_per_page' => '-1',
      'tipo_de_evento' => 'platillos',
    );
    // the query
    $the_query = new WP_Query($args); ?>

     <?php if  ($the_query->have_posts()): ?>

     <h2 class="thumbnail borde">Platillos Destacados</h2>
   <!--the loop -->
   <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
     <div class="media">
         <div class="media-left">
       <?php the_post_thumbnail(); ?>
        <h4 class="media-heading text-primary"><?php the_title(); ?></h4>
        <h5 class="text-warning"><?php echo get_the_date(); ?> - <small class="text-danger"><?php the_author(); ?></small></h5>
      </div>
      <?php the_excerpt(); ?>
      <div class=" col-lg-offset-10"><a href="<?php the_permalink();?>"><buttom class="btn btn-primary">Ver platillo</buttom></a></div>


  <?php endwhile; ?>
<?php else: ?>
  <p><?php _e(' No hay post con ese criterio') ?></p>
<?php endif; ?>
</div>
</div>
</div>
</article>
</section>

<section class="container">


        <aside class="col-lg-12 fondo">
            <h3 class="text-primary">Siguenos en:</h3>
            <span class="glyphicon glyphicon-thumbs-up" >1</span><br>
            <span class="glyphicon glyphicon-thumbs-up" >2</span><br>
            <span class="glyphicon glyphicon-thumbs-up" >3</span><br>

        </aside>
    </section>



<?php get_footer(); ?>
