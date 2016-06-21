<?php
  get_header();
  the_post();
 ?>
<!--Estamos en estamos en index.php-->
<h1><?php the_title() ?></h1>
<?php the_content(); ?>
<?php get_footer(); ?>
