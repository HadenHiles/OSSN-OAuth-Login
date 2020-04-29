<?php
 $component = new OssnComponents;
 $settings  = $component->getSettings('OAuthLogin');
?>

<fieldset class="fieldset">
	<legend><?php echo ossn_print('oauth:login:wordpress');?></legend>
    <label><?php echo ossn_print('oauth:login:client:authorization');?></label>
    <input type="text" name="wp_consumer_authorization_url" value="<?php echo $settings->wp_consumer_authorization_url;?>" />
    <label><?php echo ossn_print('oauth:login:client:token');?></label>
    <input type="text" name="wp_consumer_token_url" value="<?php echo $settings->wp_consumer_token_url;?>" />
    <label><?php echo ossn_print('oauth:login:client:key');?></label>
    <input type="text" name="wp_consumer_key" value="<?php echo $settings->wp_consumer_key;?>" />
    <label><?php echo ossn_print('oauth:login:client:secret');?></label>
    <input type="text" name="wp_consumer_secret"  value="<?php echo $settings->wp_consumer_secret;?>" />
    <label><?php echo ossn_print('oauth:login:client:endpoint');?></label>
    <input type="text" name="wp_consumer_endpoint_url"  value="<?php echo $settings->wp_consumer_endpoint_url;?>" />
    <label><?php echo ossn_print('oauth:login:wordpress:url');?></label>
    <input type="text" readonly value="<?php echo ossn_site_url('oauth_login/wordpress');?>" />
    <input type="submit" value="<?php echo ossn_print('save');?>" class="btn btn-success"/>
</fieldset>
