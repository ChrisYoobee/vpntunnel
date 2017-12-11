jQuery(document).ready(function($){
	console.log("You cannot use $ unless it is in this function, other wise you need to write out jQuery every time");



	$("#menu-item-125").click(function(){
    $("#modal").toggle();
});


$("#proceed").click(function(){
$("#payment-success").show();
});

//smooth scrolling:
$(function() {
	$("a[href*=#]:not([href=#])").click(function() {
		if (location.pathname.replace(/^\//,"") == this.pathname.replace(/^\//,"") && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $("[name=" + this.hash.slice(1) +"]");
			if (target.length) {
				$("html,body").animate({
					scrollTop: target.offset().top
				}, 800);
				return false;
			}
		}
	});
});




});
