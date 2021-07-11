<?php
/*
Template Name: contact
*/
get_header();
?>
    <section>
      <h1 class="section__title main-title"><?php single_post_title(); ?></h1>
      <p class="link"><?php get_breadcrumb(); ?></p>
      <a href="http://kggg.site/" class="return"><img src="<?php the_field('return-icon', 'options');?>" alt=""> Вернуться на главную</a>
      <div class="container">
        <div class="contact__info">
          <h2 class="title-lvl3"><?php the_field('city_contact', 'options');?></h2>
          <div class="contact-info__item">
            <img src="<?php the_field('phone-icon', 'options');?>" class="item__round"></img>
            <div class="round__title"><?php the_field('phone', 'options');?></div>
          </div>
          <div class="contact-info__item">
            <a href="#"><img src="<?php the_field('facebook-icon-2', 'options');?>" class="item__round mrg"></img></a>
            <a href="#"><img src="<?php the_field('vk-icon-2', 'options');?>" class="item__round mrg"></img></a>
            <a href="#"><img src="<?php the_field('inct-icon-2', 'options');?>" class="item__round mrg"></img></a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="contact__map" id="map"></div>
    </section>
<?php get_footer(); ?>
