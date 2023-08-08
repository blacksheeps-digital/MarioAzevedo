<?php
/*
Template Name: Acervo
*/
get_header();
?>

<!-- Conteúdo da página Acervo -->


<section class="acervo">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100 ">
            <div class="col-md-12">
                <?php echo do_shortcode('[searchandfilter id="18"]'); ?>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100 ">
            <div class="col-md-12">
                <?php echo do_shortcode('[searchandfilter id="18" show="results"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>