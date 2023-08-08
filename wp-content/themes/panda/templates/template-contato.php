<?php
/*
Template Name: Contato
*/
get_header( );
?>


<section class="contato">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-12 text-center">
                <h1>Contato</h1>
            </div>
            <div class="col-md-8 col-lg-6">
                <?php echo do_shortcode('[contact-form-7 id="b011345" title="Formulário de contato 1"]');?>
            </div>
        </div>
    </div>
</section>


 
 

<?php 
get_footer();
?>