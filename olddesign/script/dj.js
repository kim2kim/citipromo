
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
 
    if (document.getElementById('attending' + event_id).checked == true) {   //This checks to make sure the field is not empty

     document.getElementById('attending').value = attending_count;
     document.getElementById('event_id').value = event_id;
     document.getElementById('submitattending').value = 'GO';

     document.attendingform.submit();
     return true; //This prevents the form from being submitted
   } else {
     return false;
   }
  }


  function submitEventRatingForm(rating_count, event_id) { //This is the name of the function
    if(event_id == -1){
      return false;
    }
 
    if (document.getElementById('likes' + event_id).checked == true) {   //This checks to make sure the field is not empty

     document.getElementById('likes_email').value = document.getElementById('attending_email').value;
     document.getElementById('eventratingcount').value = rating_count;
     document.getElementById('likes_event_id').value = event_id;
     document.getElementById('submiteventrating').value = 'GO';

     document.eventratingform.submit();
     return true; //This prevents the form from being submitted
   } else {
     return false;
   }
  }


  
