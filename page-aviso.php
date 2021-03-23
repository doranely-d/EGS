<?php 
get_header();

$content_post = get_post($postID);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);

?>
<style type="text/css">
	.section-banner h1 {
	    font-size: 3.5vw; 
		margin-top: -26px;
		margin-bottom: 39px;
	}
	.under-section-banner {
	    height: 144px;
	}
</style>
<script src="<?php bloginfo('template_url'); ?>/js/sexy-accordion.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sexy-accordion.css">

<?php get_sidebar('down'); ?>

<!-- SECTION DIVIDER -->

<?php get_sidebar('section-banner'); ?>

<!-- SECTION DIVIDER -->

<div class="under-section-banner">
	<img src="<?php bloginfo('template_url'); ?>/img/donde.png">
</div>

<!-- SECTION DIVIDER -->

<div id="aviso" class="section-div">
	<div class="row">
		<div class="large-12 medium-12 small-12 columns sexy-accordion">
			<p><?php echo $content; ?></p>
	</div>
</div>

<!-- SECTION DIVIDER -->

<?php get_footer(); ?>