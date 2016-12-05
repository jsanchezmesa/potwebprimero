(function($){
	$('#toggle-bar a').click(function(e){
		e.preventDefault();
		$('#main-navbar').toggle();
	});
})(jQuery);