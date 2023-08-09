<?php
/*
Template Name: Agregador Cadernos
*/
get_header();
?>


<section class="agregador">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100 ">
            <div class="col-md-12 text-center">
                <h1>CADERNOS E LIVROS-DE-ARTISTAS</h1>
            </div>
            <div class="col-md-12">
                <?php echo do_shortcode('[searchandfilter id="18"]'); ?>
            </div>
            <div class="col-md-12 text-center row">
                <?php

                $args = array(
                    'post_type' => 'agregador',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <div class="agregador-post col-md-4">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php
                                $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'medium');
                                ?>
                                <div class="agregador-thumbnail" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
                                    <div class="taxonomies">
                                        <?php
                                        $autores = get_the_terms($post->ID, 'autores');
                                        $decadas = get_the_terms($post->ID, 'decadas');
                                        if ($autores) {
                                        ?>
                                            <ul class="taxonomies-list">
                                                <?php
                                                foreach ($autores as $autor) {
                                                    foreach ($decadas as $decada) {
                                                        $url = esc_url(home_url('/acervo-resultados/') . '?_sft_segmento=cadernos-e-livros-de-artistas?_sft_decadas=' . esc_attr($decada->name) . '&_sft_autores=' . esc_attr($autor->slug));
                                                        echo '<li><a href="' . $url . '">' . esc_html($autor->name) . '</a></li>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <h2 class="agregador-title"><?php the_title(); ?></h2>
                        </div>

                <?php
                    endwhile;
                endif;

                wp_reset_postdata();

                ?>

            </div>
        </div>
    </div>
</section>



<?php
get_footer();
?>