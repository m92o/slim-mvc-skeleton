<?php
namespace Libs;

use Libs\Facade;

class Log extends Facade {
    protected static function getFacadeAccessor() {
        return 'logger';
    }
}