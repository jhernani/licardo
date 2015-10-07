$(document).ready(function(){
    $('.top.menu .item').tab();
});


$(function() {
	$('.accordion').accordion();
	
	$('#adduser').click(function(){
		$('.modal').modal('show');

	})

	 $('.ui.dropdown').dropdown();
})

;
