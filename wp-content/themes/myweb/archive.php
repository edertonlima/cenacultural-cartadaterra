<?php get_header(); ?>

<section class="section" id="blog">
	<div class="container">
		
		<header class="header">
			<h2>BLOG</h2>
			<p class="sub-titulo">Todos os Artigos & Notícias</p>
			<span class="ico"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
		</header>

		<div class="row">
				
			<?php if ( have_posts() ) :

				while ( have_posts() ) : the_post();
					$categorias = get_the_category();

					if(count($categorias) == 1){
						if($categorias[0]->slug != 'restrito'){
							get_template_part( 'content','list');
						}
					}else{
						get_template_part( 'content','list');
					}
					
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

		</div>

	</div>
</session>

<?php get_footer(); ?>