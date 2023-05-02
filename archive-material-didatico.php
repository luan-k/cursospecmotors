<?php

if ( is_user_logged_in() ) {
	get_header();
		?>
			<div class="page-wraper">
				<section class="single-featured-image" style="background-image:url( <?php if(has_post_thumbnail(329)){ echo wp_get_attachment_url( get_post_thumbnail_id(329) ); } else { echo get_theme_file_uri('/images/standard.png'); }  ?>)" alt="" >
					<div class="container">
						<h1 class="title title-page"><?php post_type_archive_title() ?></h1>
					</div>

				</section>

				<div class="container content text-white wysiwyg">
					<div class="row">
						<div class="col-12">
							<div class="cursos__wrapper grid grid-cols-1 md:grid-cols-3 mt-16 gap-12">

								<?php
								wp_reset_postdata();
								$test = new WP_Query(array(
								'posts_per_page' => -1,
								'orderby' => 'date',
								'order' => 'ASC',
								'post_type' => 'material-didatico',
								));

								while($test->have_posts()){
									$test->the_post();

									$users 	  	  = get_field('users');
									$current_user = wp_get_current_user();
									$is_authorized_user = false;
									if($users){
										foreach($users as $user){
											if($user['ID'] == $current_user->ID || $current_user->caps['administrator'] ){
												$is_authorized_user = true;
											}else{
											}
										}
									}

									if($is_authorized_user){
										?>

										<div class="cursos__curso rounded-2xl overflow-hidden" data-anime="bottom" style="background-image: url()">
											<div class="cursos__curso--overlay"></div>
											<a href="<?php the_permalink(); ?>" class="cursos__curso--link relative w-full h-full transition-all duration-300">
												<img src="<?php if(has_post_thumbnail()){ the_post_thumbnail_url('full'); } else { echo get_theme_file_uri('/images/standard.png'); }  ?>" alt="" class="cursos__curso--img">
												<div class="cursos__curso--content-wrapper">
													<div class="cursos__curso--title text-left mb-6 mt-3 font-semibold text-white transition-all duration-300 hover:text-pec-bluelight">
														<?php echo wp_trim_words( the_title() , 15); ?>
													</div>
													<div class="border-b-2 border-pec-bluelight w-full mx-auto my-6"></div>
													<div class="cursos__curso--content text-left text-xl mb-6 transition-all font-semibold duration-300 text-white">
														<?php echo wp_trim_words( the_content(), 42); ?>
													</div>

												</div>
												<a href="<?php the_permalink(); ?>" class="cursos__curso--btn btn-wk rounded-2xl flex items-center justify-center bg-pec-bluedark text-white py-6 px-9 w-full text-center">
													Ver Curso
												</a>
											</a>
										</div>
									<?php }else{
									}
								} ?>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php } else {

	wp_redirect( home_url( '/wp-login.php' ) );
	exit();


}
    get_footer();

?>
