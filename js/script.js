$(function () {
	
	$(".box-hidden").slice(0, 4).show(); 

	$("#loadMore").on('click', function (e) {

		e.preventDafault();

		$(".box-hidden:hidden").slice(0, 2).slideDown();
		if ($(".box-hidden:hidden").lenght == 0) {
				$("#load").fadeOut('slow');
		}

		$('html,body').animate({
			scrollTop: $(this).offset().top
		}, 1500);
	});


});



