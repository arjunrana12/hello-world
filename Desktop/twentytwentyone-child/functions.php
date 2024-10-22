<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twenty-twenty-one-custom-color-overrides','twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION



function styleAndScripts() {

    wp_enqueue_script( 'jqueryjs','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_style( 'remixiconcss','https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css');
    wp_enqueue_style( 'slickcss','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
    wp_enqueue_style( 'slickthemecss','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');
    wp_enqueue_style( 'aoscss','https://unpkg.com/aos@2.3.1/dist/aos.css');
    
    wp_enqueue_style( 'flickitycss', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css' );
    wp_enqueue_script( 'flickityjs', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js' );

              wp_enqueue_style( 'stylecss', get_stylesheet_directory_uri() . '/assets/css/style.css?'.strtotime(date('Y-m-d H:i:s')).'');
         
               wp_enqueue_script( 'slickminjs','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
               
            wp_enqueue_script( 'jsmain', get_stylesheet_directory_uri() . '/assets/js/main.js?'.time().'');  
             
           }
           add_action( 'wp_enqueue_scripts', 'styleAndScripts');
           
            
       add_action( 'init', 'create_custom_post_type' );


       function custom_widgets_logo() {
        register_sidebar( array(
            'name'          => 'Custom logo',
            'id'            => 'custom-logo',
            'description'   => 'Add widgets here to appear in the custom sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
     }
     add_action( 'widgets_init', 'custom_widgets_logo' );


     function custom_widgets_para() {
        register_sidebar( array(
            'name'          => 'Para',
            'id'            => 'para',
            'description'   => 'Add widgets here to appear in the custom sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
     }
     add_action( 'widgets_init', 'custom_widgets_para' );


     function custom_widgets_button() {
        register_sidebar( array(
            'name'          => 'Button',
            'id'            => 'button',
            'description'   => 'Add widgets here to appear in the custom sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
     }
     add_action( 'widgets_init', 'custom_widgets_button' );
    

    
   function create_custom_post_type() {
   
   $supports = array(
   'title', // post title
   'editor', // post content
   'author', // post author
   'thumbnail', // featured images
   'excerpt', // post excerpt
   'custom-fields', // custom fields
   'comments', // post comments
   'revisions', // post revisions
   'post-formats', // post formats
   );
   
   
   $labels = array(
   'name' => _x('slider', 'plural'),
   'singular_name' => _x('slider', 'singular'),
   'menu_name' => _x('slider', 'admin menu'),
   'name_admin_bar' => _x('slider', 'admin bar'),
   'add_new' => _x('Add New', 'add new'),
   'add_new_item' => __('Add New listing'),
   'new_item' => __('New list'),
   'edit_item' => __('Edit list'),
   'view_item' => __('View list'),
   'all_items' => __('All list'),
   'search_items' => __('Search list'),
   'not_found' => __('No listing found.'),
   );
    
   $args = array(
     'supports' => $supports,
     'labels' => $labels,
     'public' => true,
     'taxonomies' => array( 'category', 'post_tag' ),
     'has_archive' => false,
     'rewrite' => array('slug' => 'slider'),
    );
    
   register_post_type( 'slider',$args);
   
   }


   add_action( 'init', 'create_custom_post_type' );


   function create_custom_post_type1() {
   
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    
    
    $labels = array(
    'name' => _x('renovation', 'plural'),
    'singular_name' => _x('renovation', 'singular'),
    'menu_name' => _x('renovation', 'admin menu'),
    'name_admin_bar' => _x('renovation', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New listing'),
    'new_item' => __('New list'),
    'edit_item' => __('Edit list'),
    'view_item' => __('View list'),
    'all_items' => __('All list'),
    'search_items' => __('Search list'),
    'not_found' => __('No listing found.'),
    );
     
    $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'taxonomies' => array( 'category', 'post_tag' ),
      'has_archive' => false,
      'rewrite' => array('slug' => 'renovation'),
     );
     
    register_post_type( 'renovation',$args);
    
    }
 
  
    add_action( 'init', 'create_custom_post_type1' );



    function create_custom_post_type2() {
   
        $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt    
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
        );
        
        
        $labels = array(
        'name' => _x('range', 'plural'),
        'singular_name' => _x('range', 'singular'),
        'menu_name' => _x('range', 'admin menu'),
        'name_admin_bar' => _x('range', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New listing'),
        'new_item' => __('New list'),
        'edit_item' => __('Edit list'),
        'view_item' => __('View list'),
        'all_items' => __('All list'),
        'search_items' => __('Search list'),
        'not_found' => __('No listing found.'),
        );
         
        $args = array(
          'supports' => $supports,
          'labels' => $labels,
          'public' => true,
          'taxonomies' => array( 'category', 'post_tag' ),
          'has_archive' => false,
          'rewrite' => array('slug' => 'range'),
         );
         
        register_post_type( 'range',$args);
        
        }
      
        add_action( 'init', 'create_custom_post_type2' );

    


        function create_custom_post_type3() {
   
            $supports = array(
            'title', // post title
            'editor', // post content
            'author', // post author
            'thumbnail', // featured images
            'excerpt', // post excerpt
            'custom-fields', // custom fields
            'comments', // post comments
            'revisions', // post revisions
            'post-formats', // post formats
            );
            
            
            $labels = array(
            'name' => _x('category item', 'plural'),
            'singular_name' => _x('category item', 'singular'),
            'menu_name' => _x('category item', 'admin menu'),
            'name_admin_bar' => _x('category item', 'admin bar'),
            'add_new' => _x('Add New', 'add new'),
            'add_new_item' => __('Add New listing'),
            'new_item' => __('New list'),
            'edit_item' => __('Edit list'),
            'view_item' => __('View list'),
            'all_items' => __('All list'),
            'search_items' => __('Search list'),
            'not_found' => __('No listing found.'),
            );
             
            $args = array(
              'supports' => $supports,
              'labels' => $labels,
              'public' => true,
              'taxonomies' => array( 'category', 'post_tag' ),
              'has_archive' => false,
              'rewrite' => array('slug' => 'category item'),
             );
             
            register_post_type( 'category item',$args);
            
            }
          
            add_action( 'init', 'create_custom_post_type3' );


            function create_custom_post_type4() {
   
                $supports = array(
                'title', // post title
                'editor', // post content
                'author', // post author
                'thumbnail', // featured images
                'excerpt', // post excerpt
                'custom-fields', // custom fields
                'comments', // post comments
                'revisions', // post revisions
                'post-formats', // post formats
                );
                
                
                $labels = array(
                'name' => _x('review', 'plural'),
                'singular_name' => _x('review', 'singular'),
                'menu_name' => _x('review', 'admin menu'),
                'name_admin_bar' => _x('review', 'admin bar'),
                'add_new' => _x('Add New', 'add new'),
                'add_new_item' => __('Add New listing'),
                'new_item' => __('New list'),
                'edit_item' => __('Edit list'),
                'view_item' => __('View list'),
                'all_items' => __('All list'),
                'search_items' => __('Search list'),
                'not_found' => __('No listing found.'),
                );
                 
                $args = array(
                  'supports' => $supports,
                  'labels' => $labels,
                  'public' => true,
                  'taxonomies' => array( 'category', 'post_tag' ),
                  'has_archive' => false,
                  'rewrite' => array('slug' => 'review'),
                 );
                 
                register_post_type( 'review',$args);
                
                }
              
                add_action( 'init', 'create_custom_post_type4' );




                function create_custom_post_type5() {
   
                    $supports = array(
                    'title', // post title
                    'editor', // post content
                    'author', // post author
                    'thumbnail', // featured images
                    'excerpt', // post excerpt
                    'custom-fields', // custom fields
                    'comments', // post comments
                    'revisions', // post revisions
                    'post-formats', // post formats
                    );
                    
                    
                    $labels = array(
                    'name' => _x('faq', 'plural'),
                    'singular_name' => _x('faq', 'singular'),
                    'menu_name' => _x('faq', 'admin menu'),
                    'name_admin_bar' => _x('faq', 'admin bar'),
                    'add_new' => _x('Add New', 'add new'),
                    'add_new_item' => __('Add New listing'),
                    'new_item' => __('New list'),
                    'edit_item' => __('Edit list'),
                    'view_item' => __('View list'),
                    'all_items' => __('All list'),
                    'search_items' => __('Search list'),
                    'not_found' => __('No listing found.'),
                    );
                     
                    $args = array(
                      'supports' => $supports,
                      'labels' => $labels,
                      'public' => true,
                      'taxonomies' => array( 'category', 'post_tag' ),
                      'has_archive' => false,
                      'rewrite' => array('slug' => 'faq'),
                     );
                     
                    register_post_type( 'faq',$args);
                    
                    }
                  
                    add_action( 'init', 'create_custom_post_type5' );






                    function create_custom_post_type6() {
   
                        $supports = array(
                        'title', // post title
                        'editor', // post content
                        'author', // post author
                        'thumbnail', // featured images
                        'excerpt', // post excerpt
                        'custom-fields', // custom fields
                        'comments', // post comments
                        'revisions', // post revisions
                        'post-formats', // post formats
                        );
                        
                        
                        $labels = array(
                        'name' => _x('testimonial', 'plural'),
                        'singular_name' => _x('testimonial', 'singular'),
                        'menu_name' => _x('testimonial', 'admin menu'),
                        'name_admin_bar' => _x('testimonial', 'admin bar'),
                        'add_new' => _x('Add New', 'add new'),
                        'add_new_item' => __('Add New listing'),
                        'new_item' => __('New list'),
                        'edit_item' => __('Edit list'),
                        'view_item' => __('View list'),
                        'all_items' => __('All list'),
                        'search_items' => __('Search list'),
                        'not_found' => __('No listing found.'),
                        );
                         
                        $args = array(
                          'supports' => $supports,
                          'labels' => $labels,
                          'public' => true,
                          'taxonomies' => array( 'category', 'post_tag' ),
                          'has_archive' => false,
                          'rewrite' => array('slug' => 'testimonial'),
                         );
                         
                        register_post_type( 'testimonial',$args);
                        
                        }
                      
                        add_action( 'init', 'create_custom_post_type6' );


                        add_action( 'wp_footer', 'mycustom_wp_footer' );
  
                      
    
