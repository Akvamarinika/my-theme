<?php
/*
Template Name: menu
*/
get_header();
?>
<div id="modal-window__bg" class="modal-window__bg">
	<?php if( have_rows('menuTovars', 'options') ):  while ( have_rows('menuTovars', 'options') ) : the_row();?>
	
		<div class="cake__item-modal <?php the_sub_field('menuItem__class', 'options') ?>" id="<?php the_sub_field('menuTaovarID', 'options') ?>">
		<header>
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
			<h2 class="show section__title"><?php the_sub_field('menuItem__title', 'options') ?></h2>
			<p class="show link" id="link"><a href="http://kggg.site/">Главная</a> > <a href="http://kggg.site/menu/">Меню</a> > <?php the_sub_field('menuItem__title', 'options') ?></p>
			<div class="container menu__block">
				<div class="left__menu-item-modal">
					<nav class="left__menu-block-modal" id="lmb">
						<?php if( have_rows('categorii', 'options') ):  while ( have_rows('categorii', 'options') ) : the_row();?>
						<h4 onclick="closeWindow()" class="left__menu-item title-lvl3" data-fm="<?php the_sub_field('spec__class-categorii', 'options') ?>"><?php the_sub_field('categorii__name', 'options') ?></h4>
					  <?php endwhile; endif;?>
				  </nav>
				</div>
				<div class="right__menu-item-modal">
					<div class="right__menu-item-modal__img">
						<img src="<?php the_sub_field('menuItem__img', 'options') ?>">
					</div>
					<div class="cake__item-modal__textBlock">
						<div class="right_text_block-modal_descript"><?php the_sub_field('menuItem__descript', 'options') ?></div>
						<div class="footer__right-text-block-modal">
							<hr>
							<div class="p__block">
								<p><?php the_sub_field('menuItem__weight', 'options') ?></p>
								<p><?php the_sub_field('menuItem__cost', 'options') ?></p>
							</div>
						</div>
					</div>

				</div>
			</div>
			<footer id="footer_menu">
				<div class="footer__nav">
					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'left_nav', 'menu_class' => 'menu', 'container' => false ) ); ?>
					</nav>
					<div class="footer__info">
						<a href="#"><img src="<?php the_field('vk-footer', 'options')?>" alt="icon"></a>
						<a href="http://kggg.site/"><img src="<?php the_field('logo-footer', 'options')?>" alt="FooterLogo" class="footer_logo"></a>
						<a href="#"><img src="<?php the_field('inst-footer', 'options')?>" alt="icon"></a>
					</div>
						<?php wp_nav_menu( array( 'theme_location' => 'right_nav', 'menu_class' => 'menu', 'container' => false ) ); ?> 
				</div>
				<center><img src="<?php the_field('work', 'options')?>" alt="" class="work"></center>
			</footer>
	    </div>
			
	<?php endwhile; endif;?>
</div>
    <section>
      <h1 class="show section__title main-title"><?php single_post_title(); ?></h1>
      <p class="link"><?php get_breadcrumb(); ?></p>
      <div class="container">
		  <button class="lmb_open" onclick="openNavMenu()">Категории</button>
        <div class="menu__block">
		  
		<div id="nav-wrapper">		
          <nav class="left__menu-block" id="lmbhead">
			 <?php if( have_rows('categorii', 'options') ):  while ( have_rows('categorii', 'options') ) : the_row();?>
			  <div class="left__menu-container">
				  <h4 onclick="openNav()" class="left__menu-item title-lvl3" data-f="<?php the_sub_field('spec__class-categorii', 'options') ?>"><?php the_sub_field('categorii__name', 'options') ?></h4>
			  </div>
			  	
			  <?php endwhile; endif;?>
          </nav>
		</div>	
          <div id="right__menu-block">
			  <?php if( have_rows('menuTovars', 'options') ):  while ( have_rows('menuTovars', 'options') ) : the_row();?>
				<div class=" show cake__item <?php the_sub_field('menuItem__class', 'options') ?>" data-attr="<?php the_sub_field('menuTaovarID', 'options') ?>">
					<div class="zak">Подробнее</div>
					<div class="cake__img-block">
						<img src="<?php the_sub_field('menuItem__img', 'options') ?>" class="cake__img">
						<div class="cake__img_bg"></div>
					</div>
					<div class="cake-info__block">
						<div class="cake__title"><?php the_sub_field('menuItem__title', 'options') ?></div>
						<p class="cake__descript"><?php the_sub_field('menuItem__descript', 'options') ?></p>
						<div class="footer__cart">
							<div class="line-tort"></div>
							<div class="cake__info">
								<div class="cake__weight"><?php the_sub_field('menuItem__weight', 'options') ?></div>
								<div class="cake__price"><?php the_sub_field('menuItem__cost', 'options') ?> </div>
							</div>
						</div>
					</div>
			  </div>
			<?php endwhile; endif;?>
			</div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>


