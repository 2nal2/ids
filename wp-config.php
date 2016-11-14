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
define('DB_NAME', 'ids_page');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'tiburon');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY', 'Z]5_bN--%EL}S.Sr<i~HMub,-*t{7zZ~A?# BWe[?}4:Y&?9(krT=#dLsERzt%m6');
define('SECURE_AUTH_KEY', 'gY]Ep:!P2kU[.m:a-ZpJ=}Z^P:aw)0$1Rj=%@$HKZxv2sGxl|TyDVSY_:YS(^n%h');
define('LOGGED_IN_KEY', 'j Gx>ur)xF]o+nxYe[WmXalZ?xb{fw(s/5sd;VZVI]aKMM9&Uc%(td`8lgs?4nv-');
define('NONCE_KEY', 'NET-*0X.==cG>hQ8sH5UI7C$or0=~lQAxeDY2iKUzr) T4-*)tQA7B(H=()ekQ5e');
define('AUTH_SALT', '0/?g?)XP22r.PPmr09isYLR?^>- t%.g:3w>gM)f),*|Xg*!lIR6)+v_^I^PPf%.');
define('SECURE_AUTH_SALT', '_bwZxC=tG2TPIopOzJTB<}/xg$ro`3W>33|Q0L)gc2t~X4l=L{_+B/8R7GteKNJG');
define('LOGGED_IN_SALT', '6kU j(dT$G#k~I1sE-=cz4L$T-_:B.Q~c}cLw/KySG7RCqPAP)$`JB?_qS+@,XLK');
define('NONCE_SALT', '@*8y|9S,tk_1#My6 =8%FpdBy]Fn|vH#TGACl^6iK/Q7rz<_wnypZv@}xj173izz');

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

