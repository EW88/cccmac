$(function(){
	var $header = $('#upper-header');
	var e = false;
	var scrollDistence = 60;
	
	function shrink(){
		window.addEventListener('scroll', function(){
			if(!e){
				e = true;
				setTimeout(function(){
					var position = scrollPosition();
					if(position >= scrollDistence){
						$header.addClass('shrink');
					}else{
						$header.removeClass('shrink');
					}
					e = false;
				}, 250);
			}
		},false)
	}
	function scrollPosition(){
		return window.pageYOffset||document.documentElement.scrollTop;
	}
	shrink();
});