<?php get_header();

$galleryImages = get_field('instructor_diplomas_gallery', get_the_ID());
$profile_img = get_field('instructor_profile_image', get_the_ID());
$profile_img = $profile_img['sizes'];
$experiences = get_field('instructor_experience', get_the_ID());

?>

<div id="primary" class="wkode-single-instrutores-template content-area">
    <main id="main" class="wkode-single-instrutores-template__main site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('wkode-single-instrutores-template__article text-white'); ?>>

                <div class="wkode-single-instrutores-template__body container">
                    <header class="wkode-single-instrutores-template__title-header entry-header">
                        <h1 class="wkode-single-instrutores-template__title entry-title"><?php the_title(); ?></h1>
                    </header>

					<div class="wkode-single-instrutores-instructor-profile-img">
						<img src="<?= $profile_img['instructor_square']; ?>" alt="<?php the_title(); ?> Imagem de Perfil" srcset="">
					</div>

                    <div class="wkode-single-instrutores-template__content entry-content instrutores__slide--content text-white text-2xl lg:text-3xl 2xl:text-4xl">
                        <?php the_content(); ?>
                    </div>

					<h2 class="wkode-single-instrutores-template__carousel-title">
						Formação
					</h2>
					<div class="f-carousel" id="myCarousel">
						<?php
							foreach ($galleryImages as $image) : ?>
								<?php $image_url = $image['url']; ?>
								<a class="f-carousel__slide mx-6" data-thumb-src="<?php echo $image_url; ?>" data-fancybox="gallery" href="<?php echo $image_url; ?>">
									<img class="wkode-single-used-bikes__img" data-lazy-src="<?php echo $image_url; ?>" src="<?php echo $image_url; ?>" />
								</a>
								<?php
							endforeach;
						?>
					</div>

					<h2 class="wkode-single-instrutores-template__experience-title">
						Experiência
					</h2>
					<div class="wkode-single-instrutores__experiences">
						<?php
						foreach($experiences as $experience){?>
							<div class="instrutores-experience grid grid-cols-1 md:grid-cols-2 gap-8">
								<div class="instrutor-experience-time-company-wrapper">
									<div class="instructor-list-icon">

									</div>
									<div class="instrutor-experience-time-company">
										<h3 class="instrutor-experience-time"> <?php
											echo $experience['instructor_year']; ?>
										</h3>
										<h2 class="instrutor-experience-company"> <?php
											echo $experience['instructor_company']; ?>
										</h2>
									</div>
								</div>

								<div class="instrutor-experience-title-description">
									<h3 class="instrutor-experience-title"> <?php
										echo $experience['instructor_title']; ?>
									</h3>
									<h2 class="instrutor-experience-description"> <?php
										echo $experience['instructor_description']; ?>
									</h2>
								</div>
							</div>


						<?php
						}
						?>
					</div>
                </div>


            </article>
        <?php endwhile; ?>

    </main>
</div>

<?php get_footer(); ?>
