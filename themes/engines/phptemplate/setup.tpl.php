<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 <head>
   <title><? print $site_name;?></title>
   <LINK REL="stylesheet" HREF="themes/engines/phptemplate/setup.css" TYPE="text/css">
   <LINK REL="stylesheet" HREF="<?print ($stylesheet_link);?>" TYPE="text/css">
 </head>
 <body>
 
<div id="logo">
    <?print $logo;?>
</div>

<div id="menu">
    <div class="menu-container">
        <b>previous</b>
        
        <a title="home" class="Photos" href="main.php?cmd=album"></a>
        <a title="gopir13.com" class="Home" href="http://gopir13.com/"></a>
        <a title="refresh" class="scan-dir" href="main.php?cmd=setup&amp;var1=pics"></a>
        <a title="settings" class="Setup" href="main.php?cmd=setup"></a>
        <a title="logout" class="Logout" href="main.php?cmd=album&amp;var1=&amp;logout"></a>
        
        <b>next</b>
    </div>
 </div>
 
 <div class="content">
     <div class="stngs_nav">
        <? print $menu;?>
     </div>
     <div class="stngs_content">
     	<? print $content; ?>
     </div>
 </div>


</body></html>
