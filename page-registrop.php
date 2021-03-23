<?php

global $wpdb;

$wpdb->insert( 
	'prensa', 
	array( 
		'nombre' => $_POST['nombre'],
		'aPaterno' => $_POST['aPaterno'],
		'aMaterno' => $_POST['aMaterno'],
		'medio' => $_POST['medio'],
		'mail' => $_POST['mail'],
		'puesto' => $_POST['puesto'],
		'twitter' => $_POST['twitter'],
		'facebook' => $_POST['facebook'],
		'sitio' => $_POST['sitio'],
		'links' => $_POST['links']
	)
);

$wpdb->last_query;
?>

<?php $wpdb->show_errors(); ?> 
<?php $wpdb->hide_errors(); ?> 
