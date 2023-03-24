<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'rtm2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HM>!2NLK4.{71i/p2@T@,1~x]4A.5-|!lr|Oj0g@I*#!M+ZpNpeMX`nY,0:;)q__' );
define( 'SECURE_AUTH_KEY',  '!LX b5<}#}!k*4AVld|k(Tk!c:ZVr&q#>jaR)z&db67%gC}q1*1Fk#e`b`TW%)*t' );
define( 'LOGGED_IN_KEY',    'eQ;u)^Otpd2MwRJ|qO9zO3|hRI%N<5uz[+,~WFI6_;e`>QX< sne;UkOar<x#];8' );
define( 'NONCE_KEY',        'b0OA-)A!_B{CQtuuZp@[>sk|tn$SG*;{VaMBbw<$c_1rr$oDHcqAA4ET[FlN[3UL' );
define( 'AUTH_SALT',        'wG%5X+KN8h]2oyO6F>}!8D[eY3m]lN^GWE*w!!qZ!oQo;&QNQr<YY#^H1=:dqpDY' );
define( 'SECURE_AUTH_SALT', 'v_dQ_V)>Mp.!MraE|(tW_XU8{mmZ*?ndKBHi[6#hPT~u~)lNFB],Z[>?Z`.*+gi(' );
define( 'LOGGED_IN_SALT',   '[1qr@fyDPXE`7uC_VUE;Ugem<;)>R>dtO$rsIKdlf/[)I^L3/OHwP#hNeACKb_!u' );
define( 'NONCE_SALT',       'ER.;5Ue@q$gE=%/LbLVdz-%Xn$4NimrWb;Cd>-d?ei#IDY_YI2A6TwJj&vtJk95+' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
