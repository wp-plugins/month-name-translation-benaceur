<?php

function month_name_translation_benaceur_page_options() {
		
        include ('includes/panel-var.php');
		?>
            <h2><b><?php _e('Month-Name-Translation-Benaceur', 'month-name-translation-benaceur'); ?></b></h2>
        <br /><br /><h2><?php _e('Settings', 'month-name-translation-benaceur'); ?></h2>
        <form method="post" action="options.php"  >
            <?php settings_fields( 'month_name_translation_benaceur_group' ); 
				do_settings_sections( 'month_name_translation_benaceur_group' );
			?>

<table class="form-table">
	<tr>
		<td>
    <div class="switch demo1">
                        <input type="checkbox"  value="1" <?php if ($mntb_enable_plug) echo 'checked="checked"';  ?> name="month_name_translation_benaceur_enable_plug" />
                        <label></label>
	</div>
	<center><div style="margin-top:10px;margin-bottom:20px;" ><?php _e("Enable plugin",'month-name-translation-benaceur'); ?></div></center>
		</td>
	</tr>
</table>

<div class="to-tr2"></div>
<br />
<table border="0" width="98%" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" width="50%">
              <table class="form-table-mntb">
                <tr valign="top">
                    <td style="word-wrap:break-word;min-width:20%;">
					<?php _e("Enter the names of months as currently in your site (in order)",'month-name-translation-benaceur'); ?>                   
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_jan" value="<?php echo $mntb_jan; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Fev" value="<?php echo $mntb_Fev; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Mar" value="<?php echo $mntb_Mar; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Avr" value="<?php echo $mntb_Avr; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Mai" value="<?php echo $mntb_Mai; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="monthnametranslationbenaceurjuin" value="<?php echo $mntb_Juin; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="monthnametranslationbenaceurjuil" value="<?php echo $mntb_Juil; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Aou" value="<?php echo $mntb_Aou; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Sep" value="<?php echo $mntb_Sep; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Oct" value="<?php echo $mntb_Oct; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Nov" value="<?php echo $mntb_Nov; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Dec" value="<?php echo $mntb_Dec; ?>" /></div>
                   </td>
                </tr>
              </table>
		</td>
		<td align="center" width="50%">
              <table class="form-table-mntb">
                <tr valign="top">
                    <td style="word-wrap:break-word;min-width:20%;">
					<?php _e("Enter the new names of the months of your choice (in order)",'month-name-translation-benaceur'); ?>                   
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_jan" value="<?php echo $mntb_t_jan; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Fev" value="<?php echo $mntb_t_Fev; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Mar" value="<?php echo $mntb_t_Mar; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Avr" value="<?php echo $mntb_t_Avr; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Mai" value="<?php echo $mntb_t_Mai; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="monthnametranslationbenaceurtjuin" value="<?php echo $mntb_t_Juin; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="monthnametranslationbenaceurtjuil" value="<?php echo $mntb_t_Juil; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Aou" value="<?php echo $mntb_t_Aou; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Sep" value="<?php echo $mntb_t_Sep; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Oct" value="<?php echo $mntb_t_Oct; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Nov" value="<?php echo $mntb_t_Nov; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Dec" value="<?php echo $mntb_t_Dec; ?>" /></div>
                   </td>
                </tr>
              </table>
		</td>
	</tr>
</table>

<br /><div class="to-tr2"></div><br />

<table style="margin-top:20px;" >
	
					<tr>
						<td>
                   <input type="radio" name="month_name_translation_benaceur_delete_all_options" value="delete_opt_mntb" <?php if( $mntb_delete_all_options == 'delete_opt_mntb')echo 'checked';?> >
                    <td><?php _e("Remove all settings and data of the plugin from database when the plugin is disabled",'month-name-translation-benaceur'); ?></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" name="month_name_translation_benaceur_delete_all_options" value="no_delete_opt_mntb" <?php if( $mntb_delete_all_options == 'no_delete_opt_mntb')echo 'checked';?> >
						</td>
                   <td><?php _e("Do not delete",'month-name-translation-benaceur'); ?></td>
					</tr>
</table>
<br />
<table style="margin-top:20px;" >
	
                <tr>  
                    <td> 
					<label class="switch-nab">				

	                    <input type="checkbox" class="switch-input" name="month_name_translation_benaceur_hide_icon_evol_plug" value="1" <?php if( $mntb_hide_icon_evol_plug) { echo 'checked="checked"'; } ?>/>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       &nbsp;&nbsp;&nbsp; <td style="font-size: 13px;font-weight:normal;"><?php _e('Hide the plugin rating icon', 'month-name-translation-benaceur'); ?></td>
				   </td>
                </tr>
</table>
<br />
					<p><?php submit_button(); ?></p>
        </form>
		
<br />
<div id="month-name-translation-benaceur-font">
<br /><div class="to-tr"></div>
<br />
    <form action="options.php" method="post">
            <?php settings_fields( 'month_name_translation_benaceur_all_reset' ); 
			?>
	  <input type="hidden"  name="mntb_all_reset" value="1" <?php if(empty($mntb_all_reset) ) { echo 'checked="checked"'; } ?>/>
      <input type="submit" value="<?php _e('Reset all settings', 'month-name-translation-benaceur');?>" class="button-secondary" />
    </form>
<br />
    </div>
<?php if(empty($mntb_hide_icon_evol_plug)) {?>
<div class="hov-button-primary-sub-mntb"><div class="button button-primary"><a target="_blank" href="https://wordpress.org/support/view/plugin-reviews/month-name-translation-benaceur?filter=5"><?php _e('Do not forget to rate the plugin', 'month-name-translation-benaceur');?></a></div></div>
<?php } ?>

<div class="c-sub-mntb">		
<div id="sub-mntb">
<a target="_blank" href="https://wordpress.org/plugins/news-ticker-benaceur/">https://wordpress.org/plugins/news-ticker-benaceur</a><br /><br />
<a target="_blank" href="https://wordpress.org/plugins/notification-msg-interface-benaceur/">https://wordpress.org/plugins/notification-msg-interface-benaceur</a><br /><br />
<a target="_blank" href="https://wordpress.org/plugins/notification-admin-panel-benaceur/">https://wordpress.org/plugins/notification-admin-panel-benaceur</a><br /><br />
<a target="_blank" href="https://wordpress.org/plugins/month-name-translation-benaceur/">https://wordpress.org/plugins/month-name-translation-benaceur</a>
<br /><br />
</div>
<input type='button'  id='bt-mntb' class="button-secondary" value='<?php _e('My plugins', 'month-name-translation-benaceur'); ?>' onclick="setVisibility_mntb('sub-mntb');";>
</div>

<script language="JavaScript">
function setVisibility_mntb(id) {
if(document.getElementById('bt-mntb').value=='<?php _e('Hide this list', 'month-name-translation-benaceur'); ?>'){
document.getElementById('bt-mntb').value = '<?php _e('My plugins', 'month-name-translation-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt-mntb').value = '<?php _e('Hide this list', 'month-name-translation-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>

<?php
        }

