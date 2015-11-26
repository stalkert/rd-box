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
	/*$(window).on('load resize',windowSize);
    
	
	
    function windowSize(){
      var elem =  $('.height-recent').innerHeight();
	  $('.height-recent').find('img').height(elem/2);
		
    }*/
	
});