$(document).ready(function() {	

	//Show Banner
	$(".main_image .desc").show(); //Show Banner
	$(".main_image .block").animate({ opacity: 0.85 }, 1 ); //Set Opacity

	//Click and Hover events for thumbnail list
	$(".image_thumb ul li:first").addClass('active'); 
	$(".image_thumb ul li").click(function(){ 
		//Set Variables
		var imgAlt = $(this).find('img').attr("alt"); //Get Alt Tag of Image
		var imgTitle = $(this).find('a').attr("href"); //Get Main Image URL
		var imgDesc = $(this).find('.block').html(); 	//Get HTML of block
		var imgDescHeight = $(".main_image").find('.block').height();	//Calculate height of block	

		$('#item_id').val(imgAlt);

		if($('#type').val() == 'dj'){
			comment_send("/dj_comment.php", imgAlt);
		}else if($('#type').val() == 'guest'){
			comment_send("/guest_comment.php", imgAlt);
		}else if($('#type').val() == 'events'){
			comment_send("/events_comment.php", imgAlt);
		}

		if ($(this).is(".active")) {  //If it's already active, then...
			return false; // Don't click through
		} else {
			//Animate the Teaser				
			$(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
				$(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
				$(".main_image img").attr({ src: imgTitle , alt: imgAlt});
			});
		}
		
		$(".image_thumb ul li").removeClass('active'); //Remove class of 'active' on all lists
		$(this).addClass('active');  //add class of 'active' on this list only
		return false;
		
	}) .hover(function(){
		$(this).addClass('hover');
		}, function() {
		$(this).removeClass('hover');
	});
			
	//Toggle Teaser
	$("a.collapse").click(function(){
		$(".main_image .block").slideToggle();
		$("a.collapse").toggleClass("show");
		return false;
	});
	
});//Close Function

function comment_send(url, itemId){
    $.ajax({
      type: "POST",
      url: url,
      data: {item_id: itemId},
      dataType: 'html',
      success: function(data){
	if(data != 0){
        	$('#allcomments').html(data);
	}
        $('#comments').html("");
      }
    });
}
