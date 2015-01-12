<?php
function display_playlist_view($location, $email){
?>

<div class="left" style="color:green;" id="rateme_message"></div>

<div class="clr"></div>

<div style="font-size:10pt;"><a href="javascript:showhide('playlist-search-form');">[+ / -] ADD A SONG</a></div>

<div id="playlist-search-form">
<div style="float:left;width:500px;padding:5px;background-color:#ffffee">
<?php
 include("/home/users/web/b283/ipg.citicupidcom/inc/form/playlistform.php");
?>
</div>
<div style="float:right;width:400px;">

<p>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2178827339426285";
/* rectangle */
google_ad_slot = "1387455778";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</p>
</div>
</div><!-- playlist search form -->

<div class="left" style="width:100%;padding-top:10px;padding-left:0px;">

<form name="searchform" id="searchform" action="/playlist.php" method="POST" onSubmit="return submitPlaylistSearchForm();">
<div style="float:left;">Search by Email &nbsp;<input id="playlist_email" tabindex="1" type="text" name="email" style="width:285px;" value="<?php echo $email ?>" /></div>
<div style="float:left;padding-left:10px;padding-right:10px;">OR</div>
<div style="float:left;">
    <select name="category" id="category" onchange="return submitPlaylistSearchForm();" >
       <option value="">------------------------ Select A Category -------------------</option>
                                        <option value="Ambient"> Ambient </option>
                                        <option value="Disco">Disco</option>
                                        <option value="Electro">Electro</option>
                                        <option value="Euro-Dance">Euro-Dance</option>
                                        <option value="Country">Country</option>
                                        <option value="Hindi Remix">Hindi Remix</option>
                                        <option value="Bhangra">Bhangra </option>
                                        <option value="Hip-Hop">Hip-Hop</option>
                                        <option value="Old School">Old School</option>
                                        <option value="R&B">R&B</option>
                                        <option value="Rap">Rap</option>
                                       <option value="Alternative">Alternative</option>
                                        <option value="Jazz">Jazz</option>
                                        <option value="Latin">Latin</option>
                                        <option value="Soul">Soul</option>
                                       <option value="Pop">Pop</option>
                                        <option value="Techno">Techno</option>
                                        <option value="Trance">Trance</option>
                                        <option value="House">House</option>
                                        <option value="Tribal">Tribal</option>
                                        <option value="Trip-Hop">Trip-Hop</option>
    </select>
<input type="hidden" id="submitme" name="playlistsubmitme" value=""/>
  </div>
</form>
</div>


<div class="clr"/>

<?php

  include("/home/users/web/b283/ipg.citicupidcom/inc/script/playlistsubmit.php");

  playlist_total_pages();
?>

<div style="padding-top:10px;"></div>

<div style="width:100%;background-color:#466678;height:20px;padding-top:5px;font-weight:bold;color:white;">
<div style="float:left;padding-left:10px;width:150px;">CATEGORY</div>
<div style="float:left;padding-left:10px;width:600px;">ARTIST - TITLE</div>
<div style="float:left;padding-left:10px;width:120px;">LIKES</div>
<div style="float:left;padding-left:10px;width:20px"></div>
<div style="float:left;padding-left:10px;width:20px;"></div>
</div>

<div class="clr"/>
<div style="padding-bottom:5px;"></div>

<?php  

  display_for_search_result();

}

?>
