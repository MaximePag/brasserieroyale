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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'usr_wp' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'R:9bLmj+Rx1lH2#zc^Q`/*d2o0ktF xp}]Z4-fd{.j9asu2J}cC-@25;RJ{K2WG5' );
define( 'SECURE_AUTH_KEY',  'M?2myQsXscG7ESA>o-q.HOGKSjrAbFgC2T4ldZAqdw}{OpZT8#P_]`=E?D(,;8ys' );
define( 'LOGGED_IN_KEY',    '3H%8i4oC?*)x$/Wuh:G2Y*84b#4`{ &]P%|B&{PP_}z{{SF[M{[He9VVMaPV*X5k' );
define( 'NONCE_KEY',        'rq*6-m~_7D; 5R?xLBg{-jcVxl1aP-JtN?sfU,OHVP[:4x~Z#)X83{jcSa&/5V(L' );
define( 'AUTH_SALT',        'vx$.)QjP9@BuFw<C~>0` 9bsGwd3Ti9f+&?D3(tX9P~.[Q=LQcc56@)7:A9)q?KE' );
define( 'SECURE_AUTH_SALT', 'MPdV{V/bn?iPi56Oz?M:<E)88{[S2w.!T`sG`p+v$Eh]~Fv48bmR<o*[;yO7UixT' );
define( 'LOGGED_IN_SALT',   '-NwKKGf(&js}$5J7JAKV8h&%g5|vjtD-(-z X0t{xY:]i<qINJ[X{*o}y}]F&bY@' );
define( 'NONCE_SALT',       'L|[%ONCz#d+}}593yQtJVkx/m0P39%*=jSn5kRbuV~5Jbp#MjTY*98xLGU**9kyU' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
