$(document).ready(function(){

	/* show or hide gadget */
	$('a[rel="hide_block"]').click(function(){
		if ($(this).parent('div').parent('div').children('div.java_content').css('height')=='auto') {
			$(this).css('background-image','url(publicimages/gadget_dropup.gif)');
		} else {
			$(this).css('background-image','url(publicimages/gadget_dropdown.gif)');
		}
		$(this).parent('div').parent('div').children('div.java_content').slideToggle();
		return false;
	});
	
	$('#slideshow').cycle({
		fx:     'fade',
		speed:  'slow',
		timeout: 5000,
		pager:  '#slider_nav',
		pagerAnchorBuilder: function(idx, slide) {
			// return sel string for existing anchor
			return '#slider_nav li:eq(' + (idx) + ') a';
		}
	});		

});
