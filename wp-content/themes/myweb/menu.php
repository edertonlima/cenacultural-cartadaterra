<header class="header-menu<?php if(!is_home()){ echo ' off'; } ?>">
	<div class="container-menu<?php if(!is_home()){ echo ' menu-fixed'; } ?>">
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

				<?php include 'social.php'; ?>
			</nav>

		</div>
	</div>
</header>