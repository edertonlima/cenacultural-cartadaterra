
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="info">
						<h1><a href="<?php echo get_home_url(); ?>" alt="<?php bloginfo( 'name' ); ?>">
							<img src="<?php the_field('logo_rodape','option'); ?>" alt="<?php bloginfo( 'name' ); ?>">
						</a></h1>

						<span class="telefone">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<?php the_field('telefone','option'); ?>
						</span>
						<span class="email">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<?php the_field('email','option'); ?>
						</span>
					</div>

					<span class="copy"><i class="fa fa-copyright" aria-hidden="true"></i> <?php bloginfo( 'name' ); ?>. Todos os direitos reservados.</span>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>