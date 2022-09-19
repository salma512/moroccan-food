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
define( 'DB_NAME', 'tp_word' );

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
define( 'AUTH_KEY',         '~aZyL$D3NiMj|JxmGqhK0ia?<q}T,skHVJ%;!AS,RO?+D7u]w.%PS! bc97IA~w+' );
define( 'SECURE_AUTH_KEY',  '$iOkCphXgrdy+s!P<@a& AHy[!Nc9_A_f{z5#V`G)U3c9dPbR~6r!.*1&TP^sK6u' );
define( 'LOGGED_IN_KEY',    '|MPhaYpOJaN)^.O~9#cKQy#fOx9hdMiWwQ*],FDdRats!xF5QgC 7e%!AsFm7%7i' );
define( 'NONCE_KEY',        '2dBW>yUgc53pTlM#|+?P=PS0!I?i=kOr!XZb;}2^75(]t4>>ce~@dXVYQ9,_:.9L' );
define( 'AUTH_SALT',        '=g84_LoCop2dz<yc!Fu,qrGJf3W*~*-4Gh)#jDd6oAL2&+q+|<hNCn6pb^./GDpb' );
define( 'SECURE_AUTH_SALT', 'uj7Ah.`!mS<VsVCRJ]$=E;4zS21]5{Sh_[Z$zv>FfDaDZ*;FXi(5xe^8~m+<PDSt' );
define( 'LOGGED_IN_SALT',   'YN=K1|5C7ojhO<)P=0(ECmg]N<xfB<T^y~WlSI=u{%(&(T)^dEota3e(cn$8JLfN' );
define( 'NONCE_SALT',       '-aiTbH:dk0NtO2QgUh!U(Y:U`B6C+!{AY?A,chsr][$OgsPcfA0JYqWmMI{I5s7=' );
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
