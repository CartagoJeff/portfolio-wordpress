<?php

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

function child_theme_enqueue_styles() {
    $parenthandle = 'parent-style';
    $theme = wp_get_theme();
	wp_enqueue_style( 
        $parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
	);
    wp_enqueue_style( 
        'child-style',
        get_stylesheet_uri(),
        array($parenthandle),
        $theme->get('Version')
	);

    wp_enqueue_style( 
        'header-style',
        get_stylesheet_directory_uri() . '/assets/css/header.css',
        array('child-style'), 
        $theme->get('Version')
    );

    wp_enqueue_style( 
        'footer-style',
        get_stylesheet_directory_uri() . '/assets/css/footer.css',
        array('child-style'), 
        $theme->get('Version')
    );
}

/*
function custom_menu_css() {
    ?>
    <style>
    #primary-menu > li:first-child a {
        visibility: hidden;: none; 
        display: block;
       
    }

    #primary-menu > li:first-child a::before {
        content: ''; 
        visibility: visible;
        display: block;
        width: 100px; 
        height: 100px;
        background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/anby.jpeg');
        background-size: contain; 
        background-repeat: no-repeat; 
        align-self: center;
        position: relative;
        top: 15px;
    }
    </style>
    <?php
}
add_action('wp_head', 'custom_menu_css');
*/
function register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu', 'custom_underscore' ),
            'secondary-menu' => __( 'Secondary Menu', 'custom_underscore' ),
            'footer-menu' => __( 'Footer Menu', 'custom_underscore' ),
        )
    );
}
add_action( 'init', 'register_menus' );