<?php
get_header();
the_post(); //Pueda recivir los post
?>

 <h1 class="btn-default"><?php the_title(); ?></h1>
    <h5 class="btn-default"><?php the_content(); ?></h5>

<section class="container">
        <article class="col-lg-8 fondo" >
            <h3 class="text-primary">Nuestras ultimas recetas</h3>
            <br>


              <div id="platillos">
                <?php
                $args = array(
                  'post_type' =>'post',
                  'posts_per_page' =>'-1'
              );
                  // the query
                      $the_query = new WP_Query( $args ); ?>

                      <?php if ( $the_query->have_posts() ) : ?>

	                    <!-- pagination here -->

	                    <!-- the loop -->
	                     <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                         <div class="media">
                             <div class="media-left">
                            <?php the_post_thumbnail(); ?>
                                </div>
                             <div class="media-body">
                                   <h4 class="media-heading text-primary"><?php the_title(); ?></h4>
                                   <h5 class="text-warning"><?php echo get_the_date(); ?> - <small class="text-danger"><?php the_author(); ?></small></h5>
                                      <?php the_excerpt(); ?>
                                        <div class=" col-lg-offset-10"><a href="<?php the_permalink();?>"><buttom class="btn btn-primary">Ver platillo</buttom></a></div>
                             </div>
                         </div>


	                        <?php endwhile; ?>
	                         <!-- end of the loop -->

	                          <!-- pagination here -->

	                           <?php wp_reset_postdata(); ?>

                              <?php else : ?>
	                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php endif; ?>
                                <br>



            </div>
        </article>
        <aside class="col-lg-4 fondo">
            <h3 class="text-primary">Siguenos en:</h3>
            <span class="glyphicon glyphicon-thumbs-up" >1</span><br>
            <span class="glyphicon glyphicon-thumbs-up" >2</span><br>
            <span class="glyphicon glyphicon-thumbs-up" >3</span><br>

        </aside>
    </section>
<?php
get_footer(); ?>
