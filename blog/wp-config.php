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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/blog/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'w0rdpr3ss');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
  *
   * Change these to different unique phrases!
    * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
     * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
      *
       * @since 2.6.0
        */
	define('AUTH_KEY',         'Z q(?2Cjm.7$lt0NgjG ?Z7=EyOMcLFfyYPMt6Gx(?d>x8$)Qm*nf=D~A=;J]Wm^');
	define('SECURE_AUTH_KEY',  'Di6BM]IO*~sw0g[d_TxbAZh!y)Zv_XUc#E6<}>e<hn~I/%81Dr([u|B*rt!>8ktM');
	define('LOGGED_IN_KEY',    'bVf.7=~N2[Ad0V<IEfp0.&ol3x+y6fa,w:M]^Ktv79<>@M48Jyn%<>rS@{^=pJ;j');
	define('NONCE_KEY',        '[^hQ7H`W)$0uL24fx}@+ZyGl5+ tM.C,;`0.iA{>OLUr%gdWHec$Jz}p/>nIp;BU');
	define('AUTH_SALT',        ')Hinf9tT!4Ci[r{6H_GD8:PE,4V!EKsb^M(VnJa*t9X,1R#Ec)PdSASItT[EYIES');
	define('SECURE_AUTH_SALT', ',%UM7R,v#$iF@Y+mM(j%?UT 1FYJ;2$fkF%$nc/u!+hC#LDj[A7T=K7D>eE{>WFE');
	define('LOGGED_IN_SALT',   '{Le?x EZ4?Rg|8>K_vpt N=sFtatX Zvl_,x$QClsaUeO`>u]V&lgw?;_K[?Y$|y');
	define('NONCE_SALT',       '?sSO_]!O4R_sH<GMWGcF*qp!- >7#) m-=@rUFBc8Bp9j1`qH7S`Zsjj)A/B/5gO');

/**#@-*/

/**
 * WordPress Database Table prefix.
  *
   * You can have multiple installations in one database if you give each
    * a unique prefix. Only numbers, letters, and underscores please!
     */
     $table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
  *
   * Change this to true to enable the display of notices during development.
    * It is strongly recommended that plugin and theme developers use WP_DEBUG
     * in their development environments.
      *
       * For information on other constants that can be used for debugging,
        * visit the Codex.
	 *
	  * @link https://codex.wordpress.org/Debugging_in_WordPress
	   */
	   define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
   define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
