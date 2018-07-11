<?php
add_action('init', 'init_handler');
function init_handler() {	
	config_post_type_rodape();
	config_post_type_imoveis();
	config_post_type_videos();
}

//Rodapé
function config_post_type_rodape() {
	$labels = array(
		'name' => _x('Rodapé', 'post type general name'),
		'singular_name' => _x('Rodapé', 'post type singular name'),
		'add_new' => _x('Cadastrar Novo Rodapé', 'rodape'),
		'add_new_item' => __('Cadastramento de Novo Rodapé'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum Rodapé encontrado'),
		'not_found_in_trash' => __('Nenhum rodape encontrado na lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Rodapé'
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => true,
		'menu_position' => 1,
		//'menu_icon' => TEMPLATE_URL."/imagens/icons_posttypes/cliente_customers.png",
		'rewrite' => array("slug" => "rodape", 'with_front' => false),
		'supports' => array('title')
		); 
	register_post_type('rodape', $args);
}

//Imoveis
function config_post_type_imoveis() {
	$labels = array(
		'name' => _x('Imoveis', 'post type general name'),
		'singular_name' => _x('Imoveis', 'post type singular name'),
		'add_new' => _x('Cadastrar Novo Imoveis', 'menus'),
		'add_new_item' => __('Cadastramento de Novo Imoveis'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum Imoveis encontrado'),
		'not_found_in_trash' => __('Nenhum menus encontrado na lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Imoveis'
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => true,
		'menu_position' => 1,
		//'menu_icon' => TEMPLATE_URL."/imagens/icons_posttypes/cliente_customers.png",
		'rewrite' => array("slug" => "imoveis", 'with_front' => false),
		'supports' => array('title')
		); 
	register_post_type('imoveis', $args);
}


//Vídeos Interna
function config_post_type_videos() {
	$labels = array(
		'name' => _x('Vídeos', 'post type general name'),
		'singular_name' => _x('Vídeos', 'post type singular name'),
		'add_new' => _x('Cadastrar Novo Vídeos', 'videos'),
		'add_new_item' => __('Cadastramento de Novo Vídeos'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum Vídeos encontrado'),
		'not_found_in_trash' => __('Nenhum videos encontrado na lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Vídeos'
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => true,
		'menu_position' => 1,
		//'menu_icon' => TEMPLATE_URL."/imagens/icons_posttypes/cliente_customers.png",
		'rewrite' => array("slug" => "video", 'with_front' => false),
		'supports' => array('title')
		); 
	register_post_type('videos', $args);
}




?>