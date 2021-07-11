var show = document.querySelector("#headerMenu #menu-item-209");
function menuButton(){
	if(!show){
	    //$('#headerMenu2 > li').detach().appendTo('#headerMenu');
		show = document.querySelector("#headerMenu #menu-item-209");
		console.log(show);
	   } 

	$('#headerMenu').toggleClass('flex');
	var body = $('#body');
	body.toggleClass('overflow')
};

function menuButtonModal(){
	$('#headerMenu-modal').toggleClass('flex');
	var body = $('#body');
	body.toggleClass('overflow')
}

