<?php
 $component = new OssnComponents;
 $settings  = $component->getSettings('OAuthLogin');
?>

<form action="<?=$settings->wp_consumer_authorization_url?>?response_type=code&client_id=<?=$settings->wp_consumer_key?>&redirect_uri=<?=$settings->wp_redirect_uri?>" method="post">
  <button class="btn btn-block btn-social btn-wordpress btn-sm" type="submit">
    <span class="fa fa-wordpress"></span>
    <?php echo ossn_print('oauth:login:with:wordpress');?>
  </button>
</form>
