<?php 

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
//if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
//}
}

/* ---------- Se habilita la seleccion de imagen ---------- */
add_theme_support('post-thumbnails');


/* ---------- Custom Post Invitado ---------- */
function custom_invitado()
{
    $labels = array(
        'name' => _x('Invitado', 'post type general name'),
        'singular_name' => _x('Invitado', 'post type singular name'),
        'add_new' => _x('Agregar invitado', 'Banner'),
        'add_new_item' => __('Agregar nuevo invitado'),
        'edit_item' => __('Editar Invitado'),
        'new_item' => __('Nuevo Invitado'),
        'all_items' => __('Todos los Invitados'),
        'view_item' => __('Ver Invitados'),
        'search_items' => __('Buscar Invitado'),
        'not_found' =>  __('No se han encontrado Invitados'),
        'not_found_in_trash' => __('No hay Invitados en la papelera'),
        'parent_item_colon' => '',
        'menu_name' => 'Invitados'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail' ,'editor')
    );

    register_post_type('invitado',$args);
}

add_action('init', 'custom_invitado');

function separadorTexto($texto, $textobold) {
	echo 
'<div class="section-div text-separator">
	<div class="row">
		<h1>' . $texto . '<b>' . $textobold . ' </b></h1>
	</div>
</div>';
}


/* ------------------------------------------------------------------------- */



function my_register_fields()
{
    include_once('acf-field-date-time-picker/acf-date_time_picker.php');
}

add_action('acf/register_fields', 'my_register_fields');