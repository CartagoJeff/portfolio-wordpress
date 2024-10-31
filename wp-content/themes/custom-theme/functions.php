<?php
function customTheme_register_styles(){
    // Correct path to the style.css file in the 'css' folder within your theme
    wp_enqueue_style('customTheme-style', get_template_directory_uri() . "/backup/css/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'customTheme_register_styles');
?>
