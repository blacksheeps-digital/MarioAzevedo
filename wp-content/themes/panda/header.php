<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package panda
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <header>
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4 ps-0">
                        <ul class="list-inline d-none d-lg-block">
                            <li class="list-inline-item">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.2" height="22.4" viewBox="0 0 31.2 22.4">
                                        <g id="Grupo_2808" data-name="Grupo 2808" transform="translate(-7.8 -19.8)">
                                            <path id="Caminho_8416" data-name="Caminho 8416" d="M11.3,20A3.356,3.356,0,0,0,8,23.38V38.608A3.366,3.366,0,0,0,11.3,42H35.5a3.366,3.366,0,0,0,3.3-3.392V23.38A3.356,3.356,0,0,0,35.5,20Zm.161,2.2H35.351l-11.3,10.725a.849.849,0,0,1-1.283,0ZM10.2,24.033l7.494,7.1L10.2,38.608Zm26.4,0V38.608l-7.471-7.482Zm-9.052,8.605L34.686,39.8H12.125l7.161-7.15,1.971,1.868a3.155,3.155,0,0,0,4.308,0Z" stroke="#fff" stroke-width="0.4" />
                                        </g>
                                    </svg>
                                    <span>E-mail</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.031" height="23.016" viewBox="0 0 22.031 23.016">
                                        <g id="Grupo_2807" data-name="Grupo 2807" transform="translate(-38.133 -29.5)">
                                            <g id="Grupo_2806" data-name="Grupo 2806" transform="translate(36.223 30)">
                                                <path id="Caminho_8417" data-name="Caminho 8417" d="M12.926,0A10.526,10.526,0,0,0,2.41,10.516a10.394,10.394,0,0,0,2.159,6.377L2.915,21.375a.5.5,0,0,0,.11.488.414.414,0,0,0,.488.1l4.9-1.949a10.39,10.39,0,0,0,4.51,1.024A10.517,10.517,0,0,0,12.926,0Zm0,20.117A9.543,9.543,0,0,1,8.639,19.1a.46.46,0,0,0-.375-.017L4.132,20.729l1.385-3.757a.466.466,0,0,0-.072-.447,9.478,9.478,0,0,1-2.121-6.009,9.6,9.6,0,1,1,9.6,9.6Z" stroke="#000" stroke-width="1" />
                                            </g>
                                            <path id="Caminho_8418" data-name="Caminho 8418" d="M21.443,17.209a.574.574,0,0,0-.159-.286l-.96-.96a.591.591,0,0,0-.561-.154,1.612,1.612,0,0,0-.981.7,1.173,1.173,0,0,0-.129.3.414.414,0,0,1-.127.226.1.1,0,0,1-.049,0,7.5,7.5,0,0,1-1.9-1.479,7.635,7.635,0,0,1-1.47-1.876.1.1,0,0,1-.006-.068.4.4,0,0,1,.228-.127,1.273,1.273,0,0,0,.3-.127,1.617,1.617,0,0,0,.7-.981.591.591,0,0,0-.154-.561l-.96-.96a.58.58,0,0,0-.288-.159,1.35,1.35,0,0,0-1.113.453,2.411,2.411,0,0,0-.785,2.143A6.549,6.549,0,0,0,15.132,17a6.535,6.535,0,0,0,3.706,2.1,2.05,2.05,0,0,0,.347.027,2.369,2.369,0,0,0,1.787-.791A1.372,1.372,0,0,0,21.443,17.209Z" transform="translate(31.916 25.638)" />
                                        </g>
                                    </svg>

                                    <span>Whatsapp</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                        <g id="Grupo_2791" data-name="Grupo 2791" transform="translate(-556 -3245)">
                                            <g id="Grupo_196" data-name="Grupo 196" transform="translate(556 3245)">
                                                <path id="Caminho_24" data-name="Caminho 24" d="M-62.875-133.268h-8.25A6.876,6.876,0,0,0-78-126.393v8.25a6.876,6.876,0,0,0,6.875,6.875h8.25A6.876,6.876,0,0,0-56-118.143v-8.25a6.876,6.876,0,0,0-6.875-6.875Zm4.812,15.125a4.818,4.818,0,0,1-4.812,4.812h-8.25a4.818,4.818,0,0,1-4.813-4.812v-8.25a4.818,4.818,0,0,1,4.813-4.813h8.25a4.818,4.818,0,0,1,4.812,4.813Zm0,0" transform="translate(78 133.268)" />
                                                <path id="Caminho_25" data-name="Caminho 25" d="M29.9-30.87a5.5,5.5,0,0,0-5.5,5.5,5.5,5.5,0,0,0,5.5,5.5,5.5,5.5,0,0,0,5.5-5.5,5.5,5.5,0,0,0-5.5-5.5Zm0,8.938a3.442,3.442,0,0,1-3.437-3.437A3.441,3.441,0,0,1,29.9-28.807a3.441,3.441,0,0,1,3.437,3.437A3.442,3.442,0,0,1,29.9-21.932Zm0,0" transform="translate(-18.898 36.37)" />
                                                <path id="Caminho_26" data-name="Caminho 26" d="M224.7-51.461a.733.733,0,0,1-.733.733.733.733,0,0,1-.733-.733.733.733,0,0,1,.733-.733.733.733,0,0,1,.733.733Zm0,0" transform="translate(-207.055 56.549)" stroke="#000" stroke-width="0.6" />
                                            </g>
                                        </g>
                                    </svg>

                                    <span>Instagram</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.659" height="24.674" viewBox="0 0 24.659 24.674">
                                        <path id="noun-magnifying-glass-205232" d="M149.019,93.329a9.016,9.016,0,0,1,9.016,9.017,8.922,8.922,0,0,1-2.178,5.868l7.838,7.838-.985.985-7.837-7.838a9.015,9.015,0,1,1-5.854-15.87m0,1.387a7.629,7.629,0,1,0,7.629,7.629,7.625,7.625,0,0,0-7.629-7.629Z" transform="translate(-139.602 -92.929)" stroke="#000" stroke-width="0.8" />
                                    </svg>

                                    <span>Busca</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/logo.png' class='img-fluid' alt='' title='' loading='lazy'>
                        </a>
                    </div>
                    <div class="col-4 text-end">

                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalXl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="22" viewBox="0 0 45 22">
                                <g id="Grupo_2790" data-name="Grupo 2790" transform="translate(-1826 -30)">
                                    <rect id="Retângulo_2" data-name="Retângulo 2" width="45" height="2" rx="1" transform="translate(1826 30)" />
                                    <rect id="Retângulo_3" data-name="Retângulo 3" width="45" height="2" rx="1" transform="translate(1826 40)" />
                                    <rect id="Retângulo_4" data-name="Retângulo 4" width="45" height="2" rx="1" transform="translate(1826 50)" />
                                </g>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="modal fade m-0" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header justify-content-end" style="position:absolute; right: 20px; z-index: 9999;">
                        <a data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33.235" height="33.234" viewBox="0 0 33.235 33.234">
                                <rect id="Retângulo_379" data-name="Retângulo 379" width="45" height="2" rx="1" transform="translate(1.415) rotate(45)" />
                                <rect id="Retângulo_380" data-name="Retângulo 380" width="45" height="2" rx="1" transform="translate(33.234 1.414) rotate(135)" />
                            </svg>

                        </a>
                    </div>
                    <div class="modal-body">
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
                                            <li>
                                                <ul class="list-inline mob-nav">
                                                    <li class="list-inline-item">
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="31.2" height="22.4" viewBox="0 0 31.2 22.4">
                                                                <g id="Grupo_2808" data-name="Grupo 2808" transform="translate(-7.8 -19.8)">
                                                                    <path id="Caminho_8416" data-name="Caminho 8416" d="M11.3,20A3.356,3.356,0,0,0,8,23.38V38.608A3.366,3.366,0,0,0,11.3,42H35.5a3.366,3.366,0,0,0,3.3-3.392V23.38A3.356,3.356,0,0,0,35.5,20Zm.161,2.2H35.351l-11.3,10.725a.849.849,0,0,1-1.283,0ZM10.2,24.033l7.494,7.1L10.2,38.608Zm26.4,0V38.608l-7.471-7.482Zm-9.052,8.605L34.686,39.8H12.125l7.161-7.15,1.971,1.868a3.155,3.155,0,0,0,4.308,0Z" stroke="#fff" stroke-width="0.4" />
                                                                </g>
                                                            </svg>
                                                            <span>E-mail</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.031" height="23.016" viewBox="0 0 22.031 23.016">
                                                                <g id="Grupo_2807" data-name="Grupo 2807" transform="translate(-38.133 -29.5)">
                                                                    <g id="Grupo_2806" data-name="Grupo 2806" transform="translate(36.223 30)">
                                                                        <path id="Caminho_8417" data-name="Caminho 8417" d="M12.926,0A10.526,10.526,0,0,0,2.41,10.516a10.394,10.394,0,0,0,2.159,6.377L2.915,21.375a.5.5,0,0,0,.11.488.414.414,0,0,0,.488.1l4.9-1.949a10.39,10.39,0,0,0,4.51,1.024A10.517,10.517,0,0,0,12.926,0Zm0,20.117A9.543,9.543,0,0,1,8.639,19.1a.46.46,0,0,0-.375-.017L4.132,20.729l1.385-3.757a.466.466,0,0,0-.072-.447,9.478,9.478,0,0,1-2.121-6.009,9.6,9.6,0,1,1,9.6,9.6Z" stroke="#000" stroke-width="1" />
                                                                    </g>
                                                                    <path id="Caminho_8418" data-name="Caminho 8418" d="M21.443,17.209a.574.574,0,0,0-.159-.286l-.96-.96a.591.591,0,0,0-.561-.154,1.612,1.612,0,0,0-.981.7,1.173,1.173,0,0,0-.129.3.414.414,0,0,1-.127.226.1.1,0,0,1-.049,0,7.5,7.5,0,0,1-1.9-1.479,7.635,7.635,0,0,1-1.47-1.876.1.1,0,0,1-.006-.068.4.4,0,0,1,.228-.127,1.273,1.273,0,0,0,.3-.127,1.617,1.617,0,0,0,.7-.981.591.591,0,0,0-.154-.561l-.96-.96a.58.58,0,0,0-.288-.159,1.35,1.35,0,0,0-1.113.453,2.411,2.411,0,0,0-.785,2.143A6.549,6.549,0,0,0,15.132,17a6.535,6.535,0,0,0,3.706,2.1,2.05,2.05,0,0,0,.347.027,2.369,2.369,0,0,0,1.787-.791A1.372,1.372,0,0,0,21.443,17.209Z" transform="translate(31.916 25.638)" />
                                                                </g>
                                                            </svg>

                                                            <span>Whatsapp</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                                                <g id="Grupo_2791" data-name="Grupo 2791" transform="translate(-556 -3245)">
                                                                    <g id="Grupo_196" data-name="Grupo 196" transform="translate(556 3245)">
                                                                        <path id="Caminho_24" data-name="Caminho 24" d="M-62.875-133.268h-8.25A6.876,6.876,0,0,0-78-126.393v8.25a6.876,6.876,0,0,0,6.875,6.875h8.25A6.876,6.876,0,0,0-56-118.143v-8.25a6.876,6.876,0,0,0-6.875-6.875Zm4.812,15.125a4.818,4.818,0,0,1-4.812,4.812h-8.25a4.818,4.818,0,0,1-4.813-4.812v-8.25a4.818,4.818,0,0,1,4.813-4.813h8.25a4.818,4.818,0,0,1,4.812,4.813Zm0,0" transform="translate(78 133.268)" />
                                                                        <path id="Caminho_25" data-name="Caminho 25" d="M29.9-30.87a5.5,5.5,0,0,0-5.5,5.5,5.5,5.5,0,0,0,5.5,5.5,5.5,5.5,0,0,0,5.5-5.5,5.5,5.5,0,0,0-5.5-5.5Zm0,8.938a3.442,3.442,0,0,1-3.437-3.437A3.441,3.441,0,0,1,29.9-28.807a3.441,3.441,0,0,1,3.437,3.437A3.442,3.442,0,0,1,29.9-21.932Zm0,0" transform="translate(-18.898 36.37)" />
                                                                        <path id="Caminho_26" data-name="Caminho 26" d="M224.7-51.461a.733.733,0,0,1-.733.733.733.733,0,0,1-.733-.733.733.733,0,0,1,.733-.733.733.733,0,0,1,.733.733Zm0,0" transform="translate(-207.055 56.549)" stroke="#000" stroke-width="0.6" />
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                            <span>Instagram</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24.659" height="24.674" viewBox="0 0 24.659 24.674">
                                                                <path id="noun-magnifying-glass-205232" d="M149.019,93.329a9.016,9.016,0,0,1,9.016,9.017,8.922,8.922,0,0,1-2.178,5.868l7.838,7.838-.985.985-7.837-7.838a9.015,9.015,0,1,1-5.854-15.87m0,1.387a7.629,7.629,0,1,0,7.629,7.629,7.625,7.625,0,0,0-7.629-7.629Z" transform="translate(-139.602 -92.929)" stroke="#000" stroke-width="0.8" />
                                                            </svg>

                                                            <span>Busca</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>