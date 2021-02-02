<?php 
/**
 * General options to config
 *
 * @package Flex
 */

 /* CPT */

function cpt_evento() {

    $labels = array(
        'name' => 'Eventos',
        'singular_name' => 'Eventos',
        'add_new' => 'Adicionar evento',
        'add_new_item' => 'Adicionar evento',
        'edit_item' => 'Editar eventos',
        'new_item' => 'Novo eventos',
        'all_items' => 'Todos eventos',
        'view_item' => 'Ver evento',
        'search_items' => 'Buscar evento',
        'not_found' =>  'Nenhum evento encontrado',
        'not_found_in_trash' => 'Nenhum evento encontrado', 
        'parent_item_colon' => '',
        'menu_name' => 'Eventos',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'evento'),
        'query_var' => true,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array(
            'title',
            'thumbnail',
            'author',
            'excerpt',
            'editor'
        )
    );
    register_post_type( 'evento', $args );

}
add_action( 'init', 'cpt_evento' );

function cpt_blog() {

    $labels = array(
        'name' => 'Blog',
        'singular_name' => 'Blog',
        'add_new' => 'Adicionar post',
        'add_new_item' => 'Adicionar post',
        'edit_item' => 'Editar post',
        'new_item' => 'Novo post',
        'all_items' => 'Todos posts',
        'view_item' => 'Ver post',
        'search_items' => 'Buscar post',
        'not_found' =>  'Nenhum post encontrado',
        'not_found_in_trash' => 'Nenhum post encontrado', 
        'parent_item_colon' => '',
        'menu_name' => 'Blog',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'blog'),
        'query_var' => true,
        'menu_icon' => 'dashicons-media-default',
        'supports' => array(
            'title',
            'thumbnail',
            'author',
            'excerpt',
            'editor'
        )
    );
    register_post_type( 'blog', $args );

}
add_action( 'init', 'cpt_blog' );




function cpt_projeto() {

    $labels = array(
        'name' => 'Projetos',
        'singular_name' => 'Projetos',
        'add_new' => 'Adicionar projeto',
        'add_new_item' => 'Adicionar projeto',
        'edit_item' => 'Editar projeto',
        'new_item' => 'Novo projeto',
        'all_items' => 'Todos projetos',
        'view_item' => 'Ver projeto',
        'search_items' => 'Buscar projeto',
        'not_found' =>  'Nenhum projeto encontrado',
        'not_found_in_trash' => 'Nenhum projeto encontrado', 
        'parent_item_colon' => '',
        'menu_name' => 'Projetos',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'projeto'),
        'query_var' => true,
        'menu_icon' => 'dashicons-lightbulb',
        'supports' => array(
            'title',
            'author',
            'editor'
        )
    );
    register_post_type( 'projeto', $args );

}
add_action( 'init', 'cpt_projeto' );



function cpt_equipe() {

    $labels = array(
        'name' => 'Equipe',
        'singular_name' => 'Equipe',
        'add_new' => 'Adicionar membro',
        'add_new_item' => 'Adicionar membro',
        'edit_item' => 'Editar membro',
        'new_item' => 'Novo membro',
        'all_items' => 'Todos os membros',
        'view_item' => 'Ver membros',
        'search_items' => 'Buscar membro',
        'not_found' =>  'Nenhum membro encontrado',
        'not_found_in_trash' => 'Nenhum membro encontrado', 
        'parent_item_colon' => '',
        'menu_name' => 'Equipe',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'equipe'),
        'query_var' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type( 'equipe', $args );

}
add_action( 'init', 'cpt_equipe' );


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Opções do Tema'),
            'menu_title'    => __('Opções do Tema'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false,
        ));
    }
}





/*****************************************************/


//////////////////////////////////////////////////////////////////////////

/* Taxonomy */

// function themes_taxonomy() { 

// //## Categoria ## // 

//     register_taxonomy(  
//         'empreendimento',   
//         array('evento'),       
//         array(  
//             'hierarchical' => true,  
//             'label' => 'Empreendimentos',  
//             'query_var' => true,
//             'rewrite' => array(
//                 'slug' => 'empreendimento', 
//                 'with_front' => false 
//             )
//         )  
//     ); 

//     register_taxonomy(  
//         'tipo',   
//         array('evento'),       
//         array(  
//             'hierarchical' => true,  
//             'label' => 'Tipo',  
//             'query_var' => true,
//             'rewrite' => array(
//                 'slug' => 'tipo', 
//                 'with_front' => false 
//             )
//         )  
//     );
    
//     register_taxonomy(  
//         'comodidade',   
//         array('evento'),       
//         array(  
//             'hierarchical' => true,  
//             'label' => 'Comodidades',  
//             'query_var' => true,
//             'rewrite' => array(
//                 'slug' => 'comodidade', 
//                 'with_front' => false 
//             )
//         )  
//     ); 


//     register_taxonomy(  
//         'status',   
//         array('evento'),       
//         array(  
//             'hierarchical' => true,  
//             'label' => 'Status da obra',  
//             'query_var' => true,
//             'rewrite' => array(
//                 'slug' => 'status', 
//                 'with_front' => false 
//             )
//         )  
//     ); 

//}  
//add_action( 'init', 'themes_taxonomy');



// Adiciona o tipo de usuário ESTABELECIMENTO

// $result = add_role( 'corretor', __(

//     'Corretores' ),
    
//     array(
    
//     'read' => true, // true allows this capability
//     'edit_posts' => true, // Allows user to edit their own posts
//     'edit_pages' => false, // Allows user to edit pages
//     'edit_others_posts' => false, // Allows user to edit others posts not just their own
//     'create_posts' => true, // Allows user to create new posts
//     'manage_categories' => true, // Allows user to manage post categories
//     'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
//     'edit_themes' => false, // false denies this capability. User can’t edit your theme
//     'install_plugins' => false, // User cant add new plugins
//     'update_plugin' => false, // User can’t update any plugins
//     'update_core' => false, // user cant perform core updates
//     'show_in_rest' => true
    
//     )
    
// );


// $result = add_role( 'cliente', __(

//     'Clientes' ),
    
//     array(
    
//     'read' => true, // true allows this capability
//     'edit_posts' => false, // Allows user to edit their own posts
//     'edit_pages' => false, // Allows user to edit pages
//     'edit_others_posts' => false, // Allows user to edit others posts not just their own
//     'create_posts' => false, // Allows user to create new posts
//     'manage_categories' => false, // Allows user to manage post categories
//     'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
//     'edit_themes' => false, // false denies this capability. User can’t edit your theme
//     'install_plugins' => false, // User cant add new plugins
//     'update_plugin' => false, // User can’t update any plugins
//     'update_core' => false, // user cant perform core updates
//     'show_in_rest' => true
//     )
    
// );
