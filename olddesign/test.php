
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<title> CitiPromo - Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="events service in los angeles" />
<meta name="keywords" content="social networking, mixer, events service, dating service, los angles, love, singles, romance, soulmate, date, citipromo, sex, porn, celebrities, actress, actors, rate, rating, hotness, beauty, entertainment, trance, rap, soul, alcohol, vodka, hennessy cognac, music, hot, lesbian, gay, match, dating, wedding, marriage, couples, cupid, entertainment, events, drinking, alcohol, parties" />


<link rel='stylesheet' type='text/css' href='/files/main_style.css' />

 <script>

function validateThis(dataform) { //This is the name of the function
  if( validate("uploadform", "email") == false ){
    return false;
  }

   if (dataform.agree.checked == false) { //This checks to make sure the field is not empty
     alert("Please agree to our policy inorder to sign up.");
     return false; //This prevents the form from being submitted
   } else {
     return true;
   }

}


function validate(form_id,email) {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.forms[form_id].elements[email].value;
   if(reg.test(address) == false) { 
      alert('Invalid Email Address - ' + address + '-');
      return false;
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

</script>

<style type='text/css'>

td{
  text-align:top;
  padding:5px;
  vertical-align:top;
}
div {
  white-space: nowrap;
}

#text {
    background: url("") no-repeat scroll center bottom transparent
}

.form-required {
  color:red;
}

</style>


</head>
<body class="weeblypage-index" style="background-color:black;">

<?php
   include("/home/users/web/b283/ipg.citicupidcom/inc/signup_html.php");
?>

</body>
</html>
    
