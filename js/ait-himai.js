$(function(){
	var showFlug = false;
	var showPos = $(window).height() / 2;
	
	var topBtn = $('#goTop').css('bottom','-100px');
	
	var nav = $('.navbar');
	var navTop = nav.offset().top + 100; //表示位置
	var navHeight = nav.height() + 10; //ナビゲーションの高さ（シャドウの分だけ足してます）
	nav.css('top', -navHeight+'px');
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > showPos) {
			if (showFlug == false) {
				showFlug = true;
				topBtn.stop().animate({'bottom' : '20px'}, 200); 
				nav.stop().animate({'top' : '0px'}, 200);
			}
		} else {
			if (showFlug) {
				showFlug = false;
				topBtn.stop().animate({'bottom' : '-100px'}, 200);
				nav.stop().animate({'top' : -navHeight+'px'}, 200);
			}
		}
	});
	
	// ページ内リンクはスムーズスクロール
	$('a[href^=#]').click(function() {
		var speed = 400;
		var href= $(this).attr("href");
		if (href != "#" && href != ""){
			var target = $(href);
			var position = target.offset().top - 50;
			$($.browser.safari ? 'body' : 'html').animate({scrollTop:position}, speed, 'swing');	
			return false;
		}
	});

});
