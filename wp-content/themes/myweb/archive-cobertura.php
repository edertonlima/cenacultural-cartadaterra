<?php get_header(); ?>

<section class="section cobertura" id="cobertura">
	<div class="container">
		
		<div class="header">
			<h2>COBERTURA</h2>
			<p class="sub-titulo">Fotos & Vídeos</p>
			<span class="ico"><i class="fa fa-camera" aria-hidden="true"></i></span>
		</div>

		<div class="row">

			<div class="categorias">
				<!--<a href="javascript:" rel="todos">Todos</a>-->
				<a href="javascript:" rel="fotos" class="ativo">Fotos</a>
				<a href="javascript:" rel="videos">Vídeos</a>
			</div>
			
			<ul>
				
				<?php if ( have_posts() ) :

					while ( have_posts() ) : the_post();

						get_template_part( 'content','cobertura-list');
						
					endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
						'next_text'          => __( 'Next page', 'twentyfifteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
					) );

				else :
					get_template_part( 'content', 'none' );

				endif; ?>
			</ul>
		</div>

	</div>
</session>

<?php get_footer(); ?>