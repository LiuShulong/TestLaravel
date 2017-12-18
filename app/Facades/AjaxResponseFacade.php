<?php
/**
 * Created by PhpStorm.
 * User: liushulong
 * Date: 19/12/2017
 * Time: 1:00 AM
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class AjaxResponseFacade extends Facade {

    protected static function getFacadeAccessor() { return 'AjaxResponseService'; }

}