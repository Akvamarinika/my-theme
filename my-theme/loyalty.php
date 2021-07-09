<?php
/*
Template Name: loyalty
*/
get_header();
?>
    <section>
      <h2 class="section__title"><?php the_field('loyalty__title', 'options');?></h2>
      <p class="link"><a href="http://kggg.site/">Главная</a> > <a href="http://kggg.site/loyalty/">Программа лояльности</a></p>
      <div class="img__container">
        <a href="http://kggg.site/" class="return"><img src="<?php the_field('return-icon', 'options');?>" alt=""> <?php the_field('reurn', 'options');?></a>
        <img src="<?php the_field('loyalty__img', 'options');?>" alt="" class="layout">
      </div>
    </section>
    <section>
      <div class="info">
        <p><?php the_field('loyalty__text', 'options');?></p>
      </div>
      <div class="container">
        <div class="info__text">
          <p><?php the_field('program__text-1', 'options');?></p>
          <p><?php the_field('program__text-2', 'options');?></p>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="advanteges">
			<?php if( have_rows('program__advantages', 'options') ):  while ( have_rows('program__advantages', 'options') ) : the_row();?>
				<div class="advantege__item">
					<div class="advantege__img"><img src="<?php the_sub_field('program__icon', 'options');?>" alt=""></div>
					<div class="advantege__title"><?php the_sub_field('advantages__descript', 'options');?></div>
				</div>
			<?php endwhile; endif;?>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="rules">
          <div class="rules__title"><?php the_field('cart__title', 'options');?></div>
          <p class="rules__descript"><?php the_field('cart__descript', 'options');?></p>
          <a href="#">​<?php the_field('rules__link', 'options');?> </a>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <form action="" id="form">
          <h3><?php the_field('anket__title', 'options');?></h3>
          <div class="prize">
            <div class="prize__item">
              <img src="<?php the_field('loyalty-plus-1__icon', 'options');?>" alt="">
              <input type="radio" name="rad" value="торты" id="rad1">
              <label for="rad1" class="rad"></label>
              <p><?php the_field('loyalty-plus-1', 'options');?> </p>
            </div>
            <div class="prize__item">
              <img src="<?php the_field('loyalty-plus-2__icon', 'options');?>" alt="">
              <input type="radio" name="rad" value="кофе" id="rad2">
              <label for="rad2" class="rad"></label>
              <p><?php the_field('loyalty-plus-2', 'options');?></p>
            </div>
          </div>
          <div class="col">
            <input type="text" placeholder required name="SecondName" class="form__input">
            <div class="placeholder">Ваша фамилия <span style="color: red;">*</span></div>
          </div>
          <div class="col">
            <input type="text" placeholder required name="Name" class="form__input">
            <div class="placeholder">Ваше имя <span style="color: red;">*</span></div>
          </div>
          <div class="col">
            <input type="text" placeholder required name="MiddleName" class="form__input">
            <div class="placeholder">Ваше отчество <span style="color: red;">*</span></div>
          </div>
          <div class="col">
            <input type="text" placeholder required name="Phone" class="form__input">
            <div class="placeholder">Мобильный телефон <span style="color: red;">*</span></div>
          </div>
          <div class="col">
            <input type="text" placeholder required name="Email" class="form__input">
            <div class="placeholder">E-mail <span style="color: red;">*</span></div>
          </div>
          <p class="mes"><span style="color: red;">*</span> Звездочкой отмечены поля, обязательные для заполнения.</p>
          <div class="checked"><input type="checkbox" id="radiobtn" onchange="check()"><label for="radiobtn" class="checked__item"></label>Согласен(а) на обработку моих персональных данных</div>
          <div class="submit"><button type="submit" id="submit" disabled>Отправить заявку</button></div>

        </form>
      </div>
    </section>
<?php get_footer();?>
