<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'natha-mota' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'DyT>=K@T.nZp`[,<(o}-J3sEZjc{AW>U&F2Us ob>ZfbhTiOu`Wod-sxqbJ),/!|' );
define( 'SECURE_AUTH_KEY',  'R!1tGm1/dZvTH.Q$>Mqn#b/|HT$vV6,}MMA*TDK<-}NfOCvS*D-D28S:ULL.RsdU' );
define( 'LOGGED_IN_KEY',    'UK9D3CDT7C{<u*7oEiGs*lPK.[B:cqCBfrJrv|BP(B`m2G.M~Ld)f`<h8h$*0=z_' );
define( 'NONCE_KEY',        '{,^E.um*CB7]&NHHQ_-BWwDEZs4Pc6?xsL$Y&C&Do}y7Q4P}b$x-}Sk}32IWfv+%' );
define( 'AUTH_SALT',        'l%+5If{qyZ5X,MXkjTo%2(Pj/3V06O_3S),*]Ho-DkT )D87,Kyb/@Ar=A[a~}=-' );
define( 'SECURE_AUTH_SALT', '.ETl=PQO!gic(1]|=1~+5MsCp(YfjHg(q39k]{@aV3+fpcY,vaL1-zvBEY@EN`(x' );
define( 'LOGGED_IN_SALT',   '~^z`^y5c>3(3H~#Z-jpU75GEabLZZ2rVie?K5r7s_1LuM+Mn&=TB/`xMXK5r}z{H' );
define( 'NONCE_SALT',       '{M)~]GZ}6}tE7#?KAQEWsEC5nzFiJF|)%^Q^I!/m?U[:Y- 6r)Q$ rZ$*~4Majr ' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
