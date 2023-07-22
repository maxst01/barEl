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
define( 'DB_NAME', 'barEl' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gcJx},z.p@^a6~-0rXjAPw~is4dQ)?t nNp>Y}U@i >28k[o>nw9vM}#}uw>%GYk' );
define( 'SECURE_AUTH_KEY',  'r/C6l}]n#?V}{js[V?CsRf0UN*Ag`-`^C3a{uuO~FzOp_fy!C@U>^P<At/T:Rc]4' );
define( 'LOGGED_IN_KEY',    'b]W-JNz4%fjMglzY(.JvJo9Lz{s~;`^CW[6uy}vGoYE4yEk_N<}d`NGi5DX4(l=Z' );
define( 'NONCE_KEY',        'AicEUUohFx%oweWNG8F:9[!ga}Fjn[gzb!.a+ /;XYOq[=60Zq3d5QGRPZd+y%y+' );
define( 'AUTH_SALT',        ',<[x~Gs@A{a^ERdQTfMcc+X2nSM#C-g*QwN h3CT@QfSUc2.td0^HtrD|N%.fZcW' );
define( 'SECURE_AUTH_SALT', '}h8Ah[9r5m4{3g7VL)g/G4@bf8NE-ZX&*Dc9!K.HGVGQiJhHs,WDT[66:#Tqja?S' );
define( 'LOGGED_IN_SALT',   'x){=rcA]}KeyN@^P:|#w<Q>BO%,+fu]sn)TogDgInc61LZHn;h?<D%#^RH&)se60' );
define( 'NONCE_SALT',       '6FT$DX:S+z>6zF_RR9l@~>tz2QtN^b<1Bb;x$mRjsU_GrB<eim8nJ!WKQAyvR }5' );

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
