<article class="item detalhe-cobertura">

	<header class="header">
		<h2><?php the_title(); ?></h2>
		<p class="sub-titulo">
			<i class="fa fa-calendar" aria-hidden="true"></i>
			<?php the_date(); ?>
		</p>
		<span class="ico"><i class="fa fa-camera" aria-hidden="true"></i></span>
	</header>

	<div class="conteudo-post">
		<div class="descricao"><?php the_excerpt(); ?></div>

		<div class="conteudo">
			<?php if(get_field('video')){ ?>
				<div class="media">
					<?php the_field('video'); ?>
				</div>
			<?php }

			if(get_field('galeria')){ ?>
				<div class="galeria">
					<?php 
						$images = get_field('galeria');

						if( $images ): ?>
						    <ul class="row">
						        <?php foreach( $images as $image ): ?>
						            <li class="col-3 item fotos">
						                <a href="<?php echo $image['url']; ?>" class="fancybox" rel="galeria">
						                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" class="image-post" />
											<span class="ico">
												<i class="fa fa-search" aria-hidden="true"></i>
											</span>
						                </a>
						            </li>
						        <?php endforeach; ?>
						    </ul>
						<?php endif;
					?>
				</div>
			<?php } ?>
		</div>

	</div>

	<footer class="post-footer">		
		<?php include 'social-share.php'; ?>

	</footer>

	<div class="tags">
		 <?php //the_tags(); ?>
	</div>
</article>


<?php /*
	$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
	if($imagem[0] != ''){

		if(get_field('video')){ ?>
			<li class="col-3 item videos">
				<a href="javascript:" title="<?php the_title(); ?>">
					<img src="<?php if($imagem[0]){ echo $imagem[0]; } ?>" alt="<?php the_title(); ?>" class="image-post">
					<span class="ico">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</span>
				</a>
			</li>
		<?php }

		if(get_field('galeria')){ ?>
			<li class="col-3 item fotos">
				<a href="javascript:" title="<?php the_title(); ?>">
					<img src="<?php if($imagem[0]){ echo $imagem[0]; } ?>" alt="<?php the_title(); ?>" class="image-post">
					<span class="ico">
						<i class="fa fa-camera" aria-hidden="true"></i>
					</span>
				</a>
			</li>
		<?php }

	} */
?>