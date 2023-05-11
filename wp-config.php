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
define( 'DB_NAME', 'base_donnees_Planty' );

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
define( 'AUTH_KEY',         'C^wP`gw0CX@d2Re)Ha5h`LQ2RE[PV/g0[qL/C`J7|S/_R/7uSTZHKms(G~]x`g-5' );
define( 'SECURE_AUTH_KEY',  'a0,C_uCn!6}g[qmO`W^8Fv] V7 ja4i{*<IV.,%4*`Aw#Es6nNIn=^A GKPpwX*f' );
define( 'LOGGED_IN_KEY',    'HKB,J%@~/nbD$)T<}nz0EAD,_>!0Bl8`_J]Y d:4?dD~3M$LRq;zN.|?[lws;Tu%' );
define( 'NONCE_KEY',        ' s{Hh=>RVuB0nz?ucXxY7yYZ3sAE0BVArJz%JT{[**.& uz&|nprcjFO5G?}Ru}S' );
define( 'AUTH_SALT',        '$l[R.*37(,_dwpT>rj@06{:NOb*etq,=-=I*~:{,^^`z)Sg.%#uBr?m_K[qm2<M:' );
define( 'SECURE_AUTH_SALT', 'Fku)?6yrT,Dfm$~d_tIb0YWc=xORYK`P.oIv$Eh{~08y@OfB;#@R[pudx[r(T#ye' );
define( 'LOGGED_IN_SALT',   '_}^8lg{e|Nuplm_weU_)#_2Pw~Pd[Q-Y[Tv4,>zwj5xZ?zM5d.b_zJ]1IHD?LnfG' );
define( 'NONCE_SALT',       'fB9,>5r-E XoD]v^cb-3x=N5;+FMi`IG.hlWj^-}4N)Q~]ndc:LzX,0[LKLL9G`3' );
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
