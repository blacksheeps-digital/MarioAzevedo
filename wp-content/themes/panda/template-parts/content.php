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
                </div>
                <div class="col-md-3">
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