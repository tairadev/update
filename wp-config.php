<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'update' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%s%&4O7}iojk.h.r]m*V|~IUB~:Qckt).qAP1,!QGP$wLn nA*/ao2Ez}D+1Q}B,' );
define( 'SECURE_AUTH_KEY',  '@<6hfn0>n_BW&fMb-9rg|9nx1f6>bomNO7mj%HK/[^B-o>Y)a;S`ojgj5e=a@J/H' );
define( 'LOGGED_IN_KEY',    'd}l6~>QIqf52Yt-r3V_Mp$vF~7qe%we~q5%W^K~Mr>mu^(+F&([k=FTo{<1zV.IG' );
define( 'NONCE_KEY',        'hvkNC$[y~(y2s3 d`pRG3BKn-~bjp-p!3J_JwmbKoM4/]/d-|HOnHjGi-^qFC%,#' );
define( 'AUTH_SALT',        '>ntx}Z2=u0ouewM59QW |7wSbBo`8-AX%D^~(>p;6c?nfdbXhcvU`Q`2TQ.8jN^W' );
define( 'SECURE_AUTH_SALT', 'ZAb:-3u#4rkQw>92LTC1xlqQ#XMDT=&yT;5vXR<}BsD{ WTm+na`_HB6MeFaw6mj' );
define( 'LOGGED_IN_SALT',   'o}BP{<,Ku$mGww-]^>Yxb$uB$7|qzlnU[8yjBuB<IV%aS-PeRQ>C0 /.Ti%h![Pu' );
define( 'NONCE_SALT',       'M0<AC)yjAfRC9=hDU([K.wX$t9NF^k?EvHd,2o&=neU;Y98dvAdZ^!]>Z[w-tZ9&' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'up_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
