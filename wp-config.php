<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('WP_HOME','https://club-admiral.com/');
define('WP_SITEURL','https://club-admiral.com/');
define( 'FS_METHOD', 'direct' );

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cu41050_dev' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'cu41050_dev' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Admiral12345' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6|(mX?q2lzy7*)=WIe=(Cz;M%:]En?ZvCDT>>+nW1nBE^l6K@f?AoVGP$tuL-@#e' );
define( 'SECURE_AUTH_KEY',  'g>X8h{88Vu:4/]4king{8oP3gSG7fy%S#sZyR>?r1B0p`%#IE;%k6|RU|wE*-K%*' );
define( 'LOGGED_IN_KEY',    'DN otJ%(B1=s 2Bf<.Gm@TY[,@)4z-|o4g!&NM-tumi1)07a:k@wBh}EMdyqw&<!' );
define( 'NONCE_KEY',        '4 j4TdN(.{U4L5>i)?,G4$%S;kU$S}/>I tG~[{/8evl2A7HxY7doU<.sSO_/%+0' );
define( 'AUTH_SALT',        'a.~#nOxL.8_p@b7|wjEx^~@[X~IK!@WCGe{L:y)su,cg?4EbFJX$^=LQ$N>0]b;~' );
define( 'SECURE_AUTH_SALT', 'dzW-E&JiuiU{z/|7g@l^g#X>}H7Z3QZ>E8Hn, (*kdSDfB-A zV32C!Hz{P >H}A' );
define( 'LOGGED_IN_SALT',   '3Iu~*s=;2*ghrN57JA+!+WT^I|SXFUTO3i8oR}?O2--e3%035ni/<Q7}Q|A@3P*{' );
define( 'NONCE_SALT',       'm=}XFle)/{J>$`E;&`Si3-/WaHS@=H}d/o[!SCem`_?Z|kJ;>q&dZqwLyru(dw8D' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ca_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
