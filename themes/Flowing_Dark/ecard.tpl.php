<table cellspacing="0">
<?   if($sending_ecard){ ?>
			<!-- dialog for adding comment-->
			<a name="ECARD"/>
			<tr><td  colspan="2" align="left">
				 <form method="post" action="<?=$post_ecard_link?>">
				 <table >
				  <tr><td nowrap align="right"><?p("ID_SENDER_NAME");?>&nbsp;<input name="p_sender_name" size="25" value="<?=$comment_name?>"/>&nbsp;&nbsp;</td><td nowrap align="right">
					<?p("ID_SENDER_EMAIL");?>&nbsp;<input name="p_sender_email" size="30" value="<?=$comment_email?>"/><td></tr>
				  <tr><td nowrap align="right"><?p("ID_RECIPIENT_NAME");?>&nbsp;<input name="p_recipient_name" size="25"/>&nbsp;&nbsp;</td><td nowrap align="right">
					<?p("ID_RECIPIENT_EMAIL");?>&nbsp;<input name="p_recipient_email" size="30"/><td></tr>
				 	<tr><td colspan="2"><?p("ID_YOUR_MESSAGE");?></td></tr>
				  <tr><td colspan="2"><textarea name="p_your_message" cols="70" rows="6"></textarea>
				  <tr><td colspan="2"><input type="submit" value="<?p("ID_WRITE_ECARD");?>"/></td>
				 </table>
			</td></tr>
<?   }else if($viewing_card){ ?>
		<a name="ECARD"/>
		<table width="100%" border="0"><tr><td align="center" width="100%">
			<table style="border: black solid 2px; margin:5px; background-color:#ffffff; width: 600px; height: 400px;" cellspacing="10">
				<tr>
				<td width="300" style=" border-right: 1px solid #000000;">
					<div style="margin: 10px; height:380;"><h2><?print $ecard_message;?></h2></div>
				</td>
				<td valign="top">
					<table border="0" width="100%">
						<tr><td align="right" width="100%"><img src="res/stamp.png"/></td></tr>
						<tr><td>
							<div style="margin: 10px; margin-top: 50px;"><h3><?p("ID_FROM");?>&nbsp;&nbsp;<?print $sender_name." <br/>&lt;".$sender_email."&gt;";?></h3></div>
							<div style="margin: 10px;"><h3><?p("ID_TO");?>&nbsp;&nbsp;<?print $recipient_name." <br/>&lt;".$recipient_email."&gt;";?></h3></div>
						</td></tr>
					</table>
				</td>
				</tr>
			</table>
		</table>
<?   } ?>
</table>

