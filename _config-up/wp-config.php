<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'lg_lgustore');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'usrdblgst');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'kl1F%z09');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '@q</vxz$Q3]-P69l#^`u@@K}`E/7 ]3*_N}7zZ(O=#(=wSr|<=vzw}_+}V(x!5v)');
define('SECURE_AUTH_KEY', '+:K*vzhKk.`<v`F4h7(wj&_E-K?~:fSM%NXS]),(!LN/-eo8&Z4 sURbDue2]7wi');
define('LOGGED_IN_KEY', '=*yUI/y/Y{/Ag=|vVyjn9<:xczffE0Hi3%}I0qwu~F?LUfr&1nj9>0[8}|tp^jvx');
define('NONCE_KEY', '.]z|=(E)>[h%U>Q e-_`Rligf31I)g0xr4fd6L^XNVK+=eu;}+oBa@Vf?rF<p*y&');
define('AUTH_SALT', 'lUzk bns2,$-.~awXF^*!WW|1u243^c#DC{ez;g###T%!W=P<>`! FspwH]}*#h$');
define('SECURE_AUTH_SALT', 'qZ$hTemZUd0>_R/?[5cN,d@S62DV(Bl-I8lfp3=`+v_lcVRL#8-%v@<+W$mm(j8E');
define('LOGGED_IN_SALT', 'I]=oRlX36 l@V,]OS,NFW|GYzBY<$fFYg-=*G{`%)9}mkG=0V%)bja1Kg=p#?.jN');
define('NONCE_SALT', ']>5A~{W?$km$lTcS={|2NAZs.hM(i@ohAN[Js,p5<)Pd]TKlhX+Az?v0mj%@Neu{');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

