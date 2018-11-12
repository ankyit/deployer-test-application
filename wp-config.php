<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'testdb' );
define( 'DB_USER',     'testdbuser' );
define( 'DB_PASSWORD', 'testpassword' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
define('AUTH_KEY',         '60-|MX!@teq^u2+l*qsLUSoYj/PziEW t>Lse6AZ%fe[we*Oy]ESh+w:(i');
define('AUTH_SALT',        'yOwgYy5Vr1-xX,krEnA3iGwjuPE^weS8n,06_H!*CsHCaTqnDE(EptX,Txd&l%Hi#]f.Or+03(TvhwwVgn2#gHp/');
define('NONCE_SALT',       '<<@^<-RNP6Lb.D#FX1pfCR1<5u;s-$x;V1Q1^`1eu-1`vkm!!=)x>]:@3 jz5)>|');


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
