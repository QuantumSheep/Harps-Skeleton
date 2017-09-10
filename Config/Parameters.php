<?php
/**
 *
 * CONFIGURATION
 *
 */

define("DEV", true); // true = Complete error and exception debug | false = User oriented error and exception (Error 500)
define("MEMORY_INFO", false);
define("GET_ALL_ERRORS", false); // true = Active the full error handling | false = Desactive the full error handling



/**
 *
 * DATABASE INFORMATIONS
 *
 */

define("DB_HOST", "");
define("DB_PORT", "");
define("DB_USER", "");
define("DB_PASS", "");
define("DB_NAME", "");
define("DB_HOST_PORT", DB_HOST . ":" . DB_PORT);



/**
 *
 * SMTP INFORMATIONS
 *
 */

define("SMTP_HOST", "");
define("SMTP_USER", "");
define("SMTP_PASS", "");
define("SMTP_PORT", 587);
define("SMTP_ENCRYPT", "tls");



/**
 *
 * PATHS
 * /!\ If you change the paths, don't forget to also change the "use" and "namespace" path in all files that need to be changed
 *
 */

define("DS", DIRECTORY_SEPARATOR);

define("DIR_ROOT", dirname(dirname(dirname((new \ReflectionClass(\Composer\Autoload\ClassLoader::class))->getFileName()))) . DS);
define("DIR_APP", DIR_ROOT . "App" . DS);
define("DIR_HARPS", DIR_ROOT . "Harps" . DS);
define("DIR_CONFIG", DIR_ROOT . "Config" . DS);

define("DIR_VIEWS", DIR_APP . "Views" . DS);
define("DIR_CONTROLLERS", DIR_APP . "Controllers" . DS);
define("DIR_MANAGERS", DIR_APP . "Managers" . DS);
define("DIR_MODELS", DIR_APP . "Models" . DS);

define("DIR_BLADE_CACHE", $_SERVER['DOCUMENT_ROOT'] . DS . "Others" . DS . "Blade" . DS . "Cache" . DS);

define("DIR_EXCEPTIONS_VIEWS", DIR_VIEWS . "Exceptions" . DS);
define("FILE_ERROR_500", DIR_EXCEPTIONS_VIEWS . "500.php");
define("FILE_ERROR_500_DEV", DIR_EXCEPTIONS_VIEWS . "500-DEV.php");