<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package panda
 */

?>

<?php   // Verificar se o post pertence à taxonomia "Cadernos e Livros de artistas"
    if (has_term('Cadernos e Livros de artistas', 'segmento', $post)) {
        ?>
                    <?php the_content(); ?>
 
        <?php
    }
    ?>
    <?php   // Verificar se o post pertence à taxonomia "Cadernos e Livros de artistas"
    if (has_term('Textos', 'segmento', $post)) {
        ?>
        <section class="">
           <div class="container h-100">
               <div class="row align-items-center justify-content-center h-100 ">
                   <div class="col-md-12 text-center">
                       <h1>

                        <?php the_title(); ?> 

                       </h1>
                   </div>
                   <div class="col-md-12">
                       <?php the_content(); ?>

                   </div>
               </div>
           </div>
        </section>

        <?php
    }
    else{
    ?>
<section class="carousel">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100 ">
            <div class="col-md-8">
                <div class="f-carousel" id="myCarousel">
                    <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/31/192x144">
                        <a href="https://lipsum.app/id/31/1920x1280" data-fancybox="gallery"><img width="640" height="480" alt="" data-lazy-src="https://lipsum.app/id/31/640x480" /></a>
                    </div>
                    <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/35/192x144">
                        <a href="https://lipsum.app/id/35/1920x1280" data-fancybox="gallery"><img width="640" height="480" alt="" data-lazy-src="https://lipsum.app/id/35/640x480" /></a>
                    </div>
                    <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/34/192x144">
                        <a href="https://lipsum.app/id/34/1920x1280" data-fancybox="gallery"><img width="640" height="480" alt="" data-lazy-src="https://lipsum.app/id/34/640x480" /></a>
                    </div>
                    <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/60/192x144">
                        <a href="https://lipsum.app/id/60/1920x1280" data-fancybox="gallery"><img width="640" height="480" alt="" data-lazy-src="https://lipsum.app/id/60/640x480" /></a>
                    </div>
                    <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/33/192x144">
                        <a href="https://lipsum.app/id/33/1920x1280" data-fancybox="gallery"><img width="640" height="480" alt="" data-lazy-src="https://lipsum.app/id/33/640x480" /></a>
                    </div>
                    <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/59/192x144">
                        <a href="https://lipsum.app/id/59/1920x1280" data-fancybox="gallery"><img width="640" height="480" alt="" data-lazy-src="https://lipsum.app/id/59/640x480" /></a>
                    </div>
                    <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/37/192x144">
                        <a href="https://lipsum.app/id/37/1920x1280" data-fancybox="gallery"><img width="640" height="480" alt="" data-lazy-src="https://lipsum.app/id/37/640x480" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php };?>