
<?php get_header(); ?>

<div class="section capa" style="background-image: url('<?php the_field('bg','option'); ?>');">
	<div class="container">
		<div class="row">

			<div class="col-12 img-projeto">
				<div class="topico">
					<div class="content">
						<img src="<?php the_field('imagem_tema','option'); ?>" alt="O Projeto">
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include 'menu.php'; ?>

<div class="oprojeto section" id="oprojeto">
	<div class="container">

		<div class="header">
			<h2>O PROJETO</h2>
			<p class="sub-titulo">sobre & informações</p>
			<span class="ico"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
			<p class="resumo"><?php the_field('resumo-projeto','option'); ?></p>
		</div>

		<div class="row">

			<div class="col-6">
				<div class="topico esq">
					<div class="content">

						<?php if( have_rows('topicos','option') ):
							while ( have_rows('topicos','option') ) : the_row(); ?>

								<div class="item" id="<?php the_sub_field('ancora','option'); ?>">
									<span class="icone"></span>
									<span class="tit"><?php the_sub_field('nome','option'); ?></span>
									<p class="desc"><?php the_sub_field('descricao','option'); ?></p>
									<p class="cont-item"><?php the_sub_field('conteudo','option'); ?></p>
									<a href="javascript:" title="" class="leia-mais">Leia mais <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</div>

								<?php endwhile;
						endif; ?>
						
					</div>
				</div>
			</div>

			<div class="col-6">
				<div class="topico dir">
					<div class="content">

						<?php if( have_rows('topicos_2','option') ):
							while ( have_rows('topicos_2','option') ) : the_row(); ?>

								<div class="item" id="<?php the_sub_field('ancora','option'); ?>">
									<span class="icone"></span>
									<span class="tit"><?php the_sub_field('nome','option'); ?></span>
									<p class="desc"><?php the_sub_field('descricao','option'); ?></p>
									<p class="cont-item"><?php the_sub_field('conteudo','option'); ?></p>
									<a href="javascript:" title="" class="leia-mais">Leia mais <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</div>

								<?php endwhile;
						endif; ?>
						
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<section class="section cinza texto">
	<div class="container">
		
		<div class="row">
			<div class="col-12">
				<h2 class="center">Você já conhece o projeto <strong>Arte Ambiental?</strong><a href="#" class="button vermelho grande">Conheça</a></h2>
			</div>
		</div>

	</div>
</section>

<section class="section" id="blog">
	<div class="container">
		
		<div class="header">
			<h2>BLOG</h2>
			<p class="sub-titulo">Últimos Artigos & Notícias</p>
			<span class="ico"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
		</div>

		<div class="row">

		    <?php
		        $getPosts = array(
		            'post_type'   => 'post',
		            'post_status' => 'any',
		            'orderby'     => date,
		            'order'       => 'DESC'
		        );
		        $posts = new WP_Query( $getPosts );
		        if(count($posts) > 0){

					while($posts->have_posts()) : $posts->the_post();
						$categorias = get_the_category();
						
						if(count(get_the_category()) == 1){
							if($categorias[0]->slug != 'restrito'){
								get_template_part( 'content','list');
							}
						}else{
							get_template_part( 'content','list');
						}					
							
					endwhile;

		        }
		    ?>

		</div>

		<div class="footer-list">
			<span class="ico"><a href="<?php echo get_home_url(); ?>/blog"><i class="fa fa-plus" aria-hidden="true"></i></a></span>
		</div>

	</div>
</section>

<section class="section cobertura divisao" id="cobertura">
	<div class="container">
		
		<div class="header">
			<h2>COBERTURA</h2>
			<p class="sub-titulo">Fotos & Vídeos</p>
			<span class="ico"><i class="fa fa-camera" aria-hidden="true"></i></span>
		</div>

		<div class="row">
			<div class="row">

				<div class="categorias">
					<!--<a href="javascript:" rel="todos">Todos</a>-->
					<a href="javascript:" rel="fotos" class="ativo">Fotos</a>
					<a href="javascript:" rel="videos">Vídeos</a>
				</div>

			    <?php
			        $getPosts = array(
			            'post_type'   => 'cobertura',
			            'post_status' => 'any',
			            'orderby'     => date,
			            'order'       => 'DESC'
			        );
			        $posts = new WP_Query( $getPosts );
			        if(count($posts) > 0){ ?>
						<ul>
							<?php while($posts->have_posts()) : $posts->the_post(); 

								get_template_part( 'content','cobertura-list');
							
							endwhile; ?>
						</ul>
			        <?php }
			    ?>

			</div>
		</div>

		<div class="footer-list">
			<span class="ico"><a href="<?php echo get_home_url(); ?>/cobertura"><i class="fa fa-plus" aria-hidden="true"></i></a></span>
		</div>

	</div>
</section>

<section class="section apoio divisao" id="apoio">
	<div class="container">
		
		<div class="header">
			<h2>APOIO</h2>
			<p class="sub-titulo">Pessoas & Empresas que nos apoiam</p>
			<span class="ico"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
		</div>

		<?php if( have_rows('apoio','option') ): ?>
			<ul>
				<?php while ( have_rows('apoio','option') ) : the_row(); 

					if(get_sub_field('logo','option')){ ?>				
						<li class="item">
							<?php if(get_sub_field('url','option')){ ?>	
								<a href="<?php the_sub_field('url','option'); ?>" target="_blank" title="<?php the_sub_field('nome','option'); ?>">
							<?php } ?>
								<img src="<?php the_sub_field('logo','option'); ?>" alt="<?php the_sub_field('nome','option'); ?>">
							<?php if(get_sub_field('url','option')){ ?>	
								</a>
							<?php } ?>
						</li>
					<?php }

				endwhile; ?>
			</ul>
		<?php endif; ?>			

	</div>
</section>

<section class="section cinza faleconosco" id="faleconosco">
	<div class="container">
		
		<div class="row">
			<div class="col-12">
				<h2 class="center vermelho">FALE CONOSCO</h2>
				<p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim fermentum leo, eu auctor lectus.</p>
			</div>
		</div>

		<form action="#" class="row">
			<fieldset class="col-6">
				<input type="text" name="" id="" placeholder="Nome" class="grande">
			</fieldset>

			<fieldset class="col-6">
				<input type="text" name="" id="" placeholder="E-mail" class="grande">
			</fieldset>

			<fieldset class="col-12">
				<textarea name="" id="" placeholder="Mensagem" class="grande"></textarea>
			</fieldset>

			<fieldset class="col-12">
				<button type="button" class="enviar grande vermelho">Enviar</button>
			</fieldset>
		</form>

	</div>
</section>


<?php get_footer(); ?>

<script>
	$('.leia-mais').click(function(){
		if($(this).hasClass('recolher')){
			$(this).prev().hide();
			$(this).removeClass('recolher').html('Leia mais <i class="fa fa-angle-down" aria-hidden="true"></i>');
		}else{
			$('.cont-item').hide();
			$('.leia-mais').removeClass('recolher').html('Leia mais <i class="fa fa-angle-down" aria-hidden="true"></i>');
			$(this).prev().show();
			$(this).addClass('recolher').html('Recolher <i class="fa fa-angle-up" aria-hidden="true"></i>');
		}
	});
</script>