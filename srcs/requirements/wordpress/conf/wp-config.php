<?php
	define("DB_NAME", getenv("MARIADB_DATABASE"));
	define("DB_USER", getenv("MARIADB_USER"));
	define("DB_PASSWORD", getenv("MARIADB_PASSWORD"));
	define("DB_HOST", getenv("WORDPRESS_MARIADB_HOST") . ":3306");
	define("DB_CHARSET", getenv("MARIADB_CHARSET"));
	define("DB_COLLATE", getenv("MARIADB_COLLATE"));
	define('AUTH_KEY',         '^c+|i+bj!!o2R?Ku-KWDw{W0TH< x62}D}b.HC+<?#r~<F8o8x$f}h-c;mRuvk)|');
	define('SECURE_AUTH_KEY',  '$YYzYz5H|lh6Gm]pj<yE|RVe@K_o:3){WH+3$^4X97nT{w:O+3r9S*B(YS]Oq+D.');
	define('LOGGED_IN_KEY',    '}{jbbl_(J;:8I^X)d,`.t]fV4-XIb3q!*2XS>oYu>@igR(|.OK[?>F<6<05>+>^4');
	define('NONCE_KEY',        '6yuOPdJ&tp_zeW:ur|G|=4lWqw~AYig6;>uz(&$c?|W}KnMoVq$,8n7yn0T/Gmtb');
	define('AUTH_SALT',        'prYg0OXgnfh8X$R!0kxlbwD/8w-NU7$?QD&:{T4O,{ecQ+Oj&guqv|TWh|Zv-kv{');
	define('SECURE_AUTH_SALT', 'pny{MNt}/hRVRc)T-<fuVKPpcV|.^F/.VskH9uB{P(:-H2Of~E%cr |d Pe2^Tr+');
	define('LOGGED_IN_SALT',   'LSC*$EWCHVwOM4^bp6;O6<@Q7/--[btHsQwdc9|7Yp;5QDkc-M^NaeG/!pa@4J=o');
	define('NONCE_SALT',       'eP/o^a=]Z4A346v1]Q}Pv4.,.kER$G;4]I.oTq2x9sl;0)bs!]>_K$4Ko{c[4u15');
	define("CONCATENATE_SCRIPTS",	false);

	$table_prefix = getenv("MARIADB_PREFIX");

	define("WP_DEBUG", true);
	if (!defined("ABSPATH"))
		define("ABSPATH", __DIR__ . "/");

	require_once ABSPATH . "wp-settings.php";
?>
