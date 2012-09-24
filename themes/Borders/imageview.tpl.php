<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 <!--phpalbum <?=$phpalbum_version?> -->
 <head>
   <title><? print $site_name;?></title>
   <LINK REL="stylesheet" HREF="<?print ($stylesheet_link);?>" TYPE="text/css">
 </head>
 <body>

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
    
    <?if($logged_in){?>
    	<a title="refresh" class="scan-dir" href="main.php?cmd=setup&var1=pics"></a>
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
 
 <div style="margin:200px 0 0; text-align:center;">

    <img alt="<? print $short_desc;?>" width="<? print $width;?>" height="<? print $height;?>" src="<? print $image;?>" border="1" style="border-color: #888888;"/>
    <div>
	<? foreach($params as $name => $value){?>
		<?=$value?>
	<?}?>
    </div>
    
	<? if($short_desc){?>
    <div class="photodesc"><? print $short_desc;?></div>
    <? } ?>
    <? if($long_desc){?>
    <div class="photodesc"><? print $long_desc?></div>
    <? } ?>
    
    <!--? print $parameters; ?-->
    
    <? if( $post_ecard_link ){ ?>
    <a class="me" href="<?=$post_ecard_link?>"><?p("ID_WRITE_ECARD");?></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <? } ?>
    <? if( $post_comment_link ){ ?>
        <a class="me" href="<?=$post_comment_link?>"><?p("ID_ADD_COMMENT");?></a>
    <? } ?>
    <? print $ecards;   ?>
    <? print $comments; ?>
 </div>


<? if($tracking_code) { print $tracking_code; } ?>
<!--end of page -->
</body></html>