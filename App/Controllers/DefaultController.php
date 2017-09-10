<?php
namespace App\Controllers;

use Harps\Controllers\Controller;
use App\Models\DefaultModel;
use App\Managers\DefaultManager;

class DefaultController extends Controller
{
    public static function index() {
        $model = new DefaultModel();

        $model->php_version = DefaultManager::GetVersion();
        $model->current_uri = DefaultManager::GetCurrentUri();

        return self::view("default", $model);
    }
}