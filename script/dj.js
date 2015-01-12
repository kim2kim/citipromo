jQuery(document).ready(function(){
	/* USED BY CONTACT FORM */
        $('#contactform').submit(function(){
                var action = $(this).attr('action');
                $.post(action, {
                        name: $('#name').val(),
                        email: $('#email').val(),
                        company: $('#company').val(),
                        subject: $('#subject').val(),
                        message: $('#message').val()
                },
                        function(data){
                                $('#contactform #submit').attr('disabled','');
                                $('.response').remove();
                                $('#contactform').before('<p class="response">'+data+'</p>');
                                $('.response').slideDown();
                                if(data=='Message sent!') $('#contactform').slideUp();
                        }
                );
                return false;
        });

        /* USE IN SWITCHING CITIES*/
        $('#city').change(function(){
          var url = $('#city :selected').val();
          window.location = url;
        });

});

function guestlist_signup(){
	var email = $('#guestemail').val(); //document.getElementByName("guestemail");
	var zip = $('#guestzip').val(); //document.getElementByName("guestzip");
	var gender = $("input[@name='guestgender']:checked").val();

       $.ajax({
         type: "POST",
         url: "/submitdj.php",
         data: {email: email, gender: gender, zip: zip, guestlistsubmit: 'GO'},
         dataType: 'html',
         success: function(data){
		$('#guestemail').val('');
		$('#guestzip').val('');
         }
       });

	return false;

}

  function likesThisSong(likes_count, song_id) { //This is the name of the function

       $.ajax({
         type: "POST",
         url: "/submitplaylist.php",
         data: {hot_count: likes_count, soulmate_id: song_id, rateme: 'GO'},
         dataType: 'html',
         success: function(data){
           $('#song_like' + song_id).html(likes_count);
         }
       });

     //document.ratemeform.submit();
     return true; //This prevents the form from being submitted
  }


function showPlaylist(email){
       $.ajax({
         type: "POST",
         url: "/submitplaylist.php",
         data: {email: email, playlistsubmitme: 'GO'},
         dataType: 'html',
         success: function(data){
           $('#rightBox').html(data);
         }
       });
}

function showInfo(dj_id){
       $.ajax({
         type: "POST",
         url: "/submitdj.php",
         data: {dj_id: dj_id, djsubmitdetail: 'GO'},
         dataType: 'html',
         success: function(data){
           $('#rightBox').html(data);
         }
       });
}

function submitDjLike(like_count, dj_id){
       $.ajax({
         type: "POST",
         url: "/submitdj.php",
         data: {like_count: like_count, dj_id: dj_id, rateme: 'GO'},
         dataType: 'html',
         success: function(data){
           $('#updatefan' + dj_id).html(like_count + " Fans!");
         }
       });
}

function turnOff(){
  document.getElementById("BGSOUND_CTRL").src="";
  //document.getElementById("BGSOUND_CTRL_BG").src="";
}

function ajaxError(request, type, errorThrown)
{
    var message = "There was an error with the AJAX request.\n";
    switch (type) {
        case 'timeout':
            message += "The request timed out.";
            break;
        case 'notmodified':
            message += "The request was not modified but was not retrieved from the cache.";
            break;
        case 'parseerror':
            message += "XML/Json format is bad.";
            break;
        default:
            message += "HTTP Error (" + request.status + " " + request.statusText + ").";
    }
    message += "\n";
    alert(message);
}

function commentSubmit(){
    $.ajax({ 
      type: "POST",
      url: "/comments.php",
      data: {type: $('#type').val(), item_id: $('#item_id').val(), comment: $('#comment').val()},
      dataType: 'html',
      success: function(data){
        $('#comments').html(data);
	$('#comment').attr('value', '');
      }
    });  
}

  function playsong(playlist_id){
        $.ajax({
                       type: "POST",
                       url: "/submitplaysong.php",
                       data: { playsong: 'GO', playlist_id: playlist_id},
                       dataType: 'html',
                       success: function(data){
			   document.getElementById('BGSOUND_CTRL').src = '';
			   //document.getElementById('BGSOUND_CTRL_BG').src = '';
                           $('#play-song').html(data);
                       }
        });
        return true;

  }


  function submitPlaylistSearchForm(){
/*
        var email = document.getElementById("playlist_email").value;
        var category = $("#category option:selected").val();
*/
        document.getElementById('submitme').value = 'GO';
        document.searchform.submit();

/*
        $.ajax({
                       type: "POST",
                       url: "/select_playlist.php",
                       data: {email: email, category: category, playlistsubmitme: 'GO'},
                       dataType: 'html',
                       success: function(data){
                           $('#select_page').html(data);
    			   $('#rateme_message').html("Please see your result for search by " + category);
                       }
        });
*/
	return true;
  }


