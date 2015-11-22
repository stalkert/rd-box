/**
 * Created by ITaranenko on 8/17/2015.
 */
$(document).ready(function(){
	$('.pagination span,.pagination a').wrap('<li></li>');
	$(".bxslider p img").unwrap();
	$(".bxslider p").remove();
	$("#searchform div label").remove();
	
	$("#searchsubmit").wrap('<span></span>').addClass('btn btn-default');
	$('.bxslider img').wrap('<li></li>');
	//$('#post-slider img:not(:first)').wrap('<div class="item"></div>')
	$('.bxslider').bxSlider({
	  mode: 'fade',
	  adaptiveHeight: true,
	  
		captions: true
	});
	
    $("#head_li").removeClass("active");        // ������� �������� ������� �������� ��� �������� �� ������ ��������
    var url = locationHref();                   // ��������� ������� href
    if (url ==="http://kateskitchen.ru/" ||url ==="http://kateskitchen.ru/en/"){   //��������� �� ������� �� ��� ����
        $("#head_li").addClass("active");       // ���� �� �� ������������ ����
    }

    $(".current_page_item").addClass("active");
    $("#navbar  li").click(function(){
        $("#head_li").removeClass("active");
        $("#navbar li ").removeClass("active");
        $(this).addClass("active");

    });
    $('.carousel').carousel({
        interval: 10000
    });
	
    $(".button_head_menu").click(function(){
        $("#navbar").addClass("nav-stacked");
    });
    $(window).on('load resize',windowSize);
    $("#button_left_menu").click(function(){
        $("#recepty").slideToggle(600);
    });
	
	
    function windowSize(){
        if(window.innerWidth >= 992){
            $("#navbar").removeClass("nav-stacked");
            $("#title_recepty").removeClass("dysplay_none");
            $("#button_left_menu").addClass("dysplay_none").css("display","none");
            $("#recepty").slideDown(0).removeClass("dysplay_none");
        }else if(window.innerWidth<750){
            $("#navbar").addClass("nav-stacked");
            $("#title_recepty").addClass("dysplay_none");
            $("#button_left_menu").removeClass("dysplay_none").css("display","block");
            $("#recepty").slideUp(0).addClass("dysplay_none");
        }else {
            $("#navbar").removeClass("nav-stacked");
            $("#title_recepty").addClass("dysplay_none");
            $("#button_left_menu").removeClass("dysplay_none").css("display","block");
            $("#recepty").slideUp(0).addClass("dysplay_none");
        }
    }
    function locationHref(){
        var url = window.location.href;
        return url;
    }
	
			
			
			
		
});