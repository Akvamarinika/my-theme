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
  });
}

function checkradio(){
    var chkb = document.getElementById("radiobtn");
	//chkb.style.display='block';
	console.log(chkb);
    var btn = document.getElementById("submit-btn1");
    if(chkb.checked){
      btn.disabled = false;
    } else{
      btn.disabled = true;
    }

}





