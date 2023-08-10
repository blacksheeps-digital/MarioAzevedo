<?php

/*
Template name: Blog
*/

$classe = 'page-blog';

get_header();

the_post();

?>


<main class="main" role="main">

    <section class="blog">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-md-12">
                    <h2 class="text-center">Muito conteúdo para você!</h2>
                </div>
                <div class="col-md-6 col-lg-3 px-2 mb-3 mb-md-5">
                    <div class="card">
                        <a href="" class="text-decoration-none">

                            <div class="card-header p-0">
                                <img src='<?php echo IMG ?>blog.png' class='img-fluid' alt='' title='' loading='lazy'>
                            </div>
                            <div class="card-body">
                                <p class="fw-bold">
                                    Título de artigo de preferência em 2 até linhas
                                </p>
                                <a href="">
                                    Leia a matéria
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>

<?php get_footer(); ?>