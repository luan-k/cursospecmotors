<?php get_header(); ?>

    <!-- slider -->
    <section class="slider-custom" id="slider-custom" data-anime="top">
        <?php echo do_shortcode('[ssslider id="5"]') ?>
    </section>

    <!-- cursos -->
    <section class="cursos text-center text-white pb-16 md:pb-32 pt-20 md:pt-44 relative" style="background-image: url(<?php echo get_theme_file_uri('./images/bg-instrutores.jpg')?>)">
		<div class="container">
    	   <?php the_content(); ?>
		</div>
    </section>

    <!-- marcas -->
    <section class="bem-vindo">
        <div class="grid grid-cols-1 md:grid-cols-2 space-x-9 h-full pt-40 pb-96 md:pb-80 px-3 md:px-20">
            <div class="container hidden md:block pt-40">
                <div class="composition">
                    <img data-anime="top" srcset="<?php echo get_theme_file_uri('./images/quem-somos-1.jpg')?> 300w, <?php echo get_theme_file_uri('./images/quem-somos-1-large.jpg ')?>1000w"
                        sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                        alt="Photo 1"
                        class="composition__photo composition__photo--p1"
                        src="<?php echo get_theme_file_uri('./images/quem-somos-1-large.jpg')?>">
                    <img data-anime="bottom" srcset="<?php echo get_theme_file_uri('./images/quem-somos-2.jpg')?> 300w, <?php echo get_theme_file_uri('./images/quem-somos-2-large.jpg')?> 1000w"
                                    sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                        alt="Photo 2"
                        class="composition__photo composition__photo--p2"
                        src="<?php echo get_theme_file_uri('./images/quem-somos-2-large.jpg')?>">

                    <img data-anime="right" srcset="<?php echo get_theme_file_uri('./images/quem-somos-3.jpg ')?> 300w, <?php echo get_theme_file_uri('./images/quem-somos-3-large.jpg')?> 1000w"
                        sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                        alt="Photo 3"
                        class="composition__photo composition__photo--p3"
                        src="<?php echo get_theme_file_uri('./images/quem-somos-3-large.jpg')?>">

                </div>
            </div>
            <div class="space-y-9 text-pec-graymid">
                <h2 class="title font-poppins font-bold text-center" data-anime="top">Sobre Nós</h2>
                <p class="generic-text text-4xl" data-anime="right">
                    Há mais de 20 anos atuando no mercado automotivo,
                    com grande know how em manutenção preventiva no
                    segmento de transmissões automáticas e lubrificação,
                    o grupo PECMOTORS agora também possui cursos para
                    aprimorar ainda mais a qualificação técnica de nossos clientes.
                </p>
                <p class="generic-text text-4xl" data-anime="right">
                    Já são mais de 300 alunos certificados.
                    Nesse anseio de sempre passar informações
                    de alta qualidade a nossos parceiros,
                    criamos o nosso Centro Técnico Pecmotors
                    em Curitiba, ambiente conceito para você aprender mais.

                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 md:gap-x-36 mt-9" data-anime="bottom">
                    <div class="btn-wraper justify-start mb-9 md:mb-0">
                        <a href="<?php echo esc_url(site_url('/sobre-nos')); ?>" class="btn-wk flex items-center justify-center bg-pec-bluedark text-white rounded-full py-6 px-9 w-full text-center">
                            Saiba Mais
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- DEPOIMENTOS -->
    <section class="depoimentos px-0 text-center text-white relative" id="depoimentos" data-anime="bottom">
        <h2 class="cursos__title--front title font-bold w-11/12 md:w-1/3 m-auto" data-anime="right">
            O que os alunos dizem sobre
        </h2>
        <h3 data-anime="left" class="cursos__title--cursive mt-3 font-playfair text-pec-bluelight italic text-7xl font-bold w-11/12 md:w-1/3 m-auto">
            nossos cursos
        </h3>
        <div data-anime="right" class="border-b-4 border-pec-bluelight w-1/12 mx-auto mt-16 mb-80"></div>

        <div class="depoimentos__wrapper relative slider slider_depoimentos pb-12" style="background-image: url(<?php echo get_theme_file_uri('./images/depoimentos.jpg') ?>)">
            <input id="radio-depoimentos" type="radio" name="slider-depoimentos" title="slide1" checked="checked" class="slider__nav radio-depoimentos" data-anime="left" />
            <input id="radio-depoimentos-1" type="radio" name="slider-depoimentos" title="slide2" class="slider__nav radio-depoimentos" data-anime="bottom" />
            <input id="radio-depoimentos-2" type="radio" name="slider-depoimentos" title="slide3" class="slider__nav radio-depoimentos" data-anime="right" />
            <div class="depoimentos__slider-wrapper slider__inner slider__inner_depoimentos" >
                <div class="depoimentos__slide relative slider__contents" id="slide-1">
                    <img src="<?php echo get_theme_file_uri('./images/depoimentos-1.jpg') ?>" class="depoimentos__foto" data-anime="bottom" alt="">
                    <div class="depoimentos__foto--border"></div>
                    <div class="depoimentos__inner-wrapper text-white">
                        <div class="depoimentos__content text-center text-3xl leading-loose">
                            O curso foi na medida, muito bom para quem quer seguir
                            carreira na área, o instrutor é muito bom com a didática
                            é fácil de entender e faz as pessoas interagirem o que é importante.
                        </div>
                        <div class="depoimentos__title text-4xl mt-20 font-poppins text-center font-bold">VALDECIR</div>
                        <div class="depoimentos__subtitle text-3xl mt-6 text-pec-bluelight text-center">VALDECIR AUTOMÁTICOS</div>
                    </div>
                </div>
                <div class="depoimentos__slide relative slider__contents" id="slide-2">
                    <img src="<?php echo get_theme_file_uri('./images/depoimentos-2.jpg') ?>" class="depoimentos__foto" data-anime="bottom" alt="">
                    <div class="depoimentos__foto--border"></div>
                    <div class="depoimentos__inner-wrapper text-white">
                        <div class="depoimentos__content text-center text-3xl leading-loose">
                            Curso top demais, instrutor nota 10, explicação bem detalhada.
                        </div>
                        <div class="depoimentos__title text-4xl mt-20 font-poppins text-center font-bold">Fernando </div>
                        <div class="depoimentos__subtitle text-3xl mt-6 text-pec-bluelight text-center">MERCADO DO ÓLEO</div>
                    </div>
                </div>
                <div class="depoimentos__slide relative slider__contents" id="slide-3">
                    <img src="<?php echo get_theme_file_uri('./images/depoimentos-3.jpg') ?>" class="depoimentos__foto" data-anime="bottom" alt="">
                    <div class="depoimentos__foto--border"></div>
                    <div class="depoimentos__inner-wrapper text-white">
                        <div class="depoimentos__content text-center text-3xl leading-loose">
                            Gostei muito do curso, o instrutor têm excelente didática, superou as expectativas.
                        </div>
                        <div class="depoimentos__title text-4xl mt-20 font-poppins text-center font-bold">DEMA</div>
                        <div class="depoimentos__subtitle text-3xl mt-6 text-pec-bluelight text-center">BRAVO LUBRIFICANTES</div>
                    </div>
                </div>
            </div>
            <div class="depoimentos__overlay"></div>
        </div>

    </section>

    <section class="instrutores pb-16 md:pb-32 pt-20 md:pt-44 relative" style="background-image: url(<?php echo get_theme_file_uri('./images/bg-instrutores.jpg')?>)">
        <div class="instrutores__wrapper relative slider slider_instrutores" data-anime="right">
            <input id="radio-instrutores" type="radio" name="slider-instrutores" title="slide1" checked="checked" class="slider__nav radio-instrutores"/>
            <input id="radio-instrutores-1" type="radio" name="slider-instrutores" title="slide2" class="slider__nav radio-instrutores"/>
            <!-- <input id="radio-instrutores-2" type="radio" name="slider-instrutores" title="slide3" class="slider__nav radio-instrutores"/> -->
            <div class="instrutores__slider-wrapper slider__inner slider__inner_instrutores">
                <div class="instrutores__slide relative slider__contents" id="slide-1">
                    <div class="instrutores__slide--wrapper">
                        <div class="instrutores__slide--content-wrapper text-white" style="background-image: url(<?php echo get_theme_file_uri('./images/instrutor-1.png')?>)">
                            <div class=" w-3/5">
                                <h3 class="font-semibold uppercase instrutores__slide lg:text-5xl 2xl:text-7xl md:text-4xl text-lg font-poppins">
                                    Nossos Instrutores:
                                </h3>
                                <h3 class="font-semibold instrutores__slide--title  lg:text-6xl 2xl:text-8xl md:text-4xl text-lg font-poppins text-pec-bluelight">
                                    Ederson Luis Bilck
                                </h3>
                            </div>
                            <p class="instrutores__slide--content text-xs md:text-2xl lg:text-3xl 2xl:text-4xl  w-3/5">
                                Consultor técnico Pecmotors responsável pelo setor técnico, possui
                                mais de 8 anos de experiência no ramo de Lubrificantes, transmissões
                                e veículos híbridos, possui mais de 40 cursos de manutenção em
                                transmissões, rede can, injeção, veículos híbridos e sistemas anexos,
                                possui especializações nos Estados Unidos e México.
                            </p>
                            <a href="<?php echo esc_url(site_url('/instrutores')); ?>" class="btn-wk text-xs md:text-4xl flex items-center justify-center bg-pec-bluedark text-white rounded md:rounded-2xl py-2 px-3 md:py-6 md:px-9 w-3/5 text-center">
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                </div>
                <div class="instrutores__slide relative slider__contents" id="slide-2">
                    <div class="instrutores__slide--wrapper">
                        <div class="instrutores__slide--content-wrapper text-white" style="background-image: url(<?php echo get_theme_file_uri('./images/instrutor-2.png')?>)">
                            <div class=" w-3/5">
                                <h3 class="font-semibold uppercase instrutores__slide lg:text-5xl 2xl:text-7xl md:text-4xl text-lg font-poppins">
                                    Nossos Instrutores:
                                </h3>
                                <h3 class="font-semibold instrutores__slide--title  lg:text-6xl 2xl:text-8xl md:text-4xl text-lg font-poppins text-pec-bluelight">
                                    Luiz Gouveia
                                </h3>
                            </div>
                            <p class="instrutores__slide--content text-xs md:text-2xl lg:text-3xl 2xl:text-4xl  w-3/5">
                                Luiz Gouveia é Gerente comercial e técnico do Grupo Pecmotors,
                                possui diversos cursos na área de gestão de pessoas e negócios,
                                possui mais de 15 anos de experiencia em comercio e atendimento,
                                especializando-se em lubrificantes e suas características,
                                aplicações e normas. Especializado em veículos híbridos e
                                elétricos assim como em transmissões automáticas.
                            </p>
                            <a href="<?php echo esc_url(site_url('/instrutores')); ?>" class="btn-wk text-xs md:text-4xl flex items-center justify-center bg-pec-bluedark text-white rounded md:rounded-2xl py-2 px-3 md:py-6 md:px-9 w-3/5 text-center">
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                </div>
                <div class="instrutores__slide relative slider__contents" id="slide-3">
                    3
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
