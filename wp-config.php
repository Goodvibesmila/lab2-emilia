<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'lab2-emilia' );

/** Databasens användarnamn */
define( 'DB_USER', 'emiliajohansson' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'hallon91' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+r>~7Vdw#X0}{fUpR^vTGd?DKJ}hA:fve?j$)Zu<E}:deDq}?D1Sk6miU)DsYe8<' );
define( 'SECURE_AUTH_KEY',  '~c->I<D,7EfceGjaCG!j39w0O|^_,WUt+;_[I~iWJkTSL-y3m&:3Mn)UcH1c8*-,' );
define( 'LOGGED_IN_KEY',    'l<DEMdZ=XHL@!_m{S{Ay3s%7~if>7P25Crn&atwv@y>i,[ojL8z&LRmehPa*rjpD' );
define( 'NONCE_KEY',        'HAA@eIrIs ivmsb w;^5IL{ND8.!eqa^1rJA-U97]-F,p:rur2v%WQawEB}Prg36' );
define( 'AUTH_SALT',        'BjP:sLkkEF_wkd`YY)2b9)(h=/ODFV_uiw^RJOQ2{4ah1X=sE#smzu^@s3;[RinX' );
define( 'SECURE_AUTH_SALT', 'Ztq& E|x,lRaVixo8]#J;Lhb=F1;6$e +wbytiD_#/<3fKTD=~lgr9SiP6X+KD@t' );
define( 'LOGGED_IN_SALT',   'duNS)6O_jwVPDwbo!7/i%Si9Way-0}ceXWU5WT|}{08tPC,/GS!z27`y>t.gJ6-=' );
define( 'NONCE_SALT',       '}m}S.0gX%`|%+n$~{Lx@!UC{O{]0Pk`?JTVD%D{K*op|,{mY:{FcQC@s2b 7j3SQ' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');