<?php
/*
Template Name: Arquivos por Ano
*/

get_header();
?>
<section class="archive">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">

                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <div class="mb-4">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
            <div class="col-md-3">
                <ul>
                    <?php
                    $args = array(
                        'type' => 'yearly', // Agrupar por ano
                        'show_post_count' => true, // Mostrar a contagem de posts
                    );

                    wp_get_archives($args);
                    ?>
                </ul>
            </div>
        </div>
    </div>

</section>

<?php
get_footer();
?>