<?php
/*
Template Name: Página principal
*/
get_header();
?>


<section class="menu">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100 ">
            <div class="col-md-12 text-center">
                <img src='<?php echo get_template_directory_uri(); ?>/assets/images/menu.png' class='img-fluid' alt='' title='' loading='lazy'>
            </div>
            <div class="col-md-12 text-center">
                <p>Menu</p>
                <ul class="list-inline">
                    <li>
                        <a href="/acervo">ACERVO DE IMAGENS</a>
                    </li>
                    <li>
                        <a href="/cadernos-e-livros-de-artistas">CADERNOS E LIVROS-DE-ARTISTAS</a>
                    </li>
                    <li>
                        <a href="/curriculo">Currículo</a>
                    </li>
                    <li>
                        <a href="/fortuna-critica">Fortuna crítica</a>
                    </li>
                    <li>
                        <a href="/outros-textos">OUTROS TEXTOS</a>
                    </li>
                    <li>
                        <a href="/blog">BLOG</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();
?>