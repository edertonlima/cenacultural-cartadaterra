<ul class="social">
	
	<li class="fale-conosco">
		<a href="#faleconosco" title="Fale Conosco">
			<i class="fa fa-envelope-o"></i> Fale Conosco
		</a>
	</li>

	<?php if(get_field('facebook','option')){ ?>
		<li><a href="<?php the_field('facebook','option') ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
	<?php } ?>
	<?php if(get_field('twitter','option')){ ?>
		<li><a href="<?php the_field('twitter','option') ?>" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
	<?php } ?>
	<?php if(get_field('instagram','option')){ ?>
		<li><a href="<?php the_field('instagram','option') ?>" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
	<?php } ?>
	<?php if(get_field('googleplus','option')){ ?>
		<li><a href="<?php the_field('googleplus','option') ?>" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a></li>
	<?php } ?>
	<?php if(get_field('youtube','option')){ ?>
		<li><a href="<?php the_field('youtube','option') ?>" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
	<?php } ?>

	<li class="search"><a href="javascript:" title="O que você está procurando?"><i class="fa fa-search"></i></a></li>
</ul>