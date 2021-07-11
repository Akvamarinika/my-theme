<?php
/*
Template Name: Tort
*/
get_header();
?>
<div id="modal-window__bg" class="modal-window__bg" >
		<?php if( have_rows('fullTorts', 'options') ):  while ( have_rows('fullTorts', 'options') ) : the_row();?>
			<div class="cake__item-modal" id="<?php the_sub_field('fullTortsID', 'options') ?>">
				<h2 class="cake__item-modal-title">Онлайн заказ торта</h2>
				<div class="cake__header">
					<img src="<?php the_sub_field('cake__img-fullTorts', 'options')?> " class="cake__img-modal">
					<div class="cake-info__block-modal">
						<div class="cake__title"><?php the_sub_field('cake__title-fullTorts', 'options') ?></div>
						<p class="cake__descript"><?php the_sub_field('cake__descript-fullTorts', 'options') ?></p>
					</div>
				</div>
				<center>
					<img src="../wp-content/themes/my-theme/img/line.png" class="line-modal"></center>
				<div class="cake__info">
					<div class="cake__weight"><?php the_sub_field('cake__gramma-fullTorts', 'options') ?></div>
					<div class="cake__price"><?php the_sub_field('cake__cost-fullTorts', 'options') ?></div>
				</div>
				<form method="post">
					<input type="text" placeholder="Ваш телефон">
					<textarea placeholder="Комментарии к заказу"></textarea>
					<div class="checked">
						<input type="checkbox" id="radiobtn"  class="chbtn1" onchange="checkradio()">
						<label for="radiobtn" class="checked__item"></label>Согласен(а) на обработку моих персональных данных
					</div>
					<div class="submit btn-submit"><button type="submit" id="submit-btn1" >Отправить заявку</button></div>
				</form>
		</div>
		<?php endwhile; endif;?>
	</div>
  <section>
    <h1 class="main-title"><?php single_post_title(); ?></h1>
    <p class="link"><?php get_breadcrumb(); ?></p>
    <div class="container">
      <div class="cakes__text"><?php the_field('cakes__descript', 'options');?></div>
      <center><img src="../wp-content/themes/my-theme/img/line-mini.png" alt="" class="mini__line"></center>
      <h4><?php the_field('cakes__title-2', 'options');?></h4>
      <div class="cakes__text"><?php the_field('cakes__descript-2', 'options');?></div>
    </div>
  </section>
  <section>
    <div class="container">
      <div id="cakes">
		<?php if( have_rows('fullTorts', 'options') ):  while ( have_rows('fullTorts', 'options') ) : the_row();?>
			<div class="cake__item" data-attr="<?php the_sub_field('fullTortsID', 'options') ?>">
				<div class="zak">Заказать</div>
				<div class="cake__img-block"><img src="<?php the_sub_field('cake__img-fullTorts', 'options') ?>" class="cake__img">
					<div class="cake__img_bg"></div>
				</div>
				<div class="cake-info__block">
					<div class="cake__title"><?php the_sub_field('cake__title-fullTorts', 'options') ?></div>
					<p class="cake__descript"><?php the_sub_field('cake__descript-fullTorts', 'options') ?></p>
					<div class="footer__cart">
						<div class="line-tort"></div>
						<div class="cake__info">
							<div class="cake__weight"><?php the_sub_field('cake__gramma-fullTorts', 'options') ?></div>
							<div class="cake__price"><?php the_sub_field('cake__cost-fullTorts', 'options') ?></div>
						</div>
					</div>
				</div>
		  </div>
		<?php endwhile; endif;?>
		</div>
    </div>
  </section>

<?php
get_footer();
