<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
            </div>
            <?php
                $args = array(
                    'theme-location' =>'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );

                wp_nav_menu($args);
            ?>
        </div>
    </header>
    <main>
        <?php
            while( have_posts() ): the_post(); /* have_post interactua con la bbdd y the_post con las paginas */

            the_title();

            the_content();
            
            endwhile;
        ?> 
    </main>

</body>
</html>