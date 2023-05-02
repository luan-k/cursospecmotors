<?php get_header();
while(have_posts()){
the_post();

?>


</section>
<div class="container content text-white wysiwyg cursos-page">
    <section class="cursos text-center text-white relative font-poppins">
		<?php
		$local = get_terms(['taxonomy' => 'local', 'hide_empty' => false,]);

		$is_there_a_filter = false;
		$path = $_SERVER['REQUEST_URI'];
		$parts = explode("/", $path);
		$currentTaxonomy = array();
		$currentSubTaxonomy = array();
		$newParts = explode("cidade=", $path);
		if (count($newParts) > 1) {

			$lastElement = end($newParts);
			$lastElement = rtrim($lastElement, '/');
			$encoded = urldecode($lastElement);
		} else {

		}

		?>
		<div class="selection-wrapper flex flex-col">
			<label class="mb-12" for="cars">Escolha sua Cidade!</label>

        	<select name="cars" id="cars" class="bg-black text-center calendario-selection">
				<option value="Selecionar" >Selecionar</option>
				<?php
				foreach ( $local as $term ) {
					if($term->name == $encoded){
						$selected = " selected ";
						$is_there_a_filter = true;
					}else{
						$selected = " ";
					}
					echo '<option ' . $selected . ' value="' . $term->name . '">' . $term->name . '</option>';
				}
				?>
        	</select>
		</div>

        <div class="cursos__wrapper grid grid-cols-1 md:grid-cols-3 mt-16 gap-12 font-poppins"  id="course-cards">

            <?php

                $today = date('Ymd');
				if($is_there_a_filter){
					$upcomingCourses = new WP_Query(array(
						'posts_per_page' => -1,
						'post_type' => 'post',
						'meta_key' => 'curso_data',
						'orderby' => 'meta_value_num',
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'local',
								'field' => 'name',
								'terms' => $encoded,
							),
						),
					));
				}else{
					$upcomingCourses = new WP_Query(array(
					'posts_per_page' => -1,
					'post_type' => 'post',
					'meta_key' => 'curso_data',
					'orderby' => 'meta_value_num',
					'order' => 'ASC',
					'meta_query' => array(
						array(
						'key' => 'curso_data',
						'compare' => '>=',
						'value' => $today,
						'type' => 'numeric'
						)
					)
					));
				}
                while($upcomingCourses->have_posts() ) {
                    $upcomingCourses->the_post();?>
                    <div class="cursos__curso rounded-2xl" style="background-image: url()">
                        <div class="cursos__curso--overlay"></div>
                        <a href="<?php echo the_permalink(); ?>" class="cursos__curso--link relative w-full h-full transition-all duration-300">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'ProductImageList2') ?>" alt="" class="cursos__curso--img">
                            <div class="cursos__curso--content-wrapper">
                                <div class="cursos__curso--title text-left mb-6 mt-3 font-semibold text-pec-bluelight">
                                    <?php echo wp_trim_words( get_the_title(), 15); ?>
                                </div>
                                <div class="border-b-2 border-pec-bluelight w-full mx-auto my-6"></div>
                                <div class="cursos__curso--content text-left text-xl mb-6 transition-all font-semibold duration-300 text-white">
                                    <?php echo wp_trim_words( get_the_content(), 33); ?>
                                </div>
                                <div class="text-red text-white text-lg">
                                    <i class="fas fa-calendar"></i> <?php echo the_field('curso_data'); echo "  Curso "; echo get_the_category(get_the_ID())[0]->name ?>
                                </div>
                            </div>
                            <a href="<?php echo the_permalink(); ?>" class="cursos__curso--btn btn-wk rounded-2xl flex items-center justify-center bg-pec-bluedark text-white py-6 px-9 w-full text-center">
                                Saiba mais
                            </a>
                        </a>
                    </div>
                <?php
                }wp_reset_postdata();
            ?>
        </div>
        <?php
            $pastCourses = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'post',
                'meta_key' => 'curso_data',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                    'key' => 'curso_data',
                    'compare' => '<',
                    'value' => $today,
                    'type' => 'numeric'
                    )
                )
            ));
            if ( $pastCourses->have_posts() ) { ?>
                <h3 class="cursos__curso--title text-5xl mb-6 mt-28 font-semibold text-white font-poppins">
                    Cursos Anteriores
                </h3> <?php
            } ?>
        <div class="cursos__wrapper grid grid-cols-1 md:grid-cols-3 mt-16 gap-12 font-poppins">
            <?php
            while($pastCourses->have_posts() ) {
                $pastCourses->the_post();?>
                    <div class="cursos__curso rounded-2xl" style="background-image: url()">
                        <div class="cursos__curso--overlay"></div>
                        <a href="<?php echo the_permalink(); ?>" class="cursos__curso--link relative w-full h-full transition-all duration-300">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'ProductImageList2') ?>" alt="" class="cursos__curso--img">
                            <div class="cursos__curso--content-wrapper">
                                <div class="cursos__curso--title text-left mb-6 mt-3 font-semibold text-pec-bluelight">
                                    <?php echo wp_trim_words( get_the_title(), 15); ?>
                                </div>
                                <div class="border-b-2 border-pec-bluelight w-full mx-auto my-6"></div>
                                <div class="cursos__curso--content text-left text-xl mb-6 transition-all font-semibold duration-300 text-white">
                                    <?php echo wp_trim_words( get_the_content(), 33); ?>
                                </div>
                                <div class="text-red text-white text-lg">
                                    <i class="fas fa-calendar"></i> <?php echo the_field('curso_data'); echo "  Curso "; echo get_the_category(get_the_ID())[0]->name ?>
                                </div>
                            </div>
                            <a href="<?php echo the_permalink(); ?>" class="cursos__curso--btn btn-wk rounded-2xl flex items-center justify-center bg-pec-bluedark text-white py-6 px-9 w-full text-center">
                                Saiba mais
                            </a>
                        </a>
                    </div>
                <?php
            }wp_reset_postdata(); ?>
        </div>
    </section>
</div>

</div>

<script>
    function getCourseCards(local) {
        jQuery.ajax({
            url: '/wp-admin/admin-ajax.php',
            type: 'POST',
            data: {
                action: 'filter_courses',
                local: local,
            },
            beforeSend: function () {
                // Show loader or spinner
            },
            success: function (response) {
                jQuery('#course-cards').html(response);
            },
            error: function () {
                // Show error message
            },
        });
    }
    jQuery('#cars').on('change', function () {
		let result;
        let local = jQuery(this).val();
		/* const newUrl = window.location.href.replace(/\/cidade=.+/, ''); */
		const currentUrl = window.location.href;
		const newUrl = currentUrl.replace(/cidade=.+?(?=&|$)/, '');
		if(local == 'Selecionar'){
			history.pushState({}, '', newUrl);
		}else{
			result = "cidade=" + local;
			history.pushState({}, "", result);
		}

        getCourseCards(local);
    });
</script>

<?php
    }
    get_footer();

?>
