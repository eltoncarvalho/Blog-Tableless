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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'eltoncarvalho');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');


define("WP_SITEURL","http://localhost/eltoncarvalho/");


define("WP_HOME","http://localhost/eltoncarvalho/");

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
define('AUTH_KEY',         '0IMfD<vW{}uhoTokiGH_:,v.#mk^rq=q=<y!$},:6.mf7j+~X4C~k~Z&x#]f3{EZ');
define('SECURE_AUTH_KEY',  '~XXO>gru|E~ymabMF?nJAh2dM4lLQsok}5gt{nr>nQf6gD9.US:@t3!Khe* A3uM');
define('LOGGED_IN_KEY',    ']Y0iDO&IV2P*5mM] H5{/G!xa*Zf@vk0bxn=RI(gLKYrDrwo+04ME;T#cJ_.e!.n');
define('NONCE_KEY',        ';qFTGZJnxu>aF6dJPi_pElZj05D6wt-6|wDr#V6?!=yU!e7+K:BzjM6q~ZeZ}Qff');
define('AUTH_SALT',        ',H%P50&#evZMYG}S>s#2g>GX,u%4oUrC/g|&aIlv*stD7,h/HlY9m _o$llRIDuZ');
define('SECURE_AUTH_SALT', ' +k^~vA75[z{q+tblp_gR>]41_I=sb^ty7!6M rOd}sA($v{~Bh3qeMYmc6:S%y|');
define('LOGGED_IN_SALT',   '$+5:+c*4$+DojOP${C~UijqMXy^c-U~En:OA*0&FMUq:Chqj~6oMn#/l1O-(9 s{');
define('NONCE_SALT',       'Ayh*F9^$~4dFq_% wcGQTOcagL  4A.H5Aw_f1CH(m {,o,JDvJE/[lV`;?B~OO1');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_tableless_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
