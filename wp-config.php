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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'hotel1');

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
define('AUTH_KEY',         '!o.k2I=n+WxU3=BUUNYY0XTf/q]21E{FY#uy>3rP;-*3ke1*7_CT:Utse l(?A+w');
define('SECURE_AUTH_KEY',  '@c;r~Gf; n@CcP?JEZ<3l9(=$@&`X n`#tpm*B5fol/fI<tJ`+7Ut}(q_J%zqQ9q');
define('LOGGED_IN_KEY',    'MOd2=39YV@e37^z*$.^k0Iv3-1T-*`8IM]Fj531H7c-NCZP[bJq(Y*8yI6Nse]h.');
define('NONCE_KEY',        '@%:L{+*IIchd-Zo0ZCml2WN;@>/JIR>D&j:T>,L`K0^E/cbD6bXJY*$.}7 A=E{&');
define('AUTH_SALT',        '$<6X8e6 xcc~2aGO;N`vZ]KH~4KwjsVK$KAD3=WBiabOh=Ts|lBQNRp5AfMC ^cq');
define('SECURE_AUTH_SALT', 'uNH]G}($/ar ~xCz?0BK}00c1nq%$xU}$@{%X`9+p_sfdY=dqZK! Q[+d7T;(+{u');
define('LOGGED_IN_SALT',   'A)M@7TG7}&q-[YQUUyw+eOo!s*d!FxxU>n5`!Hb&o2)]yCm|e>X+T74MvOLmAKtE');
define('NONCE_SALT',       'MN|#T_3ES $LI5m 2?W?2 ]K`0B|G(62pI5D*l[G[nQPFGxn|DuESw1DSR!ITIv5');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
