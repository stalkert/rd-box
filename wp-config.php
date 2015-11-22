<?php
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
define('DB_NAME', 'rdbox');

/** Имя пользователя MySQL */
define('DB_USER', 'admin-rdbox');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12345');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<vh-A7Sx^{~UK8sPNsE;XXjDI1UUXLRG;WRbzUUI9,hqaFOG5Yv~KNt)wNcvwpcN');
define('SECURE_AUTH_KEY',  '2vornJ.m)+xpv8:R)-z)O+4%| `)*%Ot!d7~XSo_iW|weZYmib|+ZA~E83nh}[?T');
define('LOGGED_IN_KEY',    'vh-(Y|)(m0<j>+EUJ]3Nq^_!*]j-PirAf_ .i|=cH$cin`VQ:`<4krX--2Aya0 W');
define('NONCE_KEY',        'tywa;Eg( %5(QcQFt?C8)C0>I&?Lxq>HDh/@rH8p-4aiX{y&*# 0}|p[s_AzjcWS');
define('AUTH_SALT',        '!:{)3D>Ky]52| VxaT`<;/![jlI:R*upyeni|g!IE[}aaBny=Isj>Io_|T)|Pt9t');
define('SECURE_AUTH_SALT', 'KT6|C-N!NDQfr>i1iRj@oLlT:>Kqoo-+!J(=+U%+R+R(!Kfgt.{t8P_JF*xVa{tx');
define('LOGGED_IN_SALT',   'xF;|,[w6ni(/|m`s>79l~B)i#4nda-#Os3en C|8Y0?jO~ioa7-]$YYE/K-SD^u^');
define('NONCE_SALT',       'TTfOit@LE&YtR_pinp[t)Df+U#g4*DKHlKko4qVa^D&8@jXt(8Fx ihY<KXa+KoT');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
