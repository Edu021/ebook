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
define( 'DB_NAME', 'tema-padrao' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'hangar-03' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Resultados@2019' );

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
define( 'AUTH_KEY',         '>(CB`6smBxw[|b0}Nzgn40P(wgn/i.@02`/1lihm^kgsnCkBj_J/6605ztd _TrT' );
define( 'SECURE_AUTH_KEY',  '05bWKI<^P8R:.l{z321/D%#XW26O.J|?OG4d<Tb@i1hxfb`cV6,X&HvBEry0$VIs' );
define( 'LOGGED_IN_KEY',    'zX31N4UoNdM(ltohe%vZdFv*QCbk0GhHfM}|3t}Qx{d#^F(/80;#=6U@.iTyTw}t' );
define( 'NONCE_KEY',        '#i|g.XoRU]J5}mxWvDX^6Y6]q9N?_glZKG*K7*ihDa60Kph[k#a4o2]Ib7#1GEJz' );
define( 'AUTH_SALT',        'DBa<-UQO=Hl9nj_Gvm}7Ofg48x Tf;0;mJ.8{eE)j9UY<-GraSN`&[hT9)Hlh]lP' );
define( 'SECURE_AUTH_SALT', '>[57{E4fc.aYKMtN+:4{OTb>`v!} !Vr~>E]r;L882q}40+J&wC3@}Yes7Yt&P<)' );
define( 'LOGGED_IN_SALT',   'hZ*UIFkLe33GX3Vkqq.IGJy2wT@8Bxs4EBpsLC|Y!2Um@eO<*Jsw0e?$ 4,O!5zw' );
define( 'NONCE_SALT',       'ke<wBG}AC02J=;{[xR5|*1Xb^DNi^p}?&CWqAtiO{:h^aT:O;g>K@=15<PC[K]di' );

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