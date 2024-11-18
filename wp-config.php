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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ebook' );

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
define( 'AUTH_KEY',         'x|P41{W_0!t}JxI*g-JW(u]yUS{(L| ~$mD`l&Uv/lQ4XpjOFtxXa)`a#nGiHN!c' );
define( 'SECURE_AUTH_KEY',  '042.o/y<#/yK|DjBk-m|/OJy63u_NpMn9@r#M(@lKw}q14fRT?u2(4ZJhKK@1dKs' );
define( 'LOGGED_IN_KEY',    ')2n;Q{>K;0_}`J)R*[k:-D7OwVHt0+}oJY52-i`)#A:j>Z,N}1AP$DV;!;/T}%+o' );
define( 'NONCE_KEY',        'd020c=sksuB4xNwuw?v5G>|9YULx_u0EM d{)j+k%Xnk)ZlR+mA*z(2vQwaM4*Yi' );
define( 'AUTH_SALT',        ',?h?3Ijfpu_OErre[~]F Ato#,t.{*Y&pirmJ-G?U4C~O/yR9XW.=TrLY42{AUO/' );
define( 'SECURE_AUTH_SALT', '(V/ILCzGBKk8wO}rp]!zlOpk[#25IjS#eI.1,H,4RnIahBW{11.!6|+/O$lHq,!B' );
define( 'LOGGED_IN_SALT',   'WF&Hlr|Rp3fR#0d<_`H|CeDdTlWQ@F%uE#]A3y|1oJD&`e+99Y9:fmwQ#;HEP{uc' );
define( 'NONCE_SALT',       'Zbz9}5<9`9@gb:H$t07>p},}?XySg/D&,VAN9nf!%_ii1*L<Hju51mLK;xmu~!bP' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */

define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

define('SAVEQUERIES', true);
define('WP_MEMORY_LIMIT', '512M');
define( 'DISALLOW_FILE_EDIT', true );
define('FS_METHOD','direct');
/** Setando URLs para não consultar a base em busca delas */
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME'] . '/ebook/site');
define('WP_SITEURL', WP_HOME);
/** Alterando localização do diretório wp-content */
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/ebook/site/site');
define('WP_CONTENT_URL', WP_HOME . '/site');
/** Alterando localização do diretório de plugins */
define('WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins');
define('WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins');
define('UPLOADS', 'site/' . 'uploads');
/** Para que o Contact Form 7 não adicione tags br ou p nos formulários de contato **/
define ('WPCF7_AUTOP', false );
/* Isto é tudo, pode parar de editar! :) */
/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');