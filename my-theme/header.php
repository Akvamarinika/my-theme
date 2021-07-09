<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/FontsConnect.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/base_setings/base_style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	  <?php
		if ($post->ID == 120) {
			echo '<link rel="stylesheet" href="'.get_bloginfo($show = 'url').'/wp-content/themes/my-theme/css/slick.css">';
			echo '<style>.lbl{top:80%}</style>';
		};
		if ($post->ID == 108) {
			echo '<link rel="stylesheet" href="'.get_bloginfo($show = 'url').'/wp-content/themes/my-theme/css/tort.css">';
		}
	  	if ($post->ID == 117) {
			echo '<link rel="stylesheet" href="'.get_bloginfo($show = 'url').'/wp-content/themes/my-theme/css/loyalty.css">';
		}
	  	if ($post->ID == 111) {
			echo '<link rel="stylesheet" href="'.get_bloginfo($show = 'url').'/wp-content/themes/my-theme/css/contacts.css">';
		}
	  	if ($post->ID == 114) {
			echo '<link rel="stylesheet" href="'.get_bloginfo($show = 'url').'/wp-content/themes/my-theme/css/menu.css">';
		}
	  
	?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php
		if ($post->ID == 120) {
			echo 'Главная';
		}
		if ($post->ID == 108) {
			echo 'Целые торты';
		}
		if ($post->ID == 117) {
			echo 'Программа лояльности';
		}
		if ($post->ID == 111) {
			echo 'Контакты';
		}
		if ($post->ID == 114) {
			echo 'Меню';
		}
		?>
	  </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
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
      <ul class="menu" id="headerMenu">
        <li><a href="http://kggg.site/menu/">Меню</a></li>
        <li><a href="http://kggg.site/cakes/">Целые торты</a></li>
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
        <li><a href="http://kggg.site/loyalty/">Программа лояльности</a></li>
        <li><a href="http://kggg.site/contacts/">Контакты</a></li>
      </ul>
    </header>
