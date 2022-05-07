<?php

$title        = get_field('nossos_cursos_title');
$subtitle     = get_field('nossos_cursos_subtitle');
$description  = get_field('nossos_cursos_description');
$post1        = get_field('nossos_cursos_post_1');
$post2        = get_field('nossos_cursos_post_2');
$post3        = get_field('nossos_cursos_post_3');

if ( ! $title || empty( $title ) ) {
	$title = 'Nossos Cursos';
};
/* if ( ! $subtitle || empty( $subtitle ) ) {
	$subtitle = 'Nossos Cursos';
}; */
/* if ( ! $description || empty( $description ) ) {
	$description = 'Libero dignissimos, tempore temporibus et nostrum, alias saepe praesentium ullam consequatur iure animi perspiciatis';
}; */


?>
<h3 class="cursos__title--back font-poppins text-pec-bluelight">
    CURSOS
</h3>
<h2 class="cursos__title--front title font-bold w-1/2 md:w-1/3 m-auto" data-anime="bottom">
    <?php
        echo $title
    ?>
</h2>
<?php if ( ! empty( $subtitle ) ) { ?>
    <h3 class="cursos__title--cursive mt-9 font-playfair text-pec-bluelight italic text-4xl md:text-6xl font-semibold w-1/2 md:w-1/3 m-auto" data-anime="back">
        <?php
            echo $subtitle
        ?>
    </h3>
<?php }
?>

<div class="border-b-4 border-pec-bluelight w-1/12 mx-auto my-16" data-anime="right"></div>
<h4 class="cursos__subtitle font-poppins mt-12 text-2xl w-5/6 md:w-1/3 m-auto" data-anime="left">
    <?php echo $description ?>
