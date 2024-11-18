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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'hubsul' );
/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'hangar' );
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
define( 'AUTH_KEY',         'W{G`*.(G2q]ExXfR5O~~vCsXKWaO?c}.lV@q#o<N5x t$7Y#JW[<)OXARh%U9K]n' );
define( 'SECURE_AUTH_KEY',  '.9d`z5eC@a4z=ht<Nd+N}2bCeg-wtzD4>##(|^Rg#[q75U9:,.!jA!FzW4Yj%]yZ' );
define( 'LOGGED_IN_KEY',    '4>%$UNCh%[eZ;kdg%$iO1PYoV$h[jd]rA)],N}L1Y};Y.mA{3*m5cc.Lh`g=5`nq' );
define( 'NONCE_KEY',        'o{!/n:#<EOyM0D#!bsJ+C];dijQ(Gn`S,CqN^l +_cp_AYt@.pRH{z@}6wpu<BE;' );
define( 'AUTH_SALT',        '@r:]hIDvJ<XTH}9EYf`hlUoLc1W{C}<3F?2O[Iq%,@dJ-F<9J]9YA],9=QJZAlDu' );
define( 'SECURE_AUTH_SALT', '*U;_x .VJ~|@<r6On]|r)P3<t|5l^ewy[4Sx38egwX5HL&R[ zGN,:`2b3,M HzK' );
define( 'LOGGED_IN_SALT',   'cwz?nIhb6zkj[{;,76gJSSV7/TYMP[ablO&5h1yT+uoS=m]05X{`BEmHHdNnc&&x' );
define( 'NONCE_SALT',       'H|v]&Bp.f0{mr3-IsNHh.OSkgS#e3uPNE*~&{VXw^CvmLg bpCih]r>Xi.x2?z&H' );
/**#@-*/
/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'HbsUyd_';
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
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

define('SAVEQUERIES', true);
define('WP_MEMORY_LIMIT', '512M');
define( 'DISALLOW_FILE_EDIT', true );
define('FS_METHOD','direct');
/** Setando URLs para não consultar a base em busca delas */
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME'] . '/hubsul/site');
define('WP_SITEURL', WP_HOME);
/** Alterando localização do diretório wp-content */
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/hubsul/site/site');
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