
$('div.cake__item').on('click', modalWindow)
$('div.cake__item-modal').on('click', closeWindow)

function modalWindow(){
  var body = $('#body')
  var bg = $('#modal-window__bg');
  var articul = $(this).attr('data-attr');
  var windows = $('#' + articul);
  body.toggleClass('overflow')
  windows.toggleClass('block');
  bg.toggleClass('block');
}
function closeWindow(){
  window.addEventListener('click', function(e){
    var body =  $('#body')
    var bg = $('#modal-window__bg');
    var md = $('div.cake__item-modal');
    if (e.target.id == "modal-window__bg"){
      bg.removeClass('block');
      md.removeClass('block');
      body.removeClass('overflow');

    }
  })
}
