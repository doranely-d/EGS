<?php

global $wpdb;

$wpdb->insert( 
	'cosplay', 
	$_POST
);

$wpdb->last_query;
?>

<?php $wpdb->show_errors(); ?> 
<?php $wpdb->hide_errors(); ?> 
