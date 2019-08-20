<?php
$so = array();
global $dbConnect;
$dbConnect = $so['connect'] = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($dbConnect, 'utf8');
$so['theme'] = loadTheme();
$so['lang_active'] = 'vi';
$so['lang'] = loadLanguage();
$so['config']['theme_url'] = 'themes/' . $so['theme']['name'];
$so['config']['site_url'] = $site_url;
$so['config']['logo_extension'] = 'png';
$so['page'] = "welcome";
$so['language_type'] = 'rtl';
$so['config']['background_extension'] = 'jpg';
$so['config']['facebook_login'] = 1;
$so['config']['google_login'] = 0;
$so['config']['user_registration'] = 1;
$so['config']['chatSystem'] = 0;
$so['config']['profile_privacy'] = 0;

