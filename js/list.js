$(function() {

	$(".menu").on("click",function(){
		var index = $(this).index();
		$(".menus").eq(index).show()
			.siblings().hide();
		$(".menulink").eq(index).addClass("active")
			.parent().siblings().children().removeClass("active");
	});
})


