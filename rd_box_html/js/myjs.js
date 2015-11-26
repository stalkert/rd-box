/**
 * Created by ITaranenko on 8/17/2015.
 */
$(document).ready(function(){

	$('.bxslider').bxSlider({
	});
	
	$('#partners a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	});
	$('#search-handler').click(function(){
		$('#search').slideToggle('slow');
	});
	$(window).on('load resize',windowSize);
    function windowSize(){
		$('#recent').find('.item-name').css('height','auto');
		console.log(arrItemNameHeight);
		var arrItemNameHeight = [];
		$('#recent').find('.item-name').each(function(i){
			arrItemNameHeight.push($(this).height()); 
		});
		var x = arrItemNameHeight.sort(compareNumeric);
		$('#recent').find('.item-name').height(x[arrItemNameHeight.length-1]);
    }
	function compareNumeric(a, b) {
		return a - b;
	}
});