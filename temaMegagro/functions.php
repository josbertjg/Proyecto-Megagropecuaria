<?php 

    function megagro_menus(){
        $locations = array(
            'footer' => "Menu Dinamico Ubicado en el Footer"
        );
        register_nav_menus($locations);
    }

    add_action('init','megagro_menus');

    function megagro_theme_support(){
        //AGREGANDO TITULO DINAMICO A LAS PAGINAS
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme','megagro_theme_support');

    function megagro_register_styles(){
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('megagro-styles',get_template_directory_uri()."/style.css",array('megagro-bootstrap'),$version,'all');
        wp_enqueue_style('megagro-bootstrap',get_template_directory_uri()."/assets/css/bootstrap.min.css",array(),'5.2','all');
    }

    add_action('wp_enqueue_scripts','megagro_register_styles');

    function megagro_register_scripts(){
        wp_enqueue_script('megagro-main-js',get_template_directory_uri()."/assets/js/main.js", array('megagro-jquery'),'1');
        wp_enqueue_script('megagro-jquery',get_template_directory_uri()."/assets/js/jquery-3.6.0.min.js", array(),'1');
        wp_enqueue_script('megagro-js-bootstrap',get_template_directory_uri()."/assets/js/bootstrap.bundle.min.js", array(),'5.2');
        wp_enqueue_script('megagro-js-fontawesome',"https://kit.fontawesome.com/b303dbfa11.js", array(),'1',true);
    }
    add_action('wp_enqueue_scripts','megagro_register_scripts');

?>