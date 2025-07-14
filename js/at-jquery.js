
ddsmoothmenu.init({
	mainmenuid: "smoothmenu1",
	orientation: 'h', 
	classname: 'navigation', 	
	contentsource: "markup" 
})

(function($) {
	$.fn.equalHeights = function(minHeight, maxHeight) {
		tallest = (minHeight) ? minHeight : 0;
		this.each(function() {
			if($(this).height() > tallest) {
				tallest = $(this).height();
			}
		});
		if((maxHeight) && tallest > maxHeight) tallest = maxHeight;
		return this.each(function() {
			$(this).height(tallest).css("overflow","auto");
		});
	}
})(jQuery);
$(document).ready(function() {
   $(".equalHeights1").equalHeights();
   $(".equalHeights2").equalHeights();
   $(".equalHeights3").equalHeights(); 
});

