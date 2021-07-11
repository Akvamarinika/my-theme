<?php get_header(); ?>

	<section class="main__section">
			<h1><?php single_post_title(); ?></h1>	
			<div class="main__img"><img src="<?php the_field('main__icon', 'options');?>" alt=""></div>
		</section>
		<section>
			<div class="info">
				<p><?php the_field('main__descript', 'options');?></p>
				<a href="#">читать далее</a>
			</div>
		</section>
		<div class="svg-img mobail-media"><img src="<?php the_field('tort__icon', 'options');?>" alt=""></div>
    <section class="content-svg">
            <div class="content-svg__container media-1400px-none">
                <a href="#" class="effect__a">
                    <div class="effect effect__show-fri decktop-media"><img class="svg__img-4 wow bounce animated" data-wow-duration="10s" src="<?php the_field('tort_1-img', 'options');?>" alt="" style="visibility: visible; animation-duration: 10s; animation-name: bounce;">
                        <div class="block-svg block-svg__fri">
                            <h2 class="block-svg__title"><?php the_field('tort_1-title', 'options');?></h2>
                            <div class="block-svg__text"><?php the_field('first__tort-descript', 'options');?></div>
                            <div class="block-svg__text-block">
                                <span><?php the_field('tort_1-gramm', 'options');?></span><span><?php the_field('tort_1-price', 'options');?></span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="effect__a">
                    <div class="effect effect__show-one"><img class="svg__img-2 wow bounce-tho animated" data-wow-duration="9s" src="<?php the_field('tort_2-img', 'options');?>" alt="" style="visibility: visible; animation-duration: 9s; animation-name: bounce-tho;">
                        <div class="block-svg block-svg__one">
                            <h2 class="block-svg__title"><?php the_field('tort_2-title', 'options');?></h2>
                            <div class="block-svg__text"><?php the_field('tort_2-descript', 'options');?></div>
                            <div class="block-svg__text-block">
                                <span><?php the_field('tort_2-gramm', 'options');?></span><span><?php the_field('tort_2-price', 'options');?></span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="effect__a">
                    <div class="effect effect__show"><img class="svg__img-1 wow bounce animated" data-wow-duration="8s" src="<?php the_field('tort_3-img', 'options');?>" alt="" style="visibility: visible; animation-duration: 8s; animation-name: bounce;">
                        <div class="block-svg ">
                            <h2 class="block-svg__title"><?php the_field('tort_3-title', 'options');?></h2>
                            <div class="block-svg__text"><?php the_field('tort_3-descript', 'options');?></div>
                            <div class="block-svg__text-block">
                                <span><?php the_field('tort-3_gramm', 'options');?></span><span><?php the_field('tort_3-price', 'options');?></span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="effect__a">
                    <div class="effect effect__show-tho"><img class="svg__img-3 wow bounce-tho animated" data-wow-duration="9s" src="<?php the_field('tort_4-img', 'options');?>" alt="" style="visibility: visible; animation-duration: 9s; animation-name: bounce-tho;">
                        <div class="block-svg block-svg__tho">
                            <h2 class="block-svg__title"><?php the_field('tort_4-title', 'options');?></h2>
                            <div class="block-svg__text"><?php the_field('tort-4_descript', 'options');?></div>
                            <div class="block-svg__text-block">
                                <span><?php the_field('tort_4-gramm', 'options');?></span><span><?php the_field('tort_4-price', 'options');?></span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="effect__a">
                    <div class="effect effect__show-fo decktop-media"><img class="svg__img-5 wow bounce animated" data-wow-duration="10s" src="<?php the_field('tort_5-img', 'options');?>" alt="" style="visibility: visible; animation-duration: 10s; animation-name: bounce;">
                        <div class="block-svg block-svg__fo">
                            <h2 class="block-svg__title"><?php the_field('tort_5-title', 'options');?></h2>
                            <div class="block-svg__text"><?php the_field('tort_5-descript', 'options');?></div>
                            <div class="block-svg__text-block">
                                <span><?php the_field('tort_5-gramm', 'options');?></span><span><?php the_field('tort_5-price', 'options');?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


            <!--Для мобильников-->

            <div class="media-1410px-none mobail-media">
                <a href="#" class="effect__a">
                    <div class="effect"><img class="svg__img-1 " src="<?php the_field('tort_3-img', 'options');?>" alt="">
                        <div class="block-svg ">
                            <h2 class="block-svg__title">Фисташка-Малина</h2>
                            <div class="block-svg__text">Фисташковый бисквит с малиновым желе</div>
                            <div class="block-svg__text-block">
                                <span>125 г.</span><span>220 р.</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="effect__a">
                    <div class="effect"><img class="svg__img-1 " src="<?php the_field('tort_2-img', 'options');?>" alt="">
                        <div class="block-svg ">
                            <h2 class="block-svg__title">Торт «Красный бархат»</h2>
                            <div class="block-svg__text">Нежный бисквит пропитанный малиновым вареньем в сочетании со сливочным сыром</div>
                            <div class="block-svg__text-block">
                                <span>160 г.</span><span>190 р.</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="effect__a">
                    <div class="effect"><img class="svg__img-1" src="<?php the_field('tort_4-img', 'options');?>" alt="">
                        <div class="block-svg ">
                            <h2 class="block-svg__title">Наполеон с заварным кремом</h2>
                            <div class="block-svg__text">Девять хрустящих коржей с фирменным заварным кремом</div>
                            <div class="block-svg__text-block">
                                <span>120 г.</span><span>190 р.</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="effect__a">
                    <div class="effect"><img class="svg__img-1 " src="<?php the_field('tort_5-img', 'options');?>" alt="">
                        <div class="block-svg ">
                            <h2 class="block-svg__title">Чизкейк Классический</h2>
                            <div class="block-svg__text">Творожно-сырный пирог  на песочной основе</div>
                            <div class="block-svg__text-block">
                                <span>110 г.</span><span>200 р.</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="effect__a">
                    <div class="effect"><img class="svg__img-1 " src="<?php the_field('tort_1-img', 'options');?>" alt="">
                        <div class="block-svg ">
                            <h2 class="block-svg__title">Три Шоколада</h2>
                            <div class="block-svg__text">Муссовый торт из трех видов бельгийского шоколада</div>
                            <div class="block-svg__text-block">
                                <span>120 г.</span><span>220 р.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
		<section></section>
		<section>
			<div class="container">
				<div class="card">
					<?php if( have_rows('card', 'options') ):  while ( have_rows('card', 'options') ) : the_row();?>
	<div class="card__item">
		<div class="item__icon"><img src="<?php the_sub_field('card__icon', 'options') ?>" alt=""></div>
		<div class="dots">
			<div class="dots__item"></div>
			<h3 class="item__title title-lvl3"><?php the_sub_field('card__title', 'options') ?></h3>
			<div class="dots__item"></div>
		</div>
		<p><?php the_sub_field('card__descript') ?></p>
	</div>
<?php endwhile; endif;?>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="slider">
					<?php if( have_rows('slider', 'options') ):  while ( have_rows('slider', 'options') ) : the_row();?>
						<div class="slider__item"><img src="<?php  the_sub_field('slider__item', 'options');?>" alt=""></div>
					<?php endwhile; endif;?>
				</div>
			</div>
		</section>
		<section>
			<h2 class="section__title"><?php the_field('contact__title', 'options');?></h2>
			<div class="contact__block">
				<div class="contact__info">
					<div class="contacts-block__col contacts-block__col--contact">
						<div class="contact-cafe">
							<p class="contact-cafe__text"><?php the_field('city', 'options');?></p>
							<div class="contact-cafe__item">
								<h6 class="contact-cafe__title">Телефон:</h6>
								<div class="contact-cafe__text"><?php the_field('phone', 'options');?></div>
							</div>
							<div class="contact-cafe__item">
								<h6 class="contact-cafe__title">Email:</h6>
								<div class="contact-cafe__text"><?php the_field('email', 'options');?></div>
							</div>
							<div class="contact-cafe__item">
								<h6 class="contact-cafe__title">Мы в социальных сетях:</h6>
								<div class="contacts contacts__img">
									<a href="#" class="contacts__icon"><img src="<?php the_field('vk__icon', 'options');?>" alt=""></a>
									<a href="#" class="contacts__icon"><img src="<?php the_field('inst__icon', 'options');?>" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contact__map" id="map"></div>
			</div>
		</section>


<?php get_footer(); ?>
