<?php

// the chalenge of this code is getting the informations of the
// supposed parent, but since this post is not a direct child
// it becomes challenging. so what i did was take all available
// cources and compare them with the current ID (1)
// then when we find the parent post of this one we will have
// access to the users authorized to look at this particular
// apostila. after that the is_correct_post is set to true.
// then if is_the_correct_post_id we need to find the users,
// but since this is a while loop, the is_authorized_user would
// be set to false every loop. so i did a conditional to make sure
// that if thats true then ignore.
// then we check if the current user is authorized.
$single_pdf   = get_field('apostila_pdf');

get_header();

 if ( is_user_logged_in() ) {
		// (1)
		$current_post_id = get_the_ID();

		$materialDidaticoData = new WP_Query(array(
        'post_type' => array('material-didatico'),
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC' ,
        ));

        while($materialDidaticoData->have_posts()){
            $materialDidaticoData->the_post(); ?>
			<div class="text-white mt-52">
				<?php

				$users 	  	  = get_field('users');
				$post_pdf 	  = get_field('pdf_post');

				$is_correct_post_id = false;
				$current_user = wp_get_current_user();

				// (1)
				foreach($post_pdf as $pdf_id){

					if($current_post_id === $pdf_id){

						if($is_correct_post_id === false){
							$is_correct_post_id = true;
						}

					}else{

					}
				}

				if($is_correct_post_id){
					if($is_authorized_user){

					}else{
						$is_authorized_user = false;
					}

					foreach($users as $user){
						if($user['ID'] == $current_user->ID || $current_user->caps['administrator'] ){

							if($is_authorized_user == false){
								$is_authorized_user = true;
							}
						}else{

						}
					}

				}


				?>
			</div>

        <?php }

	if($is_authorized_user){
		wp_reset_postdata();

		while(have_posts()){
			the_post();
			?>
			<div class="page-wraper">

				<div class="container content text-white wysiwyg">
					<?php
					?>
					<div class="row">
						<div class="col-12" id="blocked-pdf" oncontextmenu="return false" >
							<?php
							echo do_shortcode('[pdfjs-viewer url="' . $single_pdf['url'] . '" viewer_width=100% viewer_height=1000px fullscreen=false download=false print=false]') ?>
						</div>
					</div>
				</div>
			</div>

			<?php
		}
  	}else{
		wp_redirect( home_url( '/wp-login.php' ) );
		exit;
	}

} else {
	wp_redirect( home_url( '/wp-login.php' ) );
	exit;
}
    get_footer();

?>
