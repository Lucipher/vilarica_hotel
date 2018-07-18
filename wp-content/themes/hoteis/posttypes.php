<?php
add_action('init', 'init_handler');
function init_handler() {	
	config_post_type_rodape();
	config_post_type_cabecalho();
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

//Pré Cabeçalho
function config_post_type_cabecalho() {
	$labels = array(
		'name' => _x('Pré-Cabeçalho', 'post type general name'),
		'singular_name' => _x('Pré-Cabeçalho', 'post type singular name'),
		'add_new' => _x('Cadastrar Novo Pré-Cabeçalho', 'rodape'),
		'add_new_item' => __('Cadastramento de Novo Pré-Cabeçalho'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum Rodapé encontrado'),
		'not_found_in_trash' => __('Nenhum rodape encontrado na lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Pré-Cabeçalho'
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
		'rewrite' => array("slug" => "precabecalho", 'with_front' => false),
		'supports' => array('title')
		); 
	register_post_type('precabecalho', $args);
}


?>