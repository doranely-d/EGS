<?php get_header(); ?>

<?php get_sidebar('down'); ?>

<?php get_sidebar('section-banner') ?>

<!-- SECTION DIVIDER -->

<div class="under-section-banner">
	<img src="<?php bloginfo('template_url'); ?>/img/faq.png">
</div>


<!-- SECTION DIVIDER -->

<div class="section-div">
	<div class="row">
		<div class="large-8 large-push-2 medium-8 medium-push-2 small-12 columns sexy-accordion">
			<ul class="accordion">
			<?php 
			if(have_rows('faqs')): 
				while (have_rows('faqs')): the_row();
				$question = get_sub_field('question');
				$ask = get_sub_field('ask');
			?>
				<li>
					<a><?php echo $question; ?></a>
					<p><?php echo $ask ;?></p>
				</li>
			<?php 
				endwhile;
			endif;
			 ?>
			</ul> <!-- / accordion -->
		</div>
	</div>
</div>

<!-- SECTION DIVIDER -->

<?php get_footer(); ?>