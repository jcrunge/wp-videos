<?php

get_header();
the_post();
?>

<h1 class="btn-default"><?php the_title(); ?></h1>
    <h5 class="btn-default"><?php the_content(); ?></h5>

<section class="container">
        <article class="col-lg-8 fondo" >
            <h3 class="text-primary"><?php the_title(); ?></h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam cumque omnis quaerat, perspiciatis fugiat culpa veniam sint minus, earum. Veniam, consectetur neque qui error ea ipsam sequi nulla aliquam quis.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, libero vitae ipsa quis iusto distinctio earum perspiciatis. Eum optio, voluptatem ex vel quasi minima eaque. Provident, cupiditate architecto porro doloribus.</p>
            <br>
        </article>
        <aside class="col-lg-4 fondo">
            <h3 class="text-primary">Siguenos en:</h3>
            <span class="glyphicon glyphicon-thumbs-up" >1</span><br>
            <span class="glyphicon glyphicon-thumbs-up" >2</span><br>
            <span class="glyphicon glyphicon-thumbs-up" >3</span><br>

        </aside>
    </section>



<?php get_footer(); ?>
