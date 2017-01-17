<article class="item detalhe-post">

	<header class="header">
		<h2><?php the_title(); ?></h2>
		<p class="sub-titulo">
			<i class="fa fa-calendar" aria-hidden="true"></i>
			<?php the_date(); ?> & <?php the_category(); ?>
		</p>
		<span class="ico"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
	</header>

	<div class="conteudo-post">
		<div class="detalhe-post">
			<?php 
			if(is_single()){ $size = ''; }else{ $size = ''; }
			$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
			if($imagem[0] != ''){ ?>
				<div class="imagem-detalhe">
					<a href="<?php if($imagem[0]){ echo $imagem[0]; } ?>" class="fancybox">
						<img src="<?php if($imagem[0]){ echo $imagem[0]; } ?>" alt="<?php the_title(); ?>" class="image-post">
					</a>
				</div>
			<?php } ?>				

			<div class="conteudo">
				<?php the_content(); ?>

				<?php if(get_field('galeria')){ ?>
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

				<?php if( have_rows('midias') ): ?>
					<div class="galeria">
						<ul class="row">
					    	<?php while ( have_rows('midias') ) : the_row(); ?>

					            <li class="col-6">
									<?php the_sub_field('midia'); ?>
					            </li>

						    <?php endwhile; ?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if( have_rows('arquivos') ): ?>
					<div class="arquivos col-12">
						
						<ul>
					    	<?php while ( have_rows('arquivos') ) : the_row(); ?>

					            <li>

									<?php 
										$arquivo = get_sub_field('arquivo');
										//print_r($arquivo);
									 ?>
									 <a href="<?php echo $arquivo['url']; ?>" target="_blank" title="<?php the_sub_field('nome'); ?>">
									 	<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
									 	<div class="info">
									 		<h4><?php the_sub_field('nome'); ?></h4>
										 	<span><?php echo $arquivo['filename']; ?></span>
										</div>
									 </a>
					            </li>

						    <?php endwhile; ?>
						</ul>
					</div>
				<?php endif; ?>

			</div>
		</div>

	</div>

	<footer class="post-footer">		
		<?php include 'social-share.php'; ?>

	</footer>

	<div class="tags">
		 <?php //the_tags(); ?>
	</div>
</article>