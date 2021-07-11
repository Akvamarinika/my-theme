function openNav(){
		var lmb = document.getElementById("lmb");
		lmb.classList.toggle("open")
	}

$('document').ready(function(){
  tovarShow(1);
  menuColor();
  menuCurl();
});
$('div.cake__item').on('click', modalWindow)
$('h4.left__menu-item-modal').on('click', closeWindow)

    

setTimeout(function(){
const filterItem = document.querySelectorAll(".cake__item");
document.querySelector('nav.left__menu-block').addEventListener('click', event=> {
  if (event.target.tagName !== 'H4') return false;

  let filterClass = event.target.dataset['f'];

  filterItem.forEach(elem => {
    elem.classList.remove('hide');
    if(!elem.classList.contains(filterClass)){
      elem.classList.add('hide');
		
    } else{
		elem.classList.add('hiden');
	}
  });

});
},2000);

function modalWindow(){
  //var showItem = $('.right__menu-block-modal')
  var bg = $('.modal-window__bg')
  var body = $('#body')
  var articul = $(this).attr('data-attr');
  var windows = $('#' + articul);
  bg.toggleClass('block');
  //showItem.addClass('showBlock')
  body.toggleClass('overflow')
  windows.toggleClass('block');
}
function closeWindow(){
	$('#body').toggleClass('overflow')
    $('.cake__item-modal').removeClass('block')
    $('.right__menu-block-modal').removeClass('showBlock')
    $('.modal-window__bg').removeClass('block');
	$('.cake__item').removeClass('hide')
}
function tovarShow(x){
	setTimeout(function(){
		var tovar = $(".show")
		tovar.css( "opacity", x)
	}, 1000)
}
function menuColor(){
  $('.left__menu-item').click(function() {
    $('.left__menu-item').removeClass('color');
    $(this).addClass('color');
  });
};

function menuCurl(){
  $('.left__menu-container').click(function() {
    $('.left__menu-container').removeClass('left__item-container--active');
    $(this).addClass('left__item-container--active');
	  

  });
};

function openNavMenu(){
	$('#lmbhead').toggleClass('height left__menu-container');
	 $('nav.left__menu-block').css('position','relative', 'important');
}