</h4>
<div class="cursos__wrapper grid grid-cols-1 md:grid-cols-3 mt-16 gap-12">
    <?php
    if ( is_object( $post1 ) ) {
        $pec_cursos_1_id   	     = $post1->ID;
        $pec_cursos_1_date       = get_field('curso_data', $pec_cursos_1_id);
        $pec_cursos_1_category	 = get_the_category($pec_cursos_1_id)[0]->name;
        $pec_cursos_1_title 	 = $post1->post_title;
        $pec_cursos_1_content 	 = $post1->post_content;
        $pec_cursos_1_image 	 = get_the_post_thumbnail_url($post1->ID, 'ProductImageList2');
        $pec_cursos_1_link       = get_the_permalink( $post1 );
        
        ?>
        <div class="cursos__curso rounded-2xl" data-anime="left" style="background-image: url()">
            <div class="cursos__curso--overlay"></div>
            <a href="<?php echo $pec_cursos_1_link ?>" class="cursos__curso--link relative w-full h-full transition-all duration-300">
                <img src="<?php echo $pec_cursos_1_image; ?>" alt="" class="cursos__curso--img">
                <div class="cursos__curso--content-wrapper">
                    <div class="cursos__curso--title text-left text-3xl mb-6 mt-3 font-semibold text-pec-bluelight">
                        <?php echo wp_trim_words( $pec_cursos_1_title, 12); ?>
                    </div>
                    <div class="border-b-2 border-pec-bluelight w-full mx-auto my-6"></div>
                    <div class="cursos__curso--content text-left text-3xl mb-6 transition-all font-semibold duration-300 text-white">
                        <?php echo wp_trim_words( $pec_cursos_1_content, 12); ?>
                    </div>
                    <div class="text-red text-white text-lg">
                        <i class="fas fa-calendar"></i> <?php echo $pec_cursos_1_date; echo "  Curso "; echo $pec_cursos_1_category ?>
                    </div>
                </div>
                <a href="<?php echo $pec_cursos_1_link ?>" class="cursos__curso--btn btn-wk rounded-2xl flex items-center justify-center bg-pec-bluedark text-white py-6 px-9 w-full text-center">
                    Saiba mais
                </a>
            </a>
        </div>
    <?php
    }
    if ( is_object( $post2 ) ) {
        $pec_cursos_2_id   	     = $post2->ID;
        $pec_cursos_2_date       = get_field('curso_data', $pec_cursos_2_id);
        $pec_cursos_2_category	 = get_the_category($pec_cursos_2_id)[0]->name;
        $pec_cursos_2_title 	 = $post2->post_title;
        $pec_cursos_2_content 	 = $post2->post_content;
        $pec_cursos_2_image 	 = get_the_post_thumbnail_url($post2->ID);
        $pec_cursos_2_link       = get_the_permalink( $post2 );
        ?>
        <div class="cursos__curso rounded-2xl" data-anime="bottom" style="background-image: url()">
            <div class="cursos__curso--overlay"></div>
            <a href="<?php echo $pec_cursos_2_link ?>" class="cursos__curso--link relative w-full h-full transition-all duration-300">
                <img src="<?php echo $pec_cursos_2_image; ?>" alt="" class="cursos__curso--img">
                <div class="cursos__curso--content-wrapper">
                    <div class="cursos__curso--title text-left text-3xl mb-6 mt-3 font-semibold text-pec-bluelight">
                        <?php echo wp_trim_words( $pec_cursos_2_title, 12); ?>
                    </div>
                    <div class="border-b-2 border-pec-bluelight w-full mx-auto my-6"></div>
                    <div class="cursos__curso--content text-left text-3xl mb-6 transition-all font-semibold duration-300 text-white">
                        <?php echo wp_trim_words( $pec_cursos_2_content, 12); ?>
                    </div>
                    <div class="text-red text-white text-lg">
                        <i class="fas fa-calendar"></i> <?php echo $pec_cursos_2_date; echo "  Curso "; echo $pec_cursos_2_category ?>
                    </div>
                </div>
                <a href="<?php echo $pec_cursos_2_link ?>" class="cursos__curso--btn btn-wk rounded-2xl flex items-center justify-center bg-pec-bluedark text-white py-6 px-9 w-full text-center">
                    Saiba mais
                </a>
            </a>
        </div>
    <?php
    }
    if ( is_object( $post3 ) ) {
        $pec_cursos_3_id   	     = $post3->ID;
        $pec_cursos_3_date       = get_field('curso_data', $pec_cursos_3_id);
        $pec_cursos_3_category	 = get_the_category($pec_cursos_3_id)[0]->name;
        $pec_cursos_3_title 	 = $post3->post_title;
        $pec_cursos_3_content 	 = $post3->post_content;
        $pec_cursos_3_image 	 = get_the_post_thumbnail_url($post3->ID);
        $pec_cursos_3_link       = get_the_permalink( $post3 );
        ?>
        <div class="cursos__curso rounded-2xl" data-anime="right" style="background-image: url()">
            <div class="cursos__curso--overlay"></div>
            <a href="<?php echo $pec_cursos_3_link ?>" class="cursos__curso--link relative w-full h-full transition-all duration-300">
                <img src="<?php echo $pec_cursos_3_image; ?>" alt="" class="cursos__curso--img">
                <div class="cursos__curso--content-wrapper">
                    <div class="cursos__curso--title text-left text-3xl mb-6 mt-3 font-semibold text-pec-bluelight">
                        <?php echo wp_trim_words( $pec_cursos_3_title, 12); ?>
                    </div>
                    <div class="border-b-2 border-pec-bluelight w-full mx-auto my-6"></div>
                    <div class="cursos__curso--content text-left text-3xl mb-6 transition-all font-semibold duration-300 text-white">
                        <?php echo wp_trim_words( $pec_cursos_3_content, 12); ?>
                    </div>
                    <div class="text-red text-white text-lg">
                        <i class="fas fa-calendar"></i></i> <?php echo $pec_cursos_3_date; echo "  Curso "; echo $pec_cursos_3_category ?>
                    </div>
                </div>
                <a href="<?php echo $pec_cursos_3_link ?>" class="cursos__curso--btn btn-wk rounded-2xl flex items-center justify-center bg-pec-bluedark text-white py-6 px-9 w-full text-center">
                    Saiba mais
                </a>
            </a>
        </div>
    <?php
    }

    ?>
</div>