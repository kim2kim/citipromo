
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<title> CitiPromo - Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="dating service in los angeles" />
<meta name="keywords" content="mixer, dating service, los angles, love, singles, romance, soulmate, date, cupid, sex, porn, celebrities, actress, actors, rate, rating, hotness, beauty, entertainment, trance, rap, soul, alcohol, vodka, hennessy cognac, music, hot, lesbian, gay, match, dating, wedding, marriage, couples, cupid, entertainment, events, drinking, alcohol, parties" />


<link rel='stylesheet' type='text/css' href='/files/main_style.css' />

 <script>
  function submitForm(hotCount, soulmateId) { //This is the name of the function
    if(soulmateId == -1){
      return false;
    }

    if (document.getElementById('hot' + soulmateId).checked == true) {   //This checks to make sure the field is not empty

     document.getElementById('hot_count').value = hotCount;
     document.getElementById('soulmate_id').value = soulmateId;
     document.getElementById('rateme').value = 'GO';

     document.ratemeform.submit();
     return true; //This prevents the form from being submitted
   } else {
     return false;
   }
  }
  
  function submitSearchForm(){
    document.getElementById('submitme').value = 'GO';
    document.searchform.submit();
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

</style>

</head>
<body class="weeblypage-index" style="background-color: black;color:black;">
      <div id="wrapper">

<?php   

  include("/home/users/web/b283/ipg.citicupidcom/inc/header.php"); 
  signup_header("Los Angeles");

?>

            <div id="content">
            <div id="navigation">
                
<?php    include("/home/users/web/b283/ipg.citicupidcom/inc/links.php"); ?>

            </div>
            <div id="text">

<?php   include("/home/users/web/b283/ipg.citicupidcom/inc/ratedj.php"); ?>


<div  class="paragraph editable-text" style=" text-align: center; font-size:14pt;color:white;">Who's Guest List Are You On?</div>

<p><a href="djrating.php">Promoter/DJ</a> | <a href="/rating.php">Guest</a>

<div style="color: gray; padding: 5px;" >

<form action="/djrating.php" method="POST" name="ratemeform" onSubmit="return submitForm('0', '-1');">
<div style="margin:10px 5px 10px 5px;">
<input type="hidden" id="soulmate_id" name="soulmate_id" value="CHANGE_ME"/>
<input type="hidden" id="hot_count" name="hot_count" value="CHANGE_ME"/>
<input type="hidden" id="rateme" name="rateme" value=""/>
<div class="weebly-form-field" style="margin:0px 0px 10px 0px;">
<?php if($_POST['email'] == '') { ?>
  <label style="color:red;">Email / Contact is required:</label> &nbsp;&nbsp; <input type="text" name="email" style="width:300px;"/>
<?php } else { ?>
<label style="color:red;">Email / Contact is required:</label> &nbsp;&nbsp; <input type="text" name="email" value="<?php echo $_POST['email'] ?>" style="width:300px;"/>
<?php } ?>
</div>
</div>
</form>

<form name="searchform" id="searchform" action="/djrating.php" method="POST">

<div class="weebly-form-field" style="margin:5px 0px 0px 0px;text-align:center;width:100%;">

  <table style="margin:5px;color:white;">
  
  <tr><td>
  <label class="weebly-form-label"> Male  </label>
    <span class='form-radio-container'>
<input type='radio' name='gender' value='male' onclick="javascript:submitSearchForm();return true;" /></span>
   </td><td>
<label class="weebly-form-label">  Female  </label>
<span class='form-radio-container'>
  <input type='radio' name='gender' value='female' onclick="javascript:submitSearchForm();return true;" /></span>
  </td><td>
<label class="weebly-form-label">  Male & Female  </label>
<span class='form-radio-container'>
  <input type='radio' name='gender' value='' onclick="javascript:submitSearchForm();return true;" /></span>
  </td>
</tr></table>

</div>

<input type="hidden" id="submitme" name="submitme" value=""/>
</form>


<?php
                search_dj_by_gender("los angeles");

  include("/home/users/web/b283/ipg.citicupidcom/inc/footer.php");
?>
        </div>
      </div> 
   </div>
</div>

</body>
</html>
    
