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
			<a href="http://kggg.site/"><img src="<?php the_field('logo-footer', 'options')?>" alt="FooterLogo" class="footer_logo"></a>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php

if ($post->ID == 120) {
	echo '<script type="text/javascript" src="'.get_template_directory_uri($show = 'url').'/js/slick.min.js"></script>';
	echo '<script src="'.get_template_directory_uri($show = 'url').'/js/slider.js"></script>';
};

if ($post->ID == 114) {
	echo '<script src="'.get_template_directory_uri($show = 'url').'/js/menu.js"></script>';
	echo '<script>
	function openNav(){
		var lmb = document.getElementById("lmb");
		lmb.classList.toggle("open")
	}
	
	
	</script>';
};
if ($post->ID == 108) {
	echo '<script src="'.get_template_directory_uri($show = 'url').'/js/product.js"></script>';
	echo '<script>
	function check(){
    var chkb = document.getElementById("radiobtn");
    var btn = document.getElementById("submit")
    if(chkb.checked){
      btn.disabled = false;
    } else{
      btn.disabled = true;
    }
  }
  </script>';
};
if ($post->ID == 117) {
	echo '<script>
	function check(){
    var chkb = document.getElementById("radiobtn");
    var btn = document.getElementById("submit")
    if(chkb.checked){
      btn.disabled = false;
    } else{
      btn.disabled = true;
    }
  }
  </script>';
};

?>

</body>
</html>
