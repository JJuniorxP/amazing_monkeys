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
define( 'DB_NAME', 'amz_monkeys_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'user_amz_db' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '[JJ]10011998' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'amz-monkeys-db.mysql.uhserver.com' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'o@?P{gGVUKG:D?dv;o8VN4W/KXZ>x{)# !]4FEI<e)f06C7DL@m6|:J:DE?rO6)e' );
define( 'SECURE_AUTH_KEY',  'xq7r$@b{m$PXf[1=1s[_X%?k9>7)qY$MzrGYh1n6Wf4<7s]Slz,eqfAm7]/&m?Me' );
define( 'LOGGED_IN_KEY',    '0E1PNy|9&c!d^,Nz!axd$1jA@Y+F/Kn.ZXu:_B4y N5Rori+Q*9_KNIrz`#T/d`w' );
define( 'NONCE_KEY',        ' Ca`05vc5$dv[uiawz1x2`%rg+o,^z~R9Cx|bVdjZMnsS$Mi6%@J}&^erP8snwuB' );
define( 'AUTH_SALT',        'A^vx[|3@tB1!KMTDtY?!g^i@u5IA4KM25#bcN}7P5[MPmpB68<T5m]F1-lpfR4f0' );
define( 'SECURE_AUTH_SALT', 'pc-Kp!k=*in.aSRxgaO]fco)~q1Te^qFY/O8%&]nzIxw`xnkMe+gssm#C7IM}O9b' );
define( 'LOGGED_IN_SALT',   'No.a[-G@O-i5;%rzf(*S`B`4[)Y_+)IPty~.1L.3SYTIhHYBE{lVe|4hmC$M4C,,' );
define( 'NONCE_SALT',       ')V)mI*[DyRq%9}Zc60>8Q6|-uqRdouH*;a7${{KXV<<}rDq-5|1w%{c{(b$m{xTS' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
