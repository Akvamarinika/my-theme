<footer id="footer_menu">
	<div class="footer__nav">
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'left_nav', 'menu_class' => 'menu', 'menu_id' => 'left_footer', 'container' => false ) ); ?>
		</nav>
		<div class="footer__info">
			<a href="#"><img src="<?php the_field('vk-footer', 'options')?>" alt="icon"></a>
			<a href="http://kggg.site/"><img src="<?php the_field('logo-footer', 'options')?>" alt="FooterLogo" class="footer_logo"></a>
			<a href="#"><img src="<?php the_field('inst-footer', 'options')?>" alt="icon"></a>
		</div>
			<?php wp_nav_menu( array( 'theme_location' => 'right_nav', 'menu_class' => 'menu', 'menu_id' => 'right_footer', 'container' => false ) ); ?> 
	</div>
	<center><img src="<?php the_field('work', 'options')?>" alt="" class="work"></center>
</footer>

<?php wp_footer(); ?>
</body>
</html>
