<?php

function wkode_files(){
    wp_enqueue_style('wkode_main_styles', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_theme_file_uri('/dist/main.min.js'), NULL, '1.0', true);
    wp_enqueue_script('owl-js', get_theme_file_uri('/node_modules/owl.carousel/dist/owl.carousel.min.js'), NULL, '1.0', true);
    wp_localize_script('main-js', 'WKodeData', array(
        'root_url' => get_site_url()
    ));
    wp_enqueue_script('wkode-font_awesome', '//kit.fontawesome.com/fde7c29e46.js', NULL, '1.0', true);
    wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/main.min.css');
    wp_enqueue_style('owl-css', get_template_directory_uri() . '/node_modules/owl.carousel/dist/assets/owl.carousel.min.css');
}

add_action('wp_enqueue_scripts', 'wkode_files');

 //queing the styles and scripts in the blocks preview
  add_action( 'enqueue_block_editor_assets', 'wkode_files' );

  // Enable ACF JSON
  add_filter('acf/settings/save_json', 'my_acf_json_save_point');
  function my_acf_json_save_point( $path ) {
      // update path
      $path = get_stylesheet_directory() . '/acf-json';
      // return
      return $path;
  }

  // Load ACF JSON
  add_filter('acf/settings/load_json', 'my_acf_json_load_point');
  function my_acf_json_load_point( $paths ) {
      // remove original path (optional)
      unset($paths[0]);
      // append path
      $paths[] = get_stylesheet_directory() . '/acf-json';
      // return
      return $paths;
  }

function wkode_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('cursoImageList', 265, 342, true);
    add_image_size('ProductImageList', 500, 500, true);
    add_image_size('ProductImageList2', 385, 250, true);
    add_image_size('instrutoresImage', 1500, 682, true);
    add_image_size('ProductImageSingle', 800, 1000, true);
}
add_action('after_setup_theme', 'wkode_features');

require_once( 'inc/theme-setup.php' );

@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );


function custom_rewrite_rule() {
    add_rewrite_rule('^calendario-de-cursos/cidade=([^/]+)/?', 'index.php?pagename=calendario-de-cursos', 'top');
}
add_action( 'init', 'custom_rewrite_rule' );

function filter_courses() {
    $local = $_POST['local'];

    if ($local == 'Selecionar') { // Check if the user selected the neutral option
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'post',
            'meta_key' => 'curso_data',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'curso_data',
                    'compare' => '>=',
                    'value' => date('Ymd'),
                    'type' => 'numeric',
                ),
            ),
        );
    } else { // If the user selected a specific location, filter by that location
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'post',
            'meta_key' => 'curso_data',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'local',
                    'field' => 'name',
                    'terms' => $local,
                ),
            ),
        );
    }

    $courses = new WP_Query($args);

    ob_start();
    ?>
    <?php while ($courses->have_posts()) : $courses->the_post(); ?>
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
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php
    $output = ob_get_clean();

    wp_send_json($output);
    wp_die();
}
add_action('wp_ajax_filter_courses', 'filter_courses');
add_action('wp_ajax_nopriv_filter_courses', 'filter_courses');
