<?php

if ( ! function_exists( 'wkode_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wkode_setup() {
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'custom-logo' );

		/**
		 * Specify Image Sizes
		 */
		update_option( 'thumbnail_size_w', 70 );
		update_option( 'thumbnail_size_h', 80 );
		update_option( 'thumbnail_crop', 1 );

		update_option( 'medium_size_w', 360 );
		update_option( 'medium_size_h', 300 );

		update_option( 'large_size_w', 750 );
		update_option( 'large_size_h', 540 );

		add_image_size( 'vertical_big', 360, 530, true );
		add_image_size( 'vertical_medium', 180, 265, true );
		// add_image_size('magazine_mini', 343, 441, true) is defined in extras.php
		// add_image_size('magazine_mega', 510, 666, true) is defined in extras.php


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'artsoft_portal_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Remove post format
		remove_theme_support( 'post-formats' );

		// declare support for woocommerce
		add_theme_support( 'woocommerce' );

	}
endif; // wkode_setup
add_action( 'after_setup_theme', 'wkode_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function artsoft_portal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'artsoft' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'artsoft_portal_widgets_init' );


function my_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'my_excerpt_length' );

if ( function_exists( 'acf_register_block_type' ) ) {

	add_action(
		'acf/init',
		function () {

			// Register new block category.
			add_filter( 'block_categories', 'register_block_categories', 10, 1 );

			/**
			 * Register category for blocks
			 *
			 * @param $categories
			 *
			 * @return array
			 */
			function register_block_categories( $categories ) {
				return array_merge(
					array(
						array(
							'slug'  => 'pec-cursos',
							'title' => __( 'Pec Cursos', 'pec-cursos' ),
						),
					),
					$categories
				);
			}

			acf_register_block_type(
				array(
					'name'            => 'pec_nossos_cursos',
					'title'           => __( 'Pec Nossos Cursos' ),
					'description'     => __( 'Um block para selecionar nossos cursos' ),
					'render_template' => 'template-parts/blocks/nossos-cursos.php',
					'category'        => 'pec-cursos',
					'icon'            => 'format-status',
					'keywords'        => array( 'Pec', 'Motors', 'Nossos', 'Cursos' ),
					'example'         => array(
						'attributes' => array(
							'mode' => 'preview',
							/* 'data' => array(
								'preview' => WL_URL . '/template-parts/blocks/preview/post.png',
							), */
						),
					),
				)
			);
			acf_register_block_type(
				array(
					'name'            => 'know-more-btn',
					'title'           => __( 'Botão Saber Mais' ),
					'description'     => __( 'Um block botao' ),
					'render_template' => 'template-parts/blocks/know-more-btn.php',
					'category'        => 'pec-cursos',
					'icon'            => 'button',
					'keywords'        => array( 'Pec', 'Motors', 'Nossos', 'Cursos' ),
					'example'         => array(
						'attributes' => array(
							'mode' => 'preview',
							/* 'data' => array(
								'preview' => WL_URL . '/template-parts/blocks/preview/post.png',
							), */
						),
					),
				)
			);
			acf_register_block_type(
				array(
					'name'            => 'whatsapp-btn',
					'title'           => __( 'Botão Whatsapp' ),
					'description'     => __( 'Um block botao para whatsapp' ),
					'render_template' => 'template-parts/blocks/whatsapp-btn.php',
					'category'        => 'pec-cursos',
					'icon'            => 'button',
					'keywords'        => array( 'Pec', 'Motors', 'Nossos', 'Cursos' ),
					'example'         => array(
						'attributes' => array(
							'mode' => 'preview',
							/* 'data' => array(
								'preview' => WL_URL . '/template-parts/blocks/preview/post.png',
							), */
						),
					),
				)
			);
		}
	);
}
// Our custom post type function
function create_posttype() {

    register_post_type( 'material-didatico',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Materiais Didáticos' ),
                'singular_name' => __( 'Material Didático' )
            ),
            'public'              => true,
			'menu_icon'           => 'dashicons-media-document',
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'material-didatico'),
            'show_in_rest'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',  'revisions', 'custom-fields', ),

        )
    );
	register_post_type( 'apostila',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Apostilas' ),
                'singular_name' => __( 'Apostila' )
            ),
            'public'               => true,
			'menu_icon'            => 'dashicons-media-document',
            'has_archive'          => false,
            'rewrite'              => array('slug' => 'apostila'),
			'public'              => true,
			'show_ui'             => true,
			'show_in_rest'        => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'can_export'          => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),

        )
    );
	register_post_type( 'cursos_presenciais',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Cursos Presenciais' ),
                'singular_name' => __( 'Curso Presencial' )
            ),
            'public'               => true,
			'menu_icon'            => 'dashicons-media-text',
            'has_archive'          => false,
            'rewrite'              => array('slug' => 'cursos-presenciais'),
			'public'              => true,
			'show_ui'             => true,
			'show_in_rest'        => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'can_export'          => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),

        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function custom_taxonomy() {
    $labels = array(
        'name' => __( 'Localização', 'text-domain' ),
        'singular_name' => __( 'Localização', 'text-domain' ),
        'menu_name' => __( 'Localização', 'text-domain' ),
        'all_items' => __( 'Todos os Items', 'text-domain' ),
        'parent_item' => __( 'Items Parentes', 'text-domain' ),
        'parent_item_colon' => __( 'Item Parente:', 'text-domain' ),
        'new_item_name' => __( 'Novo Item Nome', 'text-domain' ),
        'add_new_item' => __( 'Adicionar Novo Item', 'text-domain' ),
        'edit_item' => __( 'Editar Item', 'text-domain' ),
        'update_item' => __( 'Update Item', 'text-domain' ),
        'view_item' => __( 'Ver Item', 'text-domain' ),
        'separate_items_with_commas' => __( 'Separe Com Virgulas', 'text-domain' ),
        'add_or_remove_items' => __( 'Add ou Remova Itens', 'text-domain' ),
        'choose_from_most_used' => __( 'Escolher dos mais usados', 'text-domain' ),
        'popular_items' => __( 'Itens Populares', 'text-domain' ),
        'search_items' => __( 'Procurar Itens', 'text-domain' ),
        'not_found' => __( 'Não Encontrado', 'text-domain' ),
        'no_terms' => __( 'Nenhum Item', 'text-domain' ),
        'items_list' => __( 'Lista de Itens', 'text-domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text-domain' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
		'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'local' ),
    );

    register_taxonomy( 'local', array( 'post' ), $args );
}
add_action( 'init', 'custom_taxonomy' );

