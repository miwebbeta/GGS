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
define('DB_NAME', 'GGS');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '!GUsx?+QX]+hbmd>y^(H:&wEhQ{JViFF1NZnsOf8ON(^kkq~;uzm3i/3-)%R:sz3');
define('SECURE_AUTH_KEY', 'rNPJg<_k9I-;%_&j:uo#3eP5/^)#+&|SP{N`B@oz85C z>-u^L`d6qgl >dh:cau');
define('LOGGED_IN_KEY', '0;g?Y`4;zOlopCOpT!I)&Epw[Z)?0<nkD80+:f*L0]UBspQiod1|n|)3zOZL;$n_');
define('NONCE_KEY', '*xyLUeZ1[SNY3lq}-|szR0,BY=1Jz{u)NfV[nU-}(fO:ss9]=7>L5JOEm +K=k^!');
define('AUTH_SALT', 'xMdqTATl[i^d:Cj%RS+tv]4iRDOqle_A`j5Fo<{Jl<&?/},!`mY4B t4!:WF60N>');
define('SECURE_AUTH_SALT', 'B^(&/cir}ni-<QhhSav:H$0 <sjsS=uAXZN>v3+~wsWpP%Npd+re4!I-CtR(?fhx');
define('LOGGED_IN_SALT', '[Ez2:zng%OBqAI|nP[wI]ux;|IuCtQnT=8x{@hh/0_a&K>>Euod1-nz.^l*%Y>9X');
define('NONCE_SALT', '~6[])#s>Ql6U^.u1-5o?np` G@Q}hiL@L#oWr{p. y@K@(&vL1EKon ;6Q^L=5o}');

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

