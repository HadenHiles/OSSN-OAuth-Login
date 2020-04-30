<?php
 $component = new OssnComponents;
 $settings  = $component->getSettings('OAuthLogin');
?>


<a href="<?=$settings->wp_consumer_authorization_url?>?response_type=code&client_id=<?=$settings->wp_consumer_key?>&redirect_uri=<?=ossn_site_url('oauth_login/wordpress');?>" class="btn btn-block btn-social btn-wordpress btn-sm">
  <span class="fa fa-wordpress"></span>
  <?php echo ossn_print('oauth:login:with:wordpress');?>
</a>
