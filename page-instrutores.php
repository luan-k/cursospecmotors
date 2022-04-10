<?php get_header(); 
while(have_posts()){
the_post();

?>


</section>
<div class=" content text-white wysiwyg instrutores-page px-12">
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
                    <div class="instrutores__slide--wrapper">
                        <div class="instrutores__slide--content-wrapper text-white" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'instrutoresImage') ?>)">
                            <div class=" w-3/5">
                                <h3 class="font-semibold uppercase instrutores__slide text-7xl font-poppins">
                                    Nossos Instrutores:
                                </h3>
                                <h3 class="font-semibold instrutores__slide--title text-8xl font-poppins text-pec-bluelight">
                                    <?php echo get_the_title(); ?>
                                </h3>
                            </div>
                            <p class="instrutores__slide--content text-4xl w-3/5">
                                <?php echo get_the_content() ?>
                            </p>
                            <a href="<?php echo esc_url(site_url('/instrutores')); ?>" class="btn-wk flex items-center justify-center bg-pec-bluedark text-white rounded-2xl py-6 px-9 w-3/5 text-center">
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