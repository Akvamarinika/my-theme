<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php single_post_title(); ?>
	 </title>

	<style>
		.main__section{
			background-image: url('<?php the_field('main__section-img', 'options')?>')}
		/* Стрелка влево */
		.slick-arrow.slick-prev{left: 0; background: url("<?php the_field('left__arrow-img', 'options')?>") 0 0 no-repeat}
		/* Стрелка вправо */
		.slick-arrow.slick-next{right: 0; background: url("<?php the_field('right__arrow-img', 'options')?>") 0 0 no-repeat}
		.line-tort{background-image: url(<?php the_field('line', 'options')?>);}
		.cake__item:hover .line-tort{background-image: url(<?php the_field('line-hover', 'options')?>);}
	</style>
	<?php wp_head(); ?>
  </head>
  <body id="body">
    <header>
	  <button id="menuButton" onclick="menuButton()"></button>
	  <label for="menuButton" class="lbl">
		  <?php
		  $burger__main = get_field('burger', 'options');
		  $burger__other = get_field('burger__main', 'options');
		  $full = 'full';
		  if ($post->ID == 120) {
			  echo wp_get_attachment_image( $burger__other);
			} else{
				echo wp_get_attachment_image( $burger__main );
			}
		?>
		</label>
		
	<nav class='my-menu'> <?php wp_nav_menu( array( 'theme_location' => 'left_nav', 'menu_class' => 'menu', 'menu_id' => 'headerMenu', 'container' => false ) ); ?>         
		  <a href="http://kggg.site/"class="logo">
			<?php
				$image = get_field('header__logo', 'options');
				$image2 = get_field('header_logo-white', 'options');
				$size = 'full';

				if ($post->ID == 120) {
					echo wp_get_attachment_image( $image, $size );
				} else{
					echo wp_get_attachment_image( $image2, $size );
				}
			?>
		  </a> 
		  <?php wp_nav_menu( array( 'theme_location' => 'right_nav', 'menu_class' => 'menu', 'menu_id' => 'headerMenu2', 'container' => false ) ); ?> 
	</nav> 
		

    </header>
