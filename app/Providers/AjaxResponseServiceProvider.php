<?php
/**
 * Created by PhpStorm.
 * User: liushulong
 * Date: 19/12/2017
 * Time: 12:58 AM
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\AjaxResponse;

class AjaxResponseServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->singleton('AjaxResponseService', function () {
            return new AjaxResponse();
        });
    }
}