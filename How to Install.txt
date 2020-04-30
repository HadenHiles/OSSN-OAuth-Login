# OSSN-OAuth-Login
A component for OSSN to configure OAuth login from any third party client such as WordPress (Ex. use "WP OAuth Server" plugin)

## How to obtain OAuth API Details in WordPress

1) Go to OAuth Server plugin settings in WordPress
2) Add a ient
3) Set redirect uri to yourossnsite.com/oauth_login/wordpress
4) Find your Client ID and Client secret and save them in yourossnwebsite.com/administrator/component/OauthLogin
5) You will need to look at documentation for the WordPress OAuth plugin's authorize/token/resource urls and save those under OauthLogin settings as well