function submitForm(hotCount, soulmateId) { //This is the name of the function
    if(soulmateId == -1){
      return false;
    }

    if (document.getElementById('hot' + soulmateId).checked == true) {   //This checks to make sure the field is not empty

     if($('#djratemeemail').val() == ''){
	$('#rateme_message').html("Please enter an email below");
	$('#hot' + soulmateId).removeAttr('checked');
	return false;
     }

     callAjax(hotCount, soulmateId, document.getElementById('url').value, document.getElementById('djratemeemail').value);
     //document.ratemeform.submit();
     return false; //This prevents the form from being submitted
    }else {
      return false;
    }
  }

        function callAjax(hotCount, soulmateId, ajaxUrl, email){
                 $.ajax({  
                       type: "POST",  
                       url: ajaxUrl,
                       data: {email: email, hot_count: hotCount, soulmate_id: soulmateId, rateme: 'GO'},
                       dataType: 'html',
                       success: function(data){  
                           $('#rateme_message').html("Thank you for voting.");
			   $('#updatefan' + soulmateId).html(hotCount + " Fans!");
			   $('#updatefan' + soulmateId).html(hotCount + " Fans!");
			   $('#hot' + soulmateId).removeAttr('checked');
                       } 
                     });                
        }


  function submitSearchForm(){
    var ajaxUrl = document.getElementById('genderSearchUrl').value;
    var email = document.getElementById('djratemeemail').value;
    var gender = $('input[name=gender]:checked', '#searchform').val();

                 $.ajax({
                       type: "POST",
                       url: ajaxUrl,
                       data: {email: email, gender: gender, submitme: 'GO'},
                       dataType: 'html',
                       success: function(data){
                           $('#select_page').html(data);
                       }
                     });


    //document.searchform.submit();
  }

function showhidebtn(spanname) {
        if (document.getElementById(spanname).style.display=="") {
                document.getElementById(spanname).style.display="none";
		document.getElementById('rightbtn').style.display="none";	
		document.getElementById('leftbtn').style.display="";	
		document.getElementById('info').style.display="";	
        }
        else if (document.getElementById(spanname).style.display=="none"){
                document.getElementById(spanname).style.display="";
		document.getElementById('rightbtn').style.display="";	
		document.getElementById('leftbtn').style.display="none";	
		document.getElementById('info').style.display="none";	
        }
}


function showhide(spanname, namefield) {
	if (document.getElementById(spanname).style.display=="") {
		document.getElementById(spanname).style.display="none";
		document.getElementById(namefield).innerHTML = '[ + ] Open';
	}
	else if (document.getElementById(spanname).style.display=="none"){
		document.getElementById(spanname).style.display="";
		document.getElementById(namefield).innerHTML = '[ - ] Close';
	}
}

function showhideeventform(spanname) {
	if (document.getElementById(spanname).style.display=="none"){
		document.getElementById(spanname).style.display="";
		window.location="#" + spanname;
	}
}

function validate(form_id,email) {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.forms[form_id].elements[email].value;
   if(reg.test(address) == false) { 
      alert('Invalid Email Address');
      return false;
   }
}


/* not used yet */
function dj_register(dataform){
  if( validate("uploadform", "email") == false ){
    return false;
  }

   if (dataform.agree.checked == false) { //This checks to make sure the field is not empty
     alert("Please agree to our policy to continue");
     return false; //This prevents the form from being submitted
   } else {
                 $.ajax({
                       type: "POST",
                       url: "/submitdjrating.php",
                       data: {email: email, gender: gender, submitme: 'GO'},
                       dataType: 'html',
                       success: function(data){
                           $('#select_page').html(data);
                       }
                     });

     return true;
   }

}

function validateThis(dataform) { //This is the name of the function
  if( validate("uploadform", "email") == false ){
    return false;
  }

   if (dataform.agree.checked == false) { //This checks to make sure the field is not empty
     alert("Please agree to our policy to continue");
     return false; //This prevents the form from being submitted
   } else {
     return true;
   }

}

function validateForm(dataform, form_id) { //This is the name of the function
  if( validate(form_id, "email") == false ){
    return false;
  }

   if (dataform.agree.checked == false) { //This checks to make sure the field is not empty
     alert("Please agree to our policy to continue.");
     return false; //This prevents the form from being submitted
   } else {
     return true;
   }

}

  function submitAttendingForm(attending_count, event_id) { //This is the name of the function
    if(event_id == -1){
      return false;
    }

     if($('#attending_email').val() == ''){
        $('#rateme_message').html("Please enter an email below");
        $('#attending' + event_id).removeAttr('checked');
        return false;
     }

    if (document.getElementById('attending' + event_id).checked == true) {   //This checks to make sure the field is not empty
       $.ajax({
         type: "POST",
         url: "/submiteventrating.php",
         data: {email: $('#attending_email').val(), attending: attending_count, event_id: event_id, submitattending: 'GO'},
         dataType: 'html',
	 error: ajaxError,
         success: function(data){
           $('#rateme_message').html("See you at the event.");
           $('#attendingView' + event_id).html(attending_count + " Attending!");
           $('#attendingViewSide' + event_id).html(attending_count + " Attending!");
           $('#attending' + event_id).removeAttr('checked');
         }
       });

     //document.attendingform.submit();
     return true; //This prevents the form from being submitted
   } else {
     return false;
   }
  }


  function submitEventRatingForm(rating_count, event_id) { //This is the name of the function
    if(event_id == -1){
      return false;
    }

     if($('#attending_email').val() == ''){
        $('#rateme_message').html("Please enter an email below");
        $('#likes' + event_id).removeAttr('checked');
        return false;
     }

 
    if (document.getElementById('likes' + event_id).checked == true) {   //This checks to make sure the field is not empty

       var email = document.getElementById('attending_email').value;

       $.ajax({
                       type: "POST",
                       url: "/submiteventrating.php",
                       data: {email: email, eventratingcount: rating_count, event_id: event_id, submiteventrating: 'GO'},
                       dataType: 'html',
                       success: function(data){
                           $('#rateme_message').html("Thank you for voting.");
                           $('#likesView' + event_id).html(rating_count + " Likes!");
                           $('#likesViewSide' + event_id).html(rating_count + " Likes!");
                           $('#likes' + event_id).removeAttr('checked');
                       }
       });


     //document.eventratingform.submit();
     return false; //This prevents the form from being submitted
   } else {
     return false;
   }
  }


  
