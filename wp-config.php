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
define( 'DB_NAME', 'bucketlist' );

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
define( 'AUTH_KEY',         '_Wh%)6 1mzs9Kqm&xmNqI8R5`VWbdMD?{: sDi.mI}d1uXIA(|Wp6>U;/AuTbfGJ' );
define( 'SECURE_AUTH_KEY',  'b}G;v#b!L-}%QwInC ~(I6qQIR|sJ05kJ-QwwMMsCWFELt*62C=w6e1=F8T]OA&p' );
define( 'LOGGED_IN_KEY',    'a+`-L(E/s@ACn)!B1JmzE2_QGa/ P<1:u.Kx8$qd:-Q+X]O^& |1]PFFay da#{!' );
define( 'NONCE_KEY',        'rs[vzr>64_`1?!*o7=mb#Cz2X^}Ke[~q)+B}e()Ha&K#y&I)B, e|P ogqBQ4CWa' );
define( 'AUTH_SALT',        '5!>]IN>^$-0gxe|;XBnv>OU{y_e|t)@(eMd7s1JmFqBnLn!Yawbn#ne?~1,N8vwW' );
define( 'SECURE_AUTH_SALT', ';R9hUSz5`e;~/U/N}0Qle5I/Z{UQX;)U=|*f{f+dA)tpMU$N`w?YfQ.Y?1B5hXc_' );
define( 'LOGGED_IN_SALT',   '!Rr8;zDjeY3h$cpFBJ;yEL$DDnHdlUX!h/zb[W.CSe1Wj SW:97Bq~m>Zj[WP3DM' );
define( 'NONCE_SALT',       'TN.,?Qw31gI[nVDV-u2&/nF)$EV.Nr$g[%YBgocMX#j%?@@SpfI`>7rlF=BRBnSb' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'bcouihsifjoze';

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
