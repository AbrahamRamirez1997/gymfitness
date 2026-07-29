<?php
    while( have_posts() ): the_post(); /* have_post interactua con la bbdd y the_post con las paginas */

        the_title('<h1 class= "text-center text-primary">','</h1>');
            if(has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => 'imagen-destacada'));
            }
        the_content();
            
    endwhile;