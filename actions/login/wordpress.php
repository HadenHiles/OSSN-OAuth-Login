<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$oauth = oauth_login_cred();
if(empty($oauth->wordpress->consumer_authorization_url) || empty($oauth->wordpress->consumer_key) || empty($oauth->wordpress->consumer_secret) || empty($oauth->wordpress->redirect_uri)){
		ossn_trigger_message("Error 100!", 'error');
		redirect();
}

$content = "response_type=code&client_id=" . $oauth->wordpress->consumer_key . "&redirect_uri=" . $oauth->wordpress->redirect_uri;
$authorization = base64_encode($oauth->wordpress->consumer_key . ":" . $oauth->wordpress->consumer_secret);
$header = array("Authorization: Basic {$authorization}","Content-Type: application/x-www-form-urlencoded");

$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => $oauth->wordpress->consumer_authorization_url,
	CURLOPT_HTTPHEADER => $header,
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_SSL_VERIFYHOST => false,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $content
));
$response = curl_exec($curl);
curl_close($curl);
var_dump($response);
