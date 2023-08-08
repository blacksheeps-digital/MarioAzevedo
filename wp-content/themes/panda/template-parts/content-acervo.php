<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package panda
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="col-md-12">teste</div>
    <section class="single-post">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-9">

                    <header class="entry-header">
                        <?php
                        if (is_singular()) :
                            the_title('<h1 class="entry-title">', '</h1>');
                        else :
                            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                        endif;

                        ?>
                    </header>
                    <?php panda_post_thumbnail(); ?>

                    <div class="entry-content">
                        <?php
                        the_content(
                            sprintf(
                                wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'panda'),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                wp_kses_post(get_the_title())
                            )
                        );

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__('Pages:', 'panda'),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>
                    <?php
                    $id_post = $post->ID;

                    // Obter categorias do post atual
                    $categories = wp_get_post_categories($id_post);

                    $q = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'showposts' => 2,
                            'post__not_in' => array($id_post),
                            'category__in' => $categories, // Mostrar posts da categoria do post atual
                        )
                    );

                    if ($q->have_posts()) :
                        while ($q->have_posts()) : $q->the_post();
                    ?>
                            <div class="related-post">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="related-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="related-content">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

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
        </div><!-- .entry-content -->
    </section>
</article><!-- #post-<?php the_ID(); ?> -->