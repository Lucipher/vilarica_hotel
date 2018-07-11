<?php

define(TEMPLATE_URL, get_bloginfo('template_url'));
define(SITE_URL, site_url());

/*MENU*/
register_nav_menu('menu-categorias','Menu Categorias');

/* WIDGETS */ 
/*if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}*/

// Registro das suas widgets
if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'name' => __( 'sidbar-1'),
        'id' => 'sidebar-1',
        'description' => __( 'Breve descrição sobre esta SIDEBAR.'),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
}

// Imagem Destacada
//add_theme_support('post-thumbnails', array('post'));
//set_post_thumbnail_size( 780, 360); /* define o tamanho do thumbnail no painel de controle do WordPress */

// Paginação
function wordpress_pagination() {
	global $wp_query;

	$big = 999999999;

	echo paginate_links( array(
		  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		  'format' => '?paged=%#%',
		  'current' => max( 1, get_query_var('paged') ),
		  'total' => $wp_query->max_num_pages
	) );
}

function wp_pagination($pages = '', $range = 9)
{   
    global $wp_query, $wp_rewrite;  
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;  
    $pagination = array(  
        'base' => @add_query_arg('page','%#%'),  
        'format' => '',  
        'total' => $wp_query->max_num_pages,  
        'current' => $current,  
        'show_all' => false,
        'end_size' => 0,
        'mid_size' => 1,
        'type' => 'plain',
        'prev_text' => __('«'),
        'next_text' => __('»'),
    );  
    if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );  
    if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );  
    echo '<div class="wp_pagination">'.paginate_links( $pagination ).'</div>';
}


//Post type
require_once('posttypes.php');
 
?>