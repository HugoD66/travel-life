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
define( 'DB_NAME', 'c38vg40iz08p7hwu' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'z2dlsq394tnysn4o' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'as921vrpte9y1taj' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'i0rgccmrx3at3wv3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'WCFA4s$|[ry:}#A7|Oj:8;W/`9$3a47zlI[YE9uWFVMjDRY?[INZ1D1xrr2deh^~' );
define( 'SECURE_AUTH_KEY',  'Hh E.Dwu{_oZyKnDVrI27&,OHEXm`6I#+? [,yJ 2ca_;]W+etH8J+DAl1RU6n>B' );
define( 'LOGGED_IN_KEY',    '`3!msuc[,{Ey2ER=Dw4}XxH5UBJ>%);?IQ];0Hsj]]5*PZr9KRwTn8d:O<dZ?s]f' );
define( 'NONCE_KEY',        '3(az>&1Q 9X#nRT?O/u,jMJ-C$vbNXv48eKAQyYjwlku^rpm~_C`CQ8c4;wOe|a^' );
define( 'AUTH_SALT',        '9y+5M#i3*)2/I7-ql=~riJ$lB9;jvCb7m*BJjd$4/!|4_ZMd|zbjSZD=&HTjZ$+n' );
define( 'SECURE_AUTH_SALT', 'u%XyY/#V}]PkBI9y#(=p(PIbD.#d9SD*0IP!JS_rh&)_(<L#.h-!b/easy9]^(7J' );
define( 'LOGGED_IN_SALT',   '-~q`_X=gkG^/1BXgv=6fi.#K<ER|(&]CXS1V-j`I@R*@Ow#_6K7w%U[AwwVoi7=S' );
define( 'NONCE_SALT',       '>+2(5^wQ#;c]D?j8;Au@G{+jY4&*}ViUS+,R$A*JDP^~,[J=3Cvt}V<60PCi5e>,' );
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
