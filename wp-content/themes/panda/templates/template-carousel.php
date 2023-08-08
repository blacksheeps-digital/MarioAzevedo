<?php
/*
Template Name: Carousel
*/
get_header();
?>


<section class="carousel">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100 " id="lightgallery-carousel">
            <!-- <img alt="Nome ou Texto Da img" src="/assets/images/placeholder.png" />
            <img alt="teste" src="/assets/images/placeholder.png" /> -->

            <a href="#" id="openModal">
                <img src="/assets/images/placeholder.png" id="myImage" />
            </a>

            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <button id="zoomIn">+</button>
                <button id="zoomOut">-</button>
                <img class="modal-content" id="img01">
            </div>

        </div>
</section>





<?php
get_footer();
?>