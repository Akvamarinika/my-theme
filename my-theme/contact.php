<?php
/*
Template Name: contact
*/
get_header();
?>
    <section>
      <h2 class="section__title"><?php the_field('contacts__title', 'options');?></h2>
      <p><a href="http://kggg.site/">Главная</a> > <a href="http://kggg.site/contacts/">Контакты</a></p>
      <a href="http://kggg.site/" class="return"><img src="<?php the_field('return-icon', 'options');?>" alt=""> Вернуться на главную</a>
      <div class="container">
        <div class="contact__info">
          <h1><?php the_field('city_contact', 'options');?></h1>
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
      <div class="contact__map"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3ab96c21f5aaac074ace3e08534ab24466fd849318e2c8c7a91aad73fe2e1314&amp;source=constructor" width="100%" height="523" frameborder="0"></iframe></div>
    </section>
<?php get_footer(); ?>
