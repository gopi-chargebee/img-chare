<!--table style="float: left;" cellspacing="0" cellpadding="0">
  <tr nowrap valign="center" height="<? print $height+2*$border; ?>">
    <td width="<? print $width+$border*2;?>" align="center" nowrap>
      <table cellpadding="0" cellspacing="0">
         <tr>
      		<td>
            	
            </td>
       </tr>
    </table>


   </td>
  </tr>
</table-->

<a class="thumb-img" href="<? print $image_view_link; ?>">
	<img alt="<? print $dir_name; ?>" src="<? print $thmb_link; ?>"/>
    <div class="thumb-detail">
	    <span class="thumb-desc"><?print $image_short_desc; ?></span>
        <span class="count"><?p("ID_MSG_COMMENT_COUNT",$comment_count);?></span>
        <span class="view" ><?p("ID_MSG_VIEW_COUNT",$view_count);?></span>
    </div>
</a>