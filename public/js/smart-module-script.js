var base = -15;
$( document ).ready(function() {
/* 	for(var i=0;i<12;i++){
	}
	 */
	var isOpen = false;
	var curIndex,selectedIdx;
	var startedIdx;


	for(var i=$(".layerPath").length-1;i>=0;i--){
		base = base + 15;
		$(".layerPath").eq(i).attr("data-top",base+"px");
	}
	if(sessionStorage.getItem("click_index")){
		animatedLayer(sessionStorage.getItem("click_index"),0);
		startedIdx = sessionStorage.getItem("click_index");
	}
	var routeNme = window.location.hash;
	var strUrl = window.location.toString();
	var indexof = strUrl.indexOf("login");
	var urlRegister = strUrl.indexOf("register");

	var urlSmartOffice = strUrl.indexOf("smart-office");
	if(indexof == -1 && urlRegister == -1){
		$(".layerPath").hover(function(){
			var curIndex = $(this).index();
			// alert(curIndex);
			if(curIndex !=12){
				for(var i=0;i<$(".layerPath").length;i++){
					var savedTop = $(".layerPath").eq(i).attr("data-top");
					$(".layerPath").eq(i).animate({top:savedTop},0);
				}
				animatedLayer(curIndex,0);
			}
		},function(){

			var index = sessionStorage.getItem("click_index");
			for(var i=0;i<$(".layerPath").length;i++){
				var savedTop = $(".layerPath").eq(i).attr("data-top");
				$(".layerPath").eq(i).animate({top:savedTop},0);
			}
			if(index){
				animatedLayer(index,0);
			}
		});
	}

	if(urlSmartOffice == -1){
		$(".slider-switch").css("display","none");
	}

	if(routeNme.substring(2) == 'schedule'){
		for(var i=0;i<$(".layerPath").length;i++){
			var savedTop = $(".layerPath").eq(i).attr("data-top");
			$(".layerPath").eq(i).animate({top:savedTop},0);
		}
		animatedLayer(4,0);
		$(".slider-switch").css("display","none");
	}else if(routeNme.substring(2) == 'all-form'){
		for(var i=0;i<$(".layerPath").length;i++){
			var savedTop = $(".layerPath").eq(i).attr("data-top");
			$(".layerPath").eq(i).animate({top:savedTop},0);
		}
		animatedLayer(9,0);
		$(".slider-switch").css("display","none");
	}else if(routeNme.substring(2) == 'attendance-info'){
		for(var i=0;i<$(".layerPath").length;i++){
			var savedTop = $(".layerPath").eq(i).attr("data-top");
			$(".layerPath").eq(i).animate({top:savedTop},0);
		}
		animatedLayer(6,0);
		$(".slider-switch").css("display","none");
	}
	$(".layerPath").click(function(){
		// var curIndex = $(this).index();
		// if(isOpen){
		// 	for(var i=0;i<$(".layerPath").length;i++){
		// 		var savedTop = $(".layerPath").eq(i).attr("data-top");
		// 		$(".layerPath").eq(i).animate({top:savedTop},300);
		// 	}
		// 	isOpen = false;
		// 	setTimeout(function(){
		// 		selectedIdx = curIndex;
		// 		animatedLayer(selectedIdx,300);	
		// 	},501);
		// }else{
		// 	selectedIdx = curIndex;
		// 	animatedLayer(selectedIdx,300);	
		// }
		/* if(curIndex==11){
			if(isOpen){
				$(this).children().css("display","block");
			
			}else{
				$(this).children().css("display","none");
			}
			
		} */
	});
	function animatedLayer(index,speed){
		for(var i=index;i>=0;i--){
			var layer = $(".layerPath").eq(i);
			var layerTop = parseInt(layer.css("top").replace("px",""));
			$(layer).animate({top:layerTop+120+"px"},speed);
			isOpen = true;
		}
		//localStorage.setItem("click_index",index);
		startedIdx = index;
	}

	// Remove error message when form value change

	$.each($('input, select ,textarea', '#jqx-form'),function(k){
                        
		var element = $(this).attr('name');

		$(this).on('change keypress',function(){
			$(this).next('.help-block').remove();
			$(this).parents('div[class^="form-group"]').removeClass('has-error');
		});
			
	});
	
 
});

