<?php
// Parse settings file
$settingsFile = __DIR__ . '../../shop.cnf';
$settings = parse_ini_file($settingsFile, true);
if (empty($settings)) {
	die('Settings file not found');
} else {
	define('_PS_SETTINGS_FILE_', $settingsFile);
}
define('_DB_SERVER_', $settings['shop']['server']);
define('_DB_NAME_', $settings['shop']['database']);
define('_DB_USER_', $settings['shop']['user']);
define('_DB_PASSWD_', $settings['shop']['password']);
define('_DB_PREFIX_', $settings['shop']['prefix']);
define('_MYSQL_ENGINE_', 'InnoDB');
define('_PS_CACHING_SYSTEM_', 'CacheMemcache');
define('_PS_CACHE_ENABLED_', '0');
define('_COOKIE_KEY_', $settings['shop']['cookie_key']);
define('_COOKIE_IV_', $settings['shop']['cookie_iv']);
define('_PS_CREATION_DATE_', '2015-05-21');
if (!defined('_PS_VERSION_'))
	define('_PS_VERSION_', '1.6.0.14');
define('_RIJNDAEL_KEY_', 'pd1dZ3TapS0gH1Yp3HOCmBGJqS0TpnD2');
define('_RIJNDAEL_IV_', 'ZDSQzQiRVyAD8sib3QMuqQ==');
