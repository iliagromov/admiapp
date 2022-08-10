<?php
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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'admiral_local' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'TI?}%,4^4*L]w?b#,,hyNJ]YaVwY5eBzNY129+L|F@#A =xW_,q<l:Hdz;p E?c,' );
define( 'SECURE_AUTH_KEY',  'YmX|Fna=5>7]bK:T k3dJLYtKv0P}G hmC5cCx.lV7@A>r@fX9ThB=|Fb(jQ@fnm' );
define( 'LOGGED_IN_KEY',    'c$9k&zwQy`Mv^%&E>otg^ZOi0OJ[~J{kSa89Kwnv)u/6=bGutaT;rU=0=,uiZZf?' );
define( 'NONCE_KEY',        'JONqo0s!:v7jL,JG}L<Xa|}dB`v#]Lc%QuSp^XFrzN[0KK[0;k^][7Z`G:UF}lvU' );
define( 'AUTH_SALT',        '.( Zx3=qo9HmwA7iomYz.9|C!A/,Y<:*`|b&Q<_p_920T)*RljAWnDYlSD-ksJtb' );
define( 'SECURE_AUTH_SALT', 'iI_$4>LwG1~:`&]3q(d#>U6fZGLVbd;:dXW4GYfZss(!tpm<D^$N}]]<na7}A|z[' );
define( 'LOGGED_IN_SALT',   '`,Ic^!jSaTLK;N7;97l=YSsvdNvOcl+)W>i1#q}_g-o6+hH,vrJ1w..T=;T?9U4M' );
define( 'NONCE_SALT',       '3#<]zTYhu-bYK=dfn9Hr2#+(Pjz#.M+>&ZSbmW,!1Gqi`e@@_ti=s^Fl.`8:3k{g' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wpa_';

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
