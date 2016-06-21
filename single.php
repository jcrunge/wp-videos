<?php
get_header();
the_post(); //Pueda recivir los post
?>
<!--Estamos en single.php-->
<section class="container">
        <article class="col-lg-8 fondo" >

 <h1 class="btn-default"><?php the_title(); ?></h1>
 <div class="tipo_de_evento">
   <?php echo get_the_term_list($post-> ID, 'tipo_de_evento', 'Tipo de evento: ', ', ', '' ); ?>
</div>
    <h5 class="btn-default"><?php the_content(); ?></h5>

<h1>Informacion del evento</h1>
  <h4>Ubicación</h4>
    <p><?php echo get_post_meta($post->ID, 'ubicacion', true); ?></p>


        </article>
    </section>
<?php
get_footer(); ?>
