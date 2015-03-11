<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u297742923_sedaj');

/** Имя пользователя MySQL */
define('DB_USER', 'u297742923_wagyd');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'baTuXuNaHy');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'aV)cH~-}d{Pk=`g+{Fa)Nti#!Tk.3!D0 02Lz|!>b[!J~/p&,$%zUC$H|&ZEq>Lf');
define('SECURE_AUTH_KEY',  'WR,3ovYt+X)-X6.q)HbN4NXN8-@KGRJ%w2!pYY#q;><u`yCR+gsDUMu4eaFzr|f}');
define('LOGGED_IN_KEY',    'I]f)vH)@1Kw.(Mg<--r<J9Yb]lNGna`x;QwgX0H_7[A0L0;7u=0p7LDt{aY}+k_+');
define('NONCE_KEY',        ')?2Fq/RSSi1*c!q$6&b`R|Tox#jlo?eS40ZnOY:F@PKCtbc835MJW%0VI46`S5N]');
define('AUTH_SALT',        'i(_KK4aX!(B<A)H4I{tD/=o7kZeoW/9j^JA|Vz3d/ _7=YjGKI-pVJ7wY+)HLH39');
define('SECURE_AUTH_SALT', '-*,`#DS1s4XnrYHV63i-`jYW1r+rgier6nu:h7JgE4{#&UrW:4aD-.?nizmB,|a@');
define('LOGGED_IN_SALT',   'h:9=r>4O2U@f)8c&3z~U-*Z|J_]h+)poy% ^30}2h$/D/gC90IROkB?<?#~<6ig.');
define('NONCE_SALT',       'QC[q_kyRzXfkb~J9t`~O^~tBQs6b}gy4T_B|B(/l5N[r;W6dV<8&8raD|E,HV!=F');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'rf_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
