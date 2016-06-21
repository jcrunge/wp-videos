<?php

get_header();
the_post();
?>
<!--Estamos en front-page.php-->

  <?php get_template_part("partes/slider"); ?>

    <h1 class="btn-default"><?php the_title(); ?></h1>
    <h5 class="btn-default"><?php the_content(); ?></h5>

     <section class="container">
    	        <div class="row">
    	            <div class=" col-lg-4 clearfix">
    	                <div class="thumbnail borde">
	                 <h3 class="text-center">Platillo del Mes</h3>
            <img src="<?php echo get_template_directory_uri();?>/img/Platillo.jpg" alt="Platillo" class="img-responsive text-center">
          <div class="caption">
            <p class="text-justify">Cada mes sacamos un nuevo platillo donde la gente puede degustar este platillo.</p>
            <a href="index.php/publicaciones/"><bottom class="btn btn-primary">Saber más</bottom></a>
          </div>
            </div>
              </div>


                   <div class=" col-lg-4 clearfix">
               <div class="thumbnail borde">
	             <h3 class="text-center">Reservaciones</h3>
                  <img src="<?php echo get_template_directory_uri();?>/img/Instalaciones.jpg" alt="Instalaciones" class="img-responsive">
      <div class="caption">
            <p class="text-justify">Ahora es más fácil reserva solo llena y formulario y listo .</p>
        <bottom class="btn btn-primary">Saber más</bottom>
      </div>
        </div>
              </div>


               <div class=" col-lg-4 clearfix">
               <div class="thumbnail borde">
	             <h3 class="text-center">Personal</h3>
      <img src="<?php echo get_template_directory_uri();?>/img/Personal.jpg" alt="Personal" class="img-responsive">
      <div class="caption">
        <p class="text-justify">Nuestro personal está certificado para darte la mejor experiencia para los eventos o fiestas.</p>
        <bottom class="btn btn-primary">Saber más</bottom>
      </div>
        </div>
               </div>
    	        </div>
    	        </section>

    <?php get_footer(); ?>
