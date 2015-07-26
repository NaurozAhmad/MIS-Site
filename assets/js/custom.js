var sidebar = $('.page-sidebar');
$(window).scroll(function(event) {
	console.log("Scrolling");
	var scrolled = $(window).scrollTop() + $(window).height() - 30;
	var footerPosition = $('footer').position().top;
	if (scrolled > footerPosition) {
		sidebar.css('position', 'absolute');
	}
	else {
		console.log('Less than');
		sidebar.css('position', 'fixed');
	}
});