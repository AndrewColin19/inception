<?php
	define("DB_NAME",			getenv("DB_DATABASE"));
	define("DB_USER",			getenv("DB_USER"));
	define("DB_PASSWORD",			getenv("DB_PASSWORD"));
	define("DB_HOST",			getenv("WORDPRESS_MARIADB_HOST") . ":3306");
	define("DB_CHARSET",			getenv("DB_CHARSET"));
	define("DB_COLLATE",			getenv("DB_COLLATE"));
	define('AUTH_KEY',			'toto');
	define('SECURE_AUTH_KEY',		'toto');
	define('LOGGED_IN_KEY',			'toto');
	define('NONCE_KEY',			'toto');
	define('AUTH_SALT',			'toto');
	define('SECURE_AUTH_SALT',		'toto');
	define('LOGGED_IN_SALT',		'toto');
	define('NONCE_SALT',			'toto');
	define("CONCATENATE_SCRIPTS",	false);

	$table_prefix =					getenv("DB_PREFIX");

	define("WP_DEBUG", true);
	if (!defined("ABSPATH"))
		define("ABSPATH", __DIR__ . "/");

	require_once ABSPATH . "wp-settings.php";
?>
