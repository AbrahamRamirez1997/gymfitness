<?php
    get_header();
?>
    <main>
        <?php
            while( have_posts() ): the_post(); /* have_post interactua con la bbdd y the_post con las paginas */

            the_title();

            the_content();
            
            endwhile;
        ?> 
    </main>

<?php
    get_footer();
?>