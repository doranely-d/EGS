<?php get_header(); ?>
<?php get_sidebar('down'); ?>
<style type="text/css">
	.modal-invitado {
	    border: none;
	}
	.close-button {
	    right: -14px;
	    top: -13px;
	    z-index: 1000000;
	    display: block;
        max-width: 43px;
	}
	.reveal {
	    overflow-y: initial !important;
	}
</style>
<!-- SECTION DIVIDER -->

<?php get_sidebar('section-banner'); ?>

<!-- SECTION DIVIDER -->

<div class="under-section-banner">
	<img src="<?php bloginfo('template_url'); ?>/img/invitados.png">
</div>

<!-- SECTION DIVIDER -->

<div class="section-div">
	<div class="row">
		<div id="invitados" class="large-up-4 medium-up-3 small-up-1 columns">
		<?php 
		$counter = 0;
		if(have_rows('invitados')):
			while(have_rows('invitados')): the_row();
			$image = get_sub_field('image');
			$name = get_sub_field('name');
			$name = explode(' ', $name);
			$social = get_sub_field('social');
				$fb = $social[0]['fb'];
				$tw = $social[0]['tw'];
				$yt = $social[0]['yt'];
				$tch = $social[0]['twitch'];
		 ?>
			<div class="invitado column">
				<div class="image" style="background: url(<?php echo $image; ?>) 50% 50% / cover no-repeat;"  onclick="openModal(<?php echo $counter; ?>);"></div>
				<h3><?php echo $name[0]; ?> <b><?php echo $name[1]; ?></b></h3>
				<hr>
				<div class="large-3 medium-3 small-3 columns"><a <?php if ($fb != "") echo 'href="' . $fb . '"'; else echo 'disabled'; ?>><i class="<?php if ($fb == "") echo 'not'; ?> fa fa-2x fa-facebook-square"></a></i></div>
				<div class="large-3 medium-3 small-3 columns"><a <?php if ($tw != "") echo 'href="' . $tw . '"'; else echo 'disabled'; ?>><i class="<?php if ($tw == "") echo 'not'; ?> fa fa-2x fa-twitter-square"></a></i></div>
				<div class="large-3 medium-3 small-3 columns"><a <?php if ($yt != "") echo 'href="' . $yt . '"'; else echo 'disabled'; ?>><i class="<?php if ($yt == "") echo 'not'; ?> fa fa-2x fa-youtube-square"></a></i></div>
				<div class="large-3 medium-3 small-3 columns"><a <?php if ($tch != "") echo 'href="' . $tch . '"'; else echo 'disabled'; ?>><i class="<?php if ($tch == "") echo 'not'; ?> fa fa-2x fa-twitch"></a></i></div>
			</div>
		<?php 
			endwhile;
		endif;
		 ?>

		</div>
	</div>
</div>

<!-- MODAL SECTION -->

<?php 
$counter = 0;
if(have_rows('invitados')):
	while(have_rows('invitados')): the_row();
	$image = get_sub_field('image');
	$name = get_sub_field('name');
	$name = explode(' ', $name);
	$bio = get_sub_field('bio');
	$social = get_sub_field('social');
		$fb = $social[0]['fb'];
		$tw = $social[0]['tw'];
		$yt = $social[0]['yt'];
		$tch = $social[0]['twitch'];
 ?>
<div id="modal-<?php echo $counter; ?>" class="reveal modal-invitado tiny" data-reveal>
	<div class="image-single" style="background: url(<?php echo $image; ?>) 50% 50% / cover no-repeat;"></div>
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<h2><?php echo $name[0]; ?> <b><?php echo $name[1]; ?></b></h2>
			<div class="large-6 medium-8 small-12 columns large-centered medium-centered">
				<hr>
				<div class="large-3 medium-3 small-3 columns"><a <?php if ($fb != "") echo 'href="' . $fb . '"'; else echo 'disabled'; ?>><i class="<?php if ($fb == "") echo 'not'; ?> fa fa-2x fa-facebook-square"></a></i></div>
				<div class="large-3 medium-3 small-3 columns"><a <?php if ($tw != "") echo 'href="' . $tw . '"'; else echo 'disabled'; ?>><i class="<?php if ($tw == "") echo 'not'; ?> fa fa-2x fa-twitter-square"></a></i></div>
				<div class="large-3 medium-3 small-3 columns"><a <?php if ($yt != "") echo 'href="' . $yt . '"'; else echo 'disabled'; ?>><i class="<?php if ($yt == "") echo 'not'; ?> fa fa-2x fa-youtube-square"></a></i></div>
				<div class="large-3 medium-3 small-3 columns"><a <?php if ($tch != "") echo 'href="' . $tch . '"'; else echo 'disabled'; ?>><i class="<?php if ($tch == "") echo 'not'; ?> fa fa-2x fa-twitch"></a></i></div>
			</div>

			<p><?php echo $bio; ?></p>
		</div>
	</div>
	<img class="close-button" data-close src="<?php bloginfo('template_url') ?>/img/close_modal.png">
</div>

<?php 
	endwhile;
endif;
 ?>

<!-- MODAL SECTION -->

<script>

function openModal(id) {
	var opt = {animationIn: 'fade-in', animationOut: 'fade-out'}
	var modal = new Foundation.Reveal($('#modal-' + id), opt);

	modal.open();
}
</script>


<?php get_footer(); ?>