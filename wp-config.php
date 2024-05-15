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
define( 'DB_NAME', 'CosmeticGoods' );

define('WPLANG', 'ru_RU');

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$.Uk,;G?$uv%:jE=jPuPgefa6/TR%Ml a]N4%=t^JG($eR!V*J~g>gt]hc?&2X)s' );
define( 'SECURE_AUTH_KEY',  'DdmOg-%7hAr1v&F)?^p0cIuj=o-w#,6r9k7HUxiue&t`iDtZ|Z]~<HV-q]KWhsRL' );
define( 'LOGGED_IN_KEY',    '&=3FEy;>S~ECv`&iFCQ%8sN/h5|q3~POp;~Wg.3 ..pKZ[jy#^uL2>3BA>$l)[Uf' );
define( 'NONCE_KEY',        'Xm{9B6D?0V.pWb`c-h,F6SuAGL Q/qw_T0/zg}=vy#V{EaQX^1jtUPO@=Ta}tGY.' );
define( 'AUTH_SALT',        'jIlT9!NH?3LN#)uJZ0w1m4 Tyu*S:&_R:`!Sh.:h{VjWz9ID{}e%/E,dCDA15[$N' );
define( 'SECURE_AUTH_SALT', 'e?|<<Y%php_f_h%(Z-Vn>|]~NJLpD^/|T)avJ>?BOM|!*^&VUI/1BWa17p)^tXv)' );
define( 'LOGGED_IN_SALT',   'e}HW#`C$ydB_lxFf.pee81#N.&Eiy-._u~(b7p_n;gQ;Pt*hMQzesn5$Q=Duf<*:' );
define( 'NONCE_SALT',       '*6fe!@o=pY=`zB9p1MD.;vOm>h.+2m1J:.wwl,-~DbMd3h4Q^Zue#zPsf$n2r@6J' );

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
