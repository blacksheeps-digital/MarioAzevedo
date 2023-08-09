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
                <section class="recommended">
                    <div class="container h-100">
                        <div class="row align-items-center justify-content-start h-100">
                            <div class="col-md-12 d-flex align-items-start justify-content-start h-100 p-0">
                                <?php
                                while (have_posts()) {
                                    the_post();
                                ?>
                                    <a href="<?php the_permalink(); ?>" class="col-md-4 col-12 mb-3 d-flex flex-column align-items-start justify-content-start h-100 pe-md-5">
                                        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                                        <h3 class="mt-4"><?php the_title(); ?></h3>
                                        <p class="mt-4">
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-3" id="sidebar">
                <?php custom_display_categories(); ?>
                <h3>Arquivos</h3>
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