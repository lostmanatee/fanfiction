<?php
# Database Configuration
define( 'DB_NAME', 'wp_atxrhps' );
define( 'DB_USER', 'atxrhps' );
define( 'DB_PASSWORD', 'xZ9nDzn6Ok0ktns7bNAJ' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'kK}3|-J#H9K3Dm=3Hsd%{6w;{86-Gz[o,<gIcll ~>;F*tG2#4c*RK;.o%[)Fx[`');
define('SECURE_AUTH_KEY',  'c>4<k4gILq}F*.A*?c[^9}HZM--;+_1x$GzLldf{ ?FV2cc=YssYV|hE*Z}zXO.R');
define('LOGGED_IN_KEY',    '{@0<i2:LS:_&i}|8QXL<J.@|E)QA1Z?7+~QL.ID/TUzf0%:fkrdwg9P<J;]&;,Fi');
define('NONCE_KEY',        ',x+L)8?3.|!6hkI7*mF*2#]7t$*JGIc`bA~[~JaS36&FKTryHGgJ+j}oPA9,shvs');
define('AUTH_SALT',        'z<id@_EgOr5TP6Ki+aq-wIE%B[QV^<X1<Q~$L2lw+$%V>&Aha[[+42;4|3cz*tKM');
define('SECURE_AUTH_SALT', '9XVVcU;dm?^.)j#CQzFuS1/q_BDv1fcnPY~)UG]FTO[uJ9!M5<*t|257OUexwyUU');
define('LOGGED_IN_SALT',   '+4z`m0lo1L[rY7.N,6%4-V r{Rqiwc@AngNQCB-WblL9;]Hde>=[p.-_1mBL;wW*');
define('NONCE_SALT',       ',8$ooqBg<5g0%oxFQnE&E|U]+D*q/Em$eN]G-5@DHF?x3KrAAy6C,x|F}Nf9|-.y');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'atxrhps' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'ef28591ac016103a33d8c4c29cbefa6dabaae467' );

define( 'WPE_CLUSTER_ID', '100219' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'atxrhps.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100219', );

$wpe_special_ips=array ( 0 => '104.155.130.219', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
