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
		  <button id="menuButtonn" onclick="menuButtonModal()"></button>
		  <label for="menuButtonn" class="lbl">
				<?php $burger__main = get_field('burger', 'options');
				echo wp_get_attachment_image( $burger__main );?>
				</label>
		  <ul class="menu-modal" id="headerMenu-modal">
			<li><a href="http://kggg.site/menu/">Меню</a></li>
			<li><a href="http://kggg.site/cakes/">Целые торты</a></li>
			  <li><div class="logo">
				  <?php
				  	$imageg = get_field('header_logo-white', 'options');
					$size = 'full';
					echo wp_get_attachment_image( $imageg, $size );?>
				  </div></li>
			<li><a href="http://kggg.site/loyalty/">Программа лояльности</a></li>
			<li><a href="http://kggg.site/contacts/">Контакты</a></li>
		  </ul>
    	</header>
			<h2 class="show section__title"><?php the_sub_field('menuItem__title', 'options') ?></h2>
			<p class="show link" id="link"><a href="http://kggg.site/">Главная</a> > <a href="http://kggg.site/menu/">Меню</a> > <?php the_sub_field('menuItem__title', 'options') ?></p>
			<div class="container menu__block">
				<div class="left__menu-item-modal">
					<nav class="left__menu-block-modal" id="lmb">
						<?php if( have_rows('categorii', 'options') ):  while ( have_rows('categorii', 'options') ) : the_row();?>
						<h1 onclick="closeWindow()" class="left__menu-item" data-fm="<?php the_sub_field('spec__class-categorii', 'options') ?>"><?php the_sub_field('categorii__name', 'options') ?></h1>
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
						<ul>
							<li><a href="http://kggg.site/menu/">Меню</a></li>
							<li><a href="http://kggg.site/cakes/">Целые торты</a></li>
						</ul>
					</nav>
					<div class="footer__info">
						<a href="#"><img src="<?php the_field('vk-footer', 'options')?>" alt="icon"></a>
						<img src="<?php the_field('logo-footer', 'options')?>" alt="FooterLogo" class="footer_logo">
						<a href="#"><img src="<?php the_field('inst-footer', 'options')?>" alt="icon"></a>
					</div>
					<nav>
						<ul>
							<li id="footer-mrg"><a href="http://kggg.site/loyalty/">Программа лояльности</a></li>
							<li><a href="http://kggg.site/contacts/">Контакты</a></li>
						</ul>
					</nav>
				</div>
				<center><img src="<?php the_field('work', 'options')?>" alt="" class="work"></center>
			</footer>
	    </div>
			
	<?php endwhile; endif;?>
</div>
    <section>
      <h2 class="show section__title">Меню</h2>
      <p class="show link" id="link"><a href="http://kggg.site/">Главная</a> > <a href="http://kggg.site/menu/">Меню</a></p>
      <div class="container">
		  <button class="lmb_open" onclick="openNavMenu()">Категории</button>
        <div class="menu__block">
		  
          <nav class="left__menu-block" id="lmbhead">
			 <?php if( have_rows('categorii', 'options') ):  while ( have_rows('categorii', 'options') ) : the_row();?>
			  	<h1 onclick="openNav()" class="left__menu-item" data-f="<?php the_sub_field('spec__class-categorii', 'options') ?>"><?php the_sub_field('categorii__name', 'options') ?></h1>
			  <?php endwhile; endif;?>
          </nav>
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
