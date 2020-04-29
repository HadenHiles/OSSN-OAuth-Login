<?php
echo ossn_view_form('oauthlogin/settings', array(
  'action' => ossn_site_url() . 'action/oauth_login/settings',
  'class' => 'oauthlogin-form-admin',
));
