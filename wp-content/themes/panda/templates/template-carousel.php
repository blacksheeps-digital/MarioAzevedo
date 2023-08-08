<?php
/*
Template Name: Carousel
*/
get_header();
?>


<section class="carousel">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100 slick-slider " id="lightgallery-carousel">

            <a href="#" id="openModal" class="d-block col-md-8">
                <img src="/assets/images/placeholder.png" id="myImage" class="img-fluid w-100" />
            </a>



        </div>
</section>
<div id="myModal" class="modal">
    <span class="close">&#10006;</span> <!-- X symbol -->
    <button id="zoomIn">&#128269;+</button> <!-- Magnifying glass with + -->
    <button id="zoomOut">&#128269;-</button> <!-- Magnifying glass with - -->
    <img class="modal-content" id="img01">
</div>





<?php
get_footer();
?>