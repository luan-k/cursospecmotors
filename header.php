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
                <!-- <div class="bg-dark-primary max-w-full">
                    <div class="max-w mx-auto container ">
                        <div class="flex justify-center md:justify-between">

                           

                           
                            <div class="icon-nav hidden md:flex items-center text-2xl space-x-4">
                                <a target="_blank" class="py-5 px-3 text-white" href="https://web.whatsapp.com/send?phone=5548984791962&text=Ol%C3%A1!%20vim%20do%20Instaly%20Calhas.%20Estava%20olhando%20a%20p%C3%A1gina%20In%C3%ADcio.%20Pode%20me%20ajudar%3F"><i class="text-green-primary fab fa-whatsapp"></i> (48) 998479-1962</a>
                                <a target="_blank" class="py-5 px-3 text-white" href="tel:4830333277" ><i class="text-green-primary fas fa-phone-alt"></i> (48) 3033-3277</a>
                                <a target="_blank" class="py-5 px-3 text-white" href="https://www.facebook.com/instalycalhasflorianopolis/"><i class="text-green-primary fab fa-facebook-f"></i></a>
                                <a target="_blank" class="py-5 px-3 text-white" href="<?php echo esc_url(site_url('/contato')); ?>"><i class="text-green-primary far fa-envelope"></i></a>
                                <a target="_blank" href="#" class="py-5 px-3 text-white"><i class="text-green-primary fab fa-instagram"></i></i></a>
                                <a target="_blank" href="#" class="py-5 px-3 text-white"><i class="text-green-primary fab fa-twitter"></i></a>                            
                                <a target="_blank" href="#" class="py-5 px-3 text-white"><i class="text-green-primary fab fa-youtube"></i></a>
                            </div>                                        
                        </div>
                    </div>
                </div> -->
                <div class="grid grid-cols-2 md:grid-cols-6 container header-inside max-w-full text-3xl  space-x-12 font-medium menu-mob" id="navbarNavAltMarkup">
                     <!-- logo -->
                    <div class="logo-wrape inline w-64 m-auto py-5">
                        <a class="" href="<?php echo esc_url(site_url()); ?>">
                            <img class="logo w-full" src="<?php echo get_theme_file_uri('/images/logo-light.svg')?>" alt="">
                        </a>
                    </div>
                    <ul class="relative flex items-center col-span-1 md:col-span-4">
                        <li  class="btn-nav <?php if (is_page('inicio')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/inicio')); ?>" class=" py-5 px-6 text-white">Início </a></li>
                        <li class="btn-nav <?php if (is_page('sobre-nos')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/sobre-nos')); ?>" class=" py-5 px-6 text-white">Sobre nós </a></li>
                        <li class="btn-nav <?php if (is_page('cursos-presenciais') OR get_post_type() == 'post') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/cursos-presenciais')); ?>" class=" py-5 px-6 text-white">Cursos Presenciais </a></li>
                        <li class="btn-nav <?php if (is_page('cursos-a-distancia') OR get_post_type() == 'post') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/cursos-a-distancia')); ?>" class=" py-5 px-6 text-white">Cursos á Distancia </a></li>
                        <li class="btn-nav <?php if (is_page('calendario-de-cursos')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/calendario-de-cursos')); ?>" class=" py-5 px-6 text-white">Calendario de Cursos </a></li>
                        <li class="btn-nav <?php if (is_page('instrutores') OR get_post_type() == 'instrutor') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/instrutores')); ?>" class=" py-5 px-6 text-white">Instrutores </a></li>
                        <li class="btn-nav <?php if (is_page('contato')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/contato')); ?>" class=" py-5 px-6 text-white">Contato </a></li>
                        
                        <li class="wrapper ml-auto">
                            <a >
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                
            </nav>
        </header>