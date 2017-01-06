
<?php get_header(); ?>

<div class="oprojeto" id="oprojeto" style="background-image: url('<?php the_field('bg','option'); ?>');">
	<div class="container">
		<div class="row">

			<div class="col-4">
				<div class="topico esq">
					<div class="content">

						<?php if( have_rows('topicos','option') ):
							while ( have_rows('topicos','option') ) : the_row(); ?>

								<div class="item">
									<span class="icone"><img src="<?php the_sub_field('icone','option'); ?>" alt="<?php the_sub_field('nome','option'); ?>"></span>
									<span class="tit"><?php the_sub_field('nome','option'); ?></span>
									<p class="desc"><?php the_sub_field('descricao','option'); ?></p>
									<a href="javascript:" title="Leia mais">Leia mais <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>

								<?php endwhile;
						endif; ?>
						
					</div>
				</div>
			</div>

			<div class="col-4 img-projeto">
				<div class="topico">
					<div class="content">
						<img src="<?php the_field('imagem_tema','option'); ?>" alt="O Projeto">
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="topico dir">
					<div class="content">

						<?php if( have_rows('topicos_2','option') ):
							while ( have_rows('topicos_2','option') ) : the_row(); ?>

								<div class="item">
									<span class="icone"><img src="<?php the_sub_field('icone','option'); ?>" alt="<?php the_sub_field('nome','option'); ?>"></span>
									<span class="tit"><?php the_sub_field('nome','option'); ?></span>
									<p class="desc"><?php the_sub_field('descricao','option'); ?></p>
									<a href="#" title="Leia mais">Leia mais <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>

								<?php endwhile;
						endif; ?>
						
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<header class="header-menu">
	<div class="container-menu">
		<div class="container">

			<h1><a href="<?php echo get_home_url(); ?>" alt="<?php bloginfo( 'name' ); ?>">
				<img src="<?php the_field('logo','option'); ?>" alt="<?php bloginfo( 'name' ); ?>">
			</a></h1>

			<nav class="nav">
				<?php wp_nav_menu( array(
					'menu'           => 'Carta da Terra',
				    'theme_location' => 'primary',
				    'items_wrap'     => '<ul class="menu">%3$s</ul>'
				) ); ?>

				<?php include 'social-cartadaterra.php'; ?>
			</nav>

		</div>
	</div>
</header>

<section class="section" id="blog">
	<div class="container">
		
		<div class="header">
			<h2>BLOG</h2>
			<p class="sub-titulo">Últimos artigos & Notícias</p>
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
		        if(count($posts) > 0){ ?>

					<?php while($posts->have_posts()) : $posts->the_post(); ?>
						<div class="col-4">
							
							<?php get_template_part( 'content', 'list' ); ?>
							
						</div>
					<?php endwhile;

		        }
		    ?>

		</div>

		<div class="footer-list">
			<span class="ico"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></span>
		</div>

	</div>
</section>

<section class="section cinza texto">
	<div class="container">
		
		<div class="row">
			<div class="col-12">
				<h2 class="center">Lorem ipsum <strong>dolor sit</strong> amet consectetur elit? <a href="#" class="button vermelho grande">Conheça</a></h2>
			</div>
		</div>

	</div>
</section>

<section class="section" id="cobertura">
	<div class="container">
		
		<div class="header">
			<h2>COBERTURA</h2>
			<p class="sub-titulo">Fotos & Vídeos</p>
			<span class="ico"><i class="fa fa-camera" aria-hidden="true"></i></span>
		</div>

		<div class="row">
			<div class="col-4 item">
				
			</div>
		</div>

	</div>
</section>

<section class="section" id="apoio">
	<div class="container">
		
		<div class="header">
			<h2>APOIO</h2>
			<p class="sub-titulo">Pessoas & Empresas que nos apoiam</p>
			<span class="ico"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
		</div>

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