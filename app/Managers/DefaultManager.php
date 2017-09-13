<?php
namespace App\Managers;

use Harps\Utils\Database;

class DefaultManager
{
    public static function GetVersion() {
        $version = phpversion();

        return $version;
    }

    public static function GetCurrentUri() {
        $uri = (isset($_SERVER['HTTPS']) ? "https" : "http").'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        return $uri;
    }
}