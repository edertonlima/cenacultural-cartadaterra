<header class="header-menu<?php if(!is_home()){ echo ' off'; } ?>">
	<div class="container-menu<?php if(!is_home()){ echo ' menu-fixed'; } ?>">
		<div class="container">

			<h1><a href="<?php echo get_home_url(); ?>" alt="<?php bloginfo( 'name' ); ?>">
				<img src="<?php the_field('logo','option'); ?>" alt="<?php bloginfo( 'name' ); ?>">
			</a></h1>

			<nav class="nav">
				<?php /*wp_nav_menu( array(
					'menu'           => 'Carta da Terra',
				    'theme_location' => 'primary',
				    'items_wrap'     => '<ul class="menu">%3$s</ul>'
				) ); */?>

				<ul class="menu">
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34">
						<a href="#oprojeto" title="O Projeto">O PROJETO</a>
						<ul class="submenu">
							<li><a href="#oprojeto" title="Momento Atual" class="link-projetos" rel="momento-atual">Momento Atual</a></li>
							<li><a href="#oprojeto" title="Acreditamos que" class="link-projetos" rel="acreditamos-que">Acreditamos que</a></li>
							<li><a href="#oprojeto" title="Como acontece" class="link-projetos" rel="como-acontece">Como acontece</a></li>
							<li><a href="#oprojeto" title="Vivenciar Objetivos" class="link-projetos" rel="vivenciar-objetivos">VVivenciar Objetivos</a></li>
							<!--<li><a href="#oprojeto" title="Produção" class="link-projetos" rel="producao">Produção</a></li>-->
							<!--<li><a href="#oprojeto" title="Onde Vamos" class="link-projetos" rel="quem-ja-recebeu-a-carta">Onde Vamos</a></li>-->
						</ul>
					</li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-35"><a href="#blog">BLOG</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-131"><a href="#oprojeto" title="Produção" class="link-projetos" rel="producao">PRODUÇÃO</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36"><a href="#cobertura" title=Registros"">REGISTROS</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-132"><a href="#oprojeto" title="Onde Vamos" class="link-projetos" rel="onde-vamos">ONDE VAMOS</a></li>
				</ul>

				<?php include 'social.php'; ?>
			</nav>

		</div>
	</div>
</header>