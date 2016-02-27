<?php 

    add_action('init', 'ortgeo_init_posttypes');
    
    function ortgeo_init_posttypes(){
        
        
        /*
         * OrtGeo  Post Type
         */
        $willa_args = array(
            'labels' => array(
                'name' => 'Oferta',
                'singular_name' => 'Oferta',
                'all_items' => 'Wszystkie oferty',
                'edit_item' => 'Edytuj ofertę',
                'view_item' => 'Zobacz ofertę',
                'search_items' => 'Szukaj w ofertach',
                'not_found' =>  'Nie znaleziono żadnych ofert',
                'not_found_in_trash' => 'Nie znaleziono żadnych ofert w koszu', 
                'parent_item_colon' => '',
            ),
            'public' => true,
            'menu_icon' => 'dashicons-editor-ul',
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
             'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats'
            ),
            'has_archive' => true            
        );
        
        register_post_type('oferta', $willa_args);
        
        
        
       
    }

    

        
        /*
         * OrtGeo  Post Type
         */
        $willa_args = array(
            'labels' => array(
                'name' => 'Realizacje',
                'singular_name' => 'Realizacje',
                'all_items' => 'Wszystkie realizacje',
                'edit_item' => 'Edytuj realizacje',
                'view_item' => 'Zobacz realizacje',
                'search_items' => 'Szukaj w realizacjach',
                'not_found' =>  'Nie znaleziono żadnych realizacji',
                'not_found_in_trash' => 'Nie znaleziono żadnych realizacji w koszu', 
                'parent_item_colon' => '',
            ),
            'public' => true,
            'menu_icon' => 'dashicons-format-aside',
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
             'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats'
            ),
            'has_archive' => true            
        );
        
        register_post_type('realizacje', $willa_args);
        
        
        


 // dodanie funkcji miniaturek zdjęć
    add_theme_support( 'post-thumbnails' );


?>