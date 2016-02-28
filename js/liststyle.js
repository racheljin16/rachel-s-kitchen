$(function(){
	$(".imgs img").on("mouseenter",function(e){

		var source= $(this).attr("src");

		 $("#hero-list").attr({"src":source,});

	})
});