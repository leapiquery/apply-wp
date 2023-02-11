<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'root' );

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' %8Y@*buv>Rrn`>-04&HAya?2]5i4ht#h++n{V>9-1Mq(K?ST~,c[+)d&Qs ~C0#');
  define('SECURE_AUTH_KEY',  'bHW+bw]_Vf;2z27zXL-olz:&- sRStJy|7SuJ}g-L]14r so%_fEi=DwSwC-|.4I');
  define('LOGGED_IN_KEY',    'N>0,6w`LKdji_37vKJ8D<[8/^9:*bjNs@iZa|qDH$XEd^G|#-5R/e[^6sxRUR@oV');
  define('NONCE_KEY',        'VCGmd*4E!]oVcpRW;{-];-b2VUUa<w/O*Gutnn9ds.xTx8@L)c 8Udr9vV@nM+Ol');
  define('AUTH_SALT',        'A{^8-.I3]$3X)(U^#F~/,b5P{w=3h=K$pdXo(!K`-D15>9&/Aqsh+Ag!pMq q2)9');
  define('SECURE_AUTH_SALT', 'v2Ah%4.nd$;[w-uQ2j|o6S(a|)YbmgJ]+~EPJ^B:<bpk>G9WWeJpSoaJ0 8Q^<-`');
  define('LOGGED_IN_SALT',   '@PA]YwG1T8VgYVG<)B3MQuxh*0_xg$r0HXKa.]w8=]G#F`{-[gvQN+:Ojc<es4iT');
  define('NONCE_SALT',       '-*MzfQ<v9BG(UvrI4i+cA=z|b1*K*!8`a:kNM9vs3|GczfyWMKb+p?j4mM&qc1IA');
  define( 'WP_HOME', 'http://apply-wp-master.com/wordpress/' );
  define( 'WP_SITEURL', 'http://apply-wp-master.com/wordpress/' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');