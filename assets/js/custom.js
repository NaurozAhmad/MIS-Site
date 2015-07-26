var sidebar = $('.page-sidebar');
$(window).scroll(function(event) {
	console.log("Scrolling");
	var scrolled = $(window).scrollTop() + $(window).height();
	var footerPosition = $('footer').position().top;
	if (scrolled > footerPosition) {
		sidebar.css('position', 'absolute');
		sidebar.css('height', '100%');
	}
	else {
		console.log('Less than');
		sidebar.css('position', 'fixed');
		sidebar.css('height', 'auto');
	}
});