<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fancybox/fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

<section class="section cobertura">
	<div class="container">

		<div class="row">

			<div class="col-12" style="float: right;">
				<?php while ( have_posts() ) : the_post();

					get_template_part( 'content', 'cobertura' ); ?>

					<?php /* if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; */ ?>
					
					<?php /* the_post_navigation( array(
						'prev_text' => '<span class="prev"><i class="fa fa-long-arrow-left"></i> %title</span>',
						'next_text' => '<span class="next">%title <i class="fa fa-long-arrow-right"></i></span>',
					)); */?>

				<?php endwhile; ?>
			</div>

		</div>

	</div>
</session>

<?php get_footer(); ?>
