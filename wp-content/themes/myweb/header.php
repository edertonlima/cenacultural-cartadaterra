<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php

?>
<?php 
	$titulo = '';
	$descricao = '';get_field('descricao', 'option');
	$imgPage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
	$page = get_page_by_path('sobre-mim');
	$imagem = '';get_field('imagem_perfil',$page->ID);
	$url = get_home_url();

	if(is_category()){ 
		$category= get_queried_object(); //print_r($category);
		$infoCategoria = get_the_category($category->term_id); //print_r($infoCategoria);
		$titulo = $infoCategoria[0]->name.' - ';
		$descricao = $infoCategoria[0]->description;
		//$imagem = '';
		$url = $url.'/'.$infoCategoria[0]->slug;
	}

	if(is_page()){
		if(!is_home()){
			$titulo = get_the_title().' - ';
			if(get_field('descrição') != ''){
				$descricao = get_field('descrição');
			}
			if($imgPage[0] != ''){
				$imagem = $imgPage[0];	
			}			
			$url = get_the_permalink();
		}
	}

	if(is_single()){
		$titulo = get_the_title().' - ';
		if(get_field('descrição') != ''){
			$descricao = get_field('descrição');
		}
		if($imgPage[0] != ''){
			$imagem = $imgPage[0];	
		}			
		$url = get_the_permalink();
	}

	$titulo = $titulo.get_bloginfo('name'); 
	$autor = get_bloginfo('name');
?>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<link rel="icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo $descricao; ?>" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="<?php echo $autor; ?>" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $titulo; ?>" />

<!-- SOCIAL META -->
<meta itemprop="name" content="<?php echo $titulo; ?>" />
<meta itemprop="description" content="<?php echo $descricao; ?>" />
<meta itemprop="image" content="<?php echo $imagem; ?>" />

<html itemscope itemtype="<?php echo $url; ?>" />
<link rel="image_src" href="<?php echo $imagem; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $titulo; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $descricao; ?>" />
<meta property="og:image" content="<?php echo $imagem; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
<meta property="fb:admins" content="<?php echo $autor; ?>" />
<meta property="fb:app_id" content="1205127349523474" /> 

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $url; ?>" />
<meta name="twitter:title" content="<?php echo $titulo; ?>" />
<meta name="twitter:description" content="<?php echo $descricao; ?>" />
<meta name="twitter:image" content="<?php echo $imagem; ?>" />
<!-- SOCIAL META -->

<title><?php echo $titulo; ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen" />

<!-- JQUERY -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.2.3.min.js"></script>
<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>-->

<script type="text/javascript">

	$(document).ready(function(){

		<?php if(is_home()){ ?>
			var heightPage = $(window).height();
			function menuFixed(position,heightPage){		
				heightPage = heightPage;
				if(position > heightPage){
					$('.container-menu').addClass('menu-fixed');
					$('.header-menu').removeClass('off');
				}else{
					$('.container-menu').removeClass('menu-fixed');
					$('.header-menu').addClass('off');
				}
			}

			position = jQuery(window).scrollTop();
	    	menuFixed(position,heightPage);
		    jQuery(window).scroll(function(){
		    	position = jQuery(window).scrollTop();
		    	menuFixed(position,heightPage);
		    });
		<?php }else{ ?>
	   		$('.menu li').each(function(){
	   			var url = '<?php echo get_home_url(); ?>/'+($('a', this).attr('href'));
	   			$('a', this).attr('href',url);
	   		});

	   		$('.social li.fale-conosco').each(function(){
	   			var url = '<?php echo get_home_url(); ?>/'+($('a', this).attr('href'));
	   			$('a', this).attr('href',url);
	   		});
		<?php } ?>

		/* CATEGORIAS */
		$('.categorias a').click(function(){
			var classItem = $(this).attr('rel');
			classItem = '.cobertura .item.'+classItem;
			$('.cobertura .item').hide();
			$(classItem).show();
			$('.categorias a').removeClass('ativo');
			$(this).addClass('ativo');
		});

		/* OPEN/CLOSE MENU */
		$('.menu-mobile').click(function(){
			if($(this).hasClass('active')){
				$(this).removeClass('active');
				$('.nav').css('top','-100vh');
				$('.submenu').hide();
			}else{
				$(this).addClass('active');
				$('.nav').css('top','0');
			}
		});

		// MENU PROJETO
		/*
		<?php if( have_rows('topicos','option') ): ?>
			$('.menu-item-34').append('<ul class="submenu"></ul>');
			<?php while ( have_rows('topicos','option') ) : the_row(); ?>
				$('.menu-item-34 .submenu').append('<li><a href="#oprojeto" title="<?php the_sub_field('nome','option'); ?>" class="link-projetos" rel="<?php the_sub_field('ancora','option'); ?>"><?php the_sub_field('nome','option'); ?></a></li>');
			<?php endwhile;
			while ( have_rows('topicos_2','option') ) : the_row(); ?>
				$('.menu-item-34 .submenu').append('<li><a href="#oprojeto" title="<?php the_sub_field('nome','option'); ?>" class="link-projetos" rel="<?php the_sub_field('ancora','option'); ?>"><?php the_sub_field('nome','option'); ?></a></li>');
			<?php endwhile;
		endif; ?>*/

		$('.link-projetos').click(function(){
			var itemMenu = '#'+($(this).attr('rel'))+' .cont-item';
			$('.cont-item').hide();
			$(itemMenu).show();
		});

	});	

</script>

</head>
<body <?php body_class(); ?>>

	<?php if(is_home()){ ?>
		<header class="top-header">
			<div class="container">				
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
		</header>
	<?php }else{
		include 'menu.php';
	} ?>
