<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <? wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div class="wraper <?php if(is_single() OR is_page('cursos-presenciais') OR is_page('cursos-a-distancia') OR is_page('calendario-de-cursos') OR get_post_type() == 'post'){ echo ' instrutores-page '; } ?>" >
        <header id="header" class="header" data-anime="top">
            <nav>
                <div class="relative grid grid-cols-2 md:grid-cols-6 container header-inside max-w-full text-3xl  space-x-12 font-medium menu-mob" id="navbarNavAltMarkup">
                     <!-- logo -->
                    <div class="logo-wrape inline w-64 m-auto py-5">
                        <a class="" href="<?php echo esc_url(site_url()); ?>">
                            <img class="logo w-full" src="<?php echo get_theme_file_uri('/images/logo-light.svg')?>" alt="">
                        </a>
                    </div>
                    <ul class=" flex items-center col-span-1 md:col-span-4">
                        <li  class="btn-nav <?php if (is_page('inicio')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/inicio')); ?>" class=" py-5 px-6 text-white">Início </a></li>
                        <li class="btn-nav <?php if (is_page('sobre-nos')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/sobre-nos')); ?>" class=" py-5 px-6 text-white">Sobre nós </a></li>
                        <li class="btn-nav <?php if (is_page('cursos-presenciais') OR get_post_type() == 'post') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/cursos-presenciais')); ?>" class=" py-5 px-6 text-white">Cursos Presenciais </a></li>
                        <li class="btn-nav <?php if (is_page('cursos-a-distancia') OR get_post_type() == 'post') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/cursos-a-distancia')); ?>" class=" py-5 px-6 text-white">Cursos á Distancia </a></li>
                        <li class="btn-nav <?php if (is_page('calendario-de-cursos')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/calendario-de-cursos')); ?>" class=" py-5 px-6 text-white">Calendario de Cursos </a></li>
                        <li class="btn-nav <?php if (is_page('instrutores') OR get_post_type() == 'instrutor') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/instrutores')); ?>" class=" py-5 px-6 text-white">Instrutores </a></li>
                        <li class="btn-nav <?php if (is_page('contato')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/contato')); ?>" class=" py-5 px-6 text-white">Contato </a></li>
                        <li class="btn-nav <?php if (is_page('material-didatico')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/material-didatico')); ?>" class=" py-5 px-6 text-white">Área do Aluno </a></li>

                        <li class="wrapper ml-auto">
                            <a >
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>

                    </ul>
                </div>

            </nav>
        </header>
