jQuery(document).ready(function($) {
	
	//$(".frontpage-part").css({ "left" : window.innerWidth+"px" });
		
		
		$(".5").click(function(){
		$(".frontpage-part").removeClass("current");
		$("#5").addClass("current");
		$("#5").animate({"left": "60px"}, "slow");
	});
	$(".8").click(function(){
		$(".frontpage-part").removeClass("current");
		$("#8").toggleClass( "current" );
		$("#8").animate({"left": "60px"}, "slow");
	});
	$(".11").click(function(){
		$(".frontpage-part").removeClass("current");
		$("#11").toggleClass( "current" );
		$("#11").animate({"left": "60px"}, "slow");
	});
	$(".7").click(function(){
		$(".frontpage-part").removeClass("current");
		$("#7").toggleClass( "current" );
		$("#7").animate({"left": "60px"}, "slow");
	});
	$(".23").click(function(){
		$(".frontpage-part").removeClass("current");
		$("#23").toggleClass( "current" );
		$("#23").animate({"left": "60px"}, "slow");
	});
	
		
	

	
	
	
	});
	