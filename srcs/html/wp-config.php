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
define( 'DB_NAME', 'db_wordpress' );
/** Имя пользователя MySQL */
define( 'DB_USER', 'pdemocri' );
/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'pdemocri' );
/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );
/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );
/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );
/** Для установки плагинов - доступ к файлам без фтп */
define('FS_METHOD','direct');
/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':/t+xnGgY_.x}mOAR]5P!X:M39tX.;5.Kw{#Xt&PCY*huIORFMT4u.Er_q!`[=3f' );
define( 'SECURE_AUTH_KEY',  '4i*|j:l{dbN,MF&UZ*|}mv <e[hD$6Y97*sP) hhagq:(a.fLh>R=@xW^;x UVG&' );
define( 'LOGGED_IN_KEY',    '{gjgh&.4*+PlfT1a1Gh1kg|dv[5aXQUDH_Vb`b<yZgQsuCL=.j+[VIFF42c&5msU' );
define( 'NONCE_KEY',        'PuH/mu.ObO-`;Sxm.QF9!x0b>SvcogJJ%FxqJF:&MAmzo|#Q2Q7b)}lOti@$*@i0' );
define( 'AUTH_SALT',        'i<n~[F-B0DwY=Lz&}HH4IevE!B{24J@(eALw*YzRgWn#WG*f+:FE/!KEf(A.adT)' );
define( 'SECURE_AUTH_SALT', '*49z n-+<>0X?:/@4wzIN^d[fd#Jy&#V:rL|f$/bZbYGP 4p9; bteIb8V<-jh/k' );
define( 'LOGGED_IN_SALT',   'zAB<+P)$^1<~F+jh:L)U63Egn>/hd;%bOu:}l@wl<vP2;8{j2OHMuT9 T#OgI-^/' );
define( 'NONCE_SALT',       'G_rvLx,k7XUB@~v#w8Efj$u>_=>w=FBc^+2*q8Qe:k<&JWdewTun-r3/@cjs`n/D' );
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
