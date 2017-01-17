<?php
	$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
	if($imagem[0] != ''){

		if(get_field('video')){ ?>
			<li class="col-3 item videos">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<img src="<?php if($imagem[0]){ echo $imagem[0]; } ?>" alt="<?php the_title(); ?>" class="image-post">
					<span class="ico">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</span>
				</a>
			</li>
		<?php }

		if(get_field('galeria')){ ?>
			<li class="col-3 item fotos">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<img src="<?php if($imagem[0]){ echo $imagem[0]; } ?>" alt="<?php the_title(); ?>" class="image-post">
					<span class="ico">
						<i class="fa fa-camera" aria-hidden="true"></i>
					</span>
				</a>
			</li>
		<?php }

	} 
?>