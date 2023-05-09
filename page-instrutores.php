<?php get_header(); 
while(have_posts()){
the_post();

?>


</section>
<div class=" content text-white wysiwyg instrutores-page">
    <section class="cursos text-white relative font-poppins pt-36">
        <div class="cursos__wrapper grid grid-cols-1 mt-16 gap-12 font-poppins">

            <?php 
                $instructorPage = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'instrutores',
                'orderby' => 'date',
                'order' => 'DESC',
                ));
                while($instructorPage->have_posts() ) {
                    $instructorPage->the_post();?>
                    <div class="instrutores__slide--wrapper instrutores-page">
                        <div class="instrutores__slide--content-wrapper text-white" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'instrutoresImage') ?>)">
                            <div class=" w-3/5">
                                <h3 class="font-semibold uppercase instrutores__slide lg:text-5xl 2xl:text-7xl md:text-4xl text-lg font-poppins">
                                    Nossos Instrutores:
                                </h3>
                                <h3 class="font-semibold instrutores__slide--title  lg:text-6xl 2xl:text-8xl md:text-4xl text-lg font-poppins text-pec-bluelight">
                                    <?php echo get_the_title(); ?>
                                </h3>
                            </div>
                            <div class="instrutores__slide--content md:text-2xl lg:text-3xl 2xl:text-4xl  w-3/5">
                                <?php echo get_the_content() ?>
                            </div>
                            <a target="_blank" href="https://web.whatsapp.com/send?phone=5541996810097&text=Olá!%20vim%20do%20Cursos%20Pecmotors.%20Estava%20olhando%20a%20página%20Instrutores.%20Pode%20me%20ajudar%3F" class="btn-wk text-xs md:text-4xl flex items-center justify-center bg-pec-bluedark text-white rounded md:rounded-2xl py-2 px-3 md:py-6 md:px-9 w-3/5 text-center">
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                <?php
                }wp_reset_postdata();
            ?>
        </div>
    </section>
</div>


</div>

<?php
    }
    get_footer();

?>