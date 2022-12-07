<?php
define( 'WP_CACHE', true );

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cu41050_club' );
/** Имя пользователя MySQL */
define( 'DB_USER', 'cu41050_club' );
/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Admiral12345AvHFx4tu' );
/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );
/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );
/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );
/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JJiN.%,6u,$Iu6z9)M7HUGoC1m`>:IOmw*IhL_,5L/QFEl^^|tP{#>HBz98~7;^.' );
define( 'SECURE_AUTH_KEY',  'rm2Of/:Ib>,wjnI#^3oP  akP,]}t(;Mw)4ePV@zSZ#N]X35k/buhrTa/$|%2lTq' );
define( 'LOGGED_IN_KEY',    'EPzEgjo2|IF$LBZTl/s9mQoVz)CrAVvp:7dWCHL@n%uVA&lD{RbM(~zpbXBr(&tL' );
define( 'NONCE_KEY',        'UmyA][mr^YkjoBjxYMTi@TJRVGzvET.cZ}aaF>M`!3&ZkZwm,7:N=Rs_Wh%>492V' );
define( 'AUTH_SALT',        'uR/$}:b&9yh#%JVDD[ J0A:/PsqFTle|49EW`F@UTanE]o8B*X;QP&JE%E=H)a .' );
define( 'SECURE_AUTH_SALT', '?LO!DmWB@wH38@0D] xV?^rX TK(AC<tGyhai40NMqkfS:b9^4^r.[i_Y0[ID@?|' );
define( 'LOGGED_IN_SALT',   '`y-f18?1W?)bcR+|72+s7#^KPiMK?$#7Z_:;jK%palJ,|5(~pPo63q=q%&E,N#H~' );
define( 'NONCE_SALT',       '/Pn&Yw_kA1B:=l{KS`&y;m8,y0~aL@qy&#>jYrsRYjspTVNE2yr*!<OH)V AOD7E' );
/**#@-*/
/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';
/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
/* Это всё, дальше не редактируем. Успехов! */
/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
