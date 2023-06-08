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
define( 'DB_NAME', 'base_donnees_planty' );

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
define( 'AUTH_KEY',         'R4&qh9<-bH)rzx<vFy?WFT(x%`x[9MoC7,wTiEzU&( vMpz*>h<*W@DWnPSpF?Fz' );
define( 'SECURE_AUTH_KEY',  '($dZg2-Hwo$:MJSQh$PzdYEuzB.>V<$>T,c$-jIQd,4cIJpsma?50=SC0} ]Uy/S' );
define( 'LOGGED_IN_KEY',    '>KvTR_.sB&u]VZZ(@>|y/o7iWMp{iTi;QK~0$az%Qd X-iF#Bqy7`SK&|k{Q~]D&' );
define( 'NONCE_KEY',        'l18Rcq- %Z_yuFW%:in{gss:V=Q-.H5(kiTyVXe^qbTU.?;Fb}t*k?i5?@0<DoA%' );
define( 'AUTH_SALT',        '*)z< Je1b$`qgh{bH<ZLg|%B k)GTzIHIwG+-[IqZeMYsG{1R*f@cA7d)`H<iBxn' );
define( 'SECURE_AUTH_SALT', 't4bL#B$[q d]Z[=1?K/7442Bq.Sz/maJ) EbU=6jfo*)-&&&Q:5h41xbSu^CFa`<' );
define( 'LOGGED_IN_SALT',   '[P_e4C<u0YMSvu4 h_CZ2og$AEg#W0N<pMMWm;5DoZSI0}ytKJvUZ0P7v_NxL^Ko' );
define( 'NONCE_SALT',       'eY,fTIjDg;]l14lm==_J<tG$60cOQNjo!vm[kJUix<bzeFj%,<i/uj:J5ohrp1t)' );
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
