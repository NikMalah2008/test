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
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'I{}Flxj)k_An31K(vsYFHEy>[LiaTWF24PGV}](./_+$Jgh?yqznId3xjjz)blcc' );
define( 'SECURE_AUTH_KEY',  '!B(s6q4e*|#JQI1fF8{R6}=F+(rW:%n8i75jQlW8gHOvFGYLJ!OKau9k?XdY%-@&' );
define( 'LOGGED_IN_KEY',    'KPQLR.0aac*irfYX>=,N}%]wuBlb68>0b~wqSZX)i?Nqkb2]Jyt`JuUc>]TDBVVD' );
define( 'NONCE_KEY',        'blhRF{f4ewQ&XNymZ~L5RUlh?njLgQJ%QnxY/1~<M3_dv2.R3k-^}rMk3%-L]*|m' );
define( 'AUTH_SALT',        'rs?Rj8wO.vDC9Ef&QL6$OzM%%IIO2-V?Y#q!U91Iu3O-V5m<:[K;eBM>=mlKeCmN' );
define( 'SECURE_AUTH_SALT', 'WsA`z$sr~kB[acE*N}Z+Kb+qeLm EbtI+A4L/;MTZIn>f-^{e$6nyrcj{.yz!((r' );
define( 'LOGGED_IN_SALT',   '1llh(O*Ep?vPhk)AYvTx^)3<$~WaN:Wqb=Mol+X>MR%7fDxG2ZEKl3MP!Q!8t=J*' );
define( 'NONCE_SALT',       '`1TW.~-K^Uz}J(Z:Nzyzb_yO&O!,%{IG)eMYSX8f[V4Q3%|IF3 k)o9alJdYU)>R' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
