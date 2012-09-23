<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 <!--phpalbum <?=$phpalbum_version?> -->
 <!--Fixed Width-->
 <head>
   <title><? print $site_name;?></title>
   <LINK REL="stylesheet" HREF="<?print ($stylesheet_link);?>" TYPE="text/css">   
 </head>
 <body>

<?if(!$logged_in){?>
<div class="login-page">
	<?print $login_dialog?>
</div>
<?}?>


 <div id="logo">
 	<?print $logo;?>
 </div>
 <div id="menu">
     <div class="menu-container">
	<? if($previous_page_link){?>
    <a class="me" href="<? print $previous_page_link; ?>"><? p("ID_PREV_PAGE");?></a>
    <? }else{?>
    <b><? p("ID_PREV_PAGE"); ?></b>
    <?}?>
    
    <? foreach( $dir_path as $num => $dir ) {?>
    <a title="home" class="<? print $dir['name']; ?>" href="<? print $dir['link']; ?>"></a>
    <? } ?>
    <? if ( $return_home_url != "") { ?>
      <a title="gopir13.com" class="<? p("ID_HOME"); ?>" href="http://<? print $return_home_url;?>"></a>
    <? } ?>
    
    <a title="refresh" class="scan-dir" href="main.php?cmd=setup&var1=dirs&var2=scan_dirs"></a>
    
    <?if($logged_in){?>
        <a title="settings" class="<?p("ID_SETUP");?>" href="main.php?cmd=setup"></a>
        <a title="logout" class="<?print $login_logout_text?>" href="<?print $login_logout_link;?>"></a>
    <?}?>

    <? if($next_page_link){?>
    <a class="me" href="<? print $next_page_link; ?>"><? p("ID_NEXT_PAGE"); ?></a>
    <? }else{?>
    <b><? p("ID_NEXT_PAGE"); ?></b>
    <?}?>
    </div>
 </div>
 
 <?if($logged_in){?>
 <div id="content">
 <?php /*?><table width="100%"><tr><td align="center">
 <table class="BODY" cellpadding="5" width="95%"><tr><td>      
   
<!--main content-->
<table width="100%" cellspacing="0" cellpading="0"><tr>
<?if ($directories) {?>
<td valign="top">
  <table class="menu2" width=150><tr><td class="boxhead"><?p("ID_ALBUMS");?></td></tr>
    <tr><td valign="top">
     <table><? print $directories; ?></table>
    </td></tr>
  </table>
</td><td width="2">&nbsp;</td>
<? } ?>
<td width="100%" valign="top">

<table width="100%" cellspacing="0" cellpadding="0"><tr><td width="100%" align="center">
  <table width="100%" height="100%" cellspacing="0" cellpadding="0">
   <? if($dir_long_desc){ ?>
    <tr><td width="100%" align="center" valign="top">
         <table width="100%" class="menu2" >
	   <tr>
	     <td width="100%" >
	       <font class="dirdesc"><? print $dir_long_desc; ?>
	       </font>
	     </td>
	   </tr>
	 </table>
    </td></tr>
   <? } ?>
   <? if($newest_thumbnails){ ?>
    <tr><td width="100%" align="center" valign="top">
         <table width="100%" class="menu2" >
	   <tr><td class="boxhead"><?p("ID_NEWEST_PICTURES");?></td></tr>
	   <tr>
	     <td width="100%" >
	       <font class="dirdesc"><? print $newest_thumbnails; ?>
	       </font>
	     </td>
	   </tr>
	 </table>
    </td></tr>
   <? } ?>
	<tr height="100%"><td width="100%" valign="top" align="center">
		
	</td></tr>
  </table>
</td></tr></table>

</td></tr></table>


</td></tr></table>
</td></tr></table><?php */?>

<? print $thumbnails; ?>
</div>
<?}?>
<div id="footer">
    <em>© 2011 gopir13.com | All Rights Reserved. Terms &amp; Privacy.</em>
    <a href="index.html">Back to Home</a>
    <a href="../ver2/index.html">Back to gopir13.com</a>
</div>

<? if($tracking_code) { print $tracking_code; } ?>
<!--end of page -->
</body></html>
