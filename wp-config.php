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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         '0I?|yE:AH-_bLO1(ur-Q}C{]^_h/IlT+VR qywQ#y5IcuX?=my0^+b4tqb]3#U,{' );
define( 'SECURE_AUTH_KEY',  'q;ZsC4n=#G)6@lAkd[$,7/JHsb~&)%/(5nhGxPQSs`-z-q,a#%Is~833390{-1E,' );
define( 'LOGGED_IN_KEY',    'jn^F&j{F2 `ntvNI |hD[8$+FjfI@;=lckDZ[cJyC|?va&1Q->ea_|Z4ThF3W[:F' );
define( 'NONCE_KEY',        '#QX3)n!tm/jEIlKKbrKTj7jeXkI6!%g}Q0Aj}ItTyqnNvCdzeJ+^[OxyITTzT!tG' );
define( 'AUTH_SALT',        '&!4?uWn{~DAQ#g;l=n0?DzL,FH>1l8P5|gA87X{XzS~+u[y[T^7^*T.VE:$`g$s,' );
define( 'SECURE_AUTH_SALT', ']Ejyjg$IE2vNU>|,l:$o;NB-%@|sd}4`K2KLA3,@)WN7=O:LPra/n%8ojOXzuEcq' );
define( 'LOGGED_IN_SALT',   'b*PllJ]tEN=f/%|O0QMfXpaQKKM877U6>O4DShTa$1$bjVjSia-50.I#TCOeBsvg' );
define( 'NONCE_SALT',       'TFp%tf2c*T0%qp(kZ+BA6.qb%zK,}J71ANqij^(RL=J?OhA/!Xd> roeepL?:H~T' );

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
