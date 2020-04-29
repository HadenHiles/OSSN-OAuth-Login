<?php
 $component = new OssnComponents;

 $wp_consumer_authorization_url = input('wp_consumer_authorization_url');
 $wp_consumer_token_url = input('wp_consumer_token_url');
 $wp_consumer_key = input('wp_consumer_key');
 $wp_consumer_secret = input('wp_consumer_secret');
 $wp_consumer_endpoint_url = input ('wp_consumer_endpoint_url');

 $args = array(
   'wp_consumer_authorization_url' => trim($wp_consumer_authorization_url),
   'wp_consumer_token_url' => trim($wp_consumer_token_url),
   'wp_consumer_key' => trim($wp_consumer_key),
   'wp_consumer_secret' => trim($wp_consumer_secret),
   'wp_consumer_endpoint_url' => trim($wp_consumer_endpoint_url),
 );

 if($component->setSettings('OAuthLogin', $args)){
		ossn_trigger_message(ossn_print('oauth:login:settings:saved'));
		redirect(REF);
 } else {
		ossn_trigger_message(ossn_print('oauth:login:settings:save:error'), 'error');
		redirect(REF);
 }
