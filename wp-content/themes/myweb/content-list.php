<div class="col-4">	
	<article class="item">
		<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
		<a class="img" href="<?php the_permalink(); ?>" class="">
			<img src="<?php if($imagem[0]){ echo $imagem[0]; } ?>" alt="">
		</a>

		<header class="post-info">
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<span class="post-date" title="<?php echo get_the_date(); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></span>
		</header>

		<div class="post-body">
			<?php the_excerpt(); ?>
		</div>
		

		<footer class="post-footer">
			<a class="button" href="<?php the_permalink(); ?>" title="Leia mais">Leia mais</a>
		</footer>

	</article>
</div>