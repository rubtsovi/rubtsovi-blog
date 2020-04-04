<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rubtsovi_blog' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

ini_set('display_errors', E_ALL);
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG', true );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'IQ;=j^r.`@VdT1DMBtc*CO6Xues$LHCA >Dl8$?NRBi}^3K@|?I(CQTs@suC=p^z' );
define( 'SECURE_AUTH_KEY',   '$ei[D@O/ED#qG1o^zHx4=HBaV!EJo/Ghh{-x+TV1bHUm++yygu6r`.=qF|[H9q&x' );
define( 'LOGGED_IN_KEY',     '&uKw(93>DEFDoWsP1dA/u((_:?$<-a&.O^[o|`ux#dxH95+40 %5_,8BT+,1ddaf' );
define( 'NONCE_KEY',         '7jemY.s}9xQHnn5$mJY;:PX1K^IecE34W* 74TyB(g5a!ZH ?y5f*-!Oz<]a0-~l' );
define( 'AUTH_SALT',         'aA8#@+#^Cy u/Q@[.-&(_|N5dGt(qqN yIc$h/MD9}4aH2bmb5|pS^J=^b7b#JDB' );
define( 'SECURE_AUTH_SALT',  'r:QVZ9x8n&wLD!m[0$&1^3+wJyAcoCf[k~I)NSRYuX/9gUr-!TDB+RK+g@9{oA x' );
define( 'LOGGED_IN_SALT',    'Y,5Qn2y|?a< cL:6<gm$-Qvi)p1CaqMKDk :m{1xi=x+:t-bm@v0 Gb[,%MIG1z1' );
define( 'NONCE_SALT',        '{R</`1*6Lzs9QMln%m &|L-Eta($nv#.P09-.3P`]ZJU)tSs6#$1X|Ay;5}O?Fr}' );
define( 'WP_CACHE_KEY_SALT', 'N,bCv]lW^4Z!WeQ{fAu5M/.r*b=K?2YT5BhMZPl.0v9=[*.EfH><9%[v@Z%9Hq!!' );
