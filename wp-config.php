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
define( 'DB_NAME', 's84oujzvz1tg0tvp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'gwup1wdvandzox2o' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'euem74q716mrmxro' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'lmc8ixkebgaq22lo.chr7pe7iynqr.eu-west-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '^[tRJ*?-YxVQD#cP3!/}$sq=*tXfKo)xnM24#ODvZ*tg+&LN$.!f  %Dn8!F/~nQ' );
define( 'SECURE_AUTH_KEY',  'Uz+kgzg@7K0MX`+0) a>t>PL)jyrdZQNVISek;I||Rt;/Nm`/st{p>1hOnS;7WMV' );
define( 'LOGGED_IN_KEY',    '!$Px+I 7+ v{hm5Nra*-v0G%JsL8p&JJ&s)]SK|?4.|Cafh9;z8gF&Gj692Yz#U3' );
define( 'NONCE_KEY',        'hlQj!_XSTO7kq63bq $$J TiJF2]sXL7T`Q=pS){98!Ysttpi]iWLhk-Mx{v.12>' );
define( 'AUTH_SALT',        'wpd}.seaWt^QJBMv5fBm2ztra`]!z hekjFCVxynanu_){OZa6s!/(w,-)<heoxm' );
define( 'SECURE_AUTH_SALT', '@:sB%K%)~@C=><cpCaCmnh`A4//r}m{hq8!tV[6OpmR+kGriYzY__~&(nzAy&uyo' );
define( 'LOGGED_IN_SALT',   'T5f=+f`XdAUCf,#,*TAQ:3,B#.k<;fe:LI(n~6faG)O<:K9V~bPfdd?JE1?y#3>^' );
define( 'NONCE_SALT',       'k{8B~1jAUs42+;O2;q2i@1,TyU&37tuW*4E/slEPOJ_VHdmBNR/v<>:cUsjIKCQ&' );
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
