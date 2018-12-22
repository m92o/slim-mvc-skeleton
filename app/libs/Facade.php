<?php
namespace Libs;

abstract class Facade {
    protected static $container;
    protected static $resolvedInstance;

    public static function setFacadeContainer($container) {
        static::$container = $container;
    }

    public static function getFacadeRoot() {
        return static::resolveFacadeInstance(static::getFacadeAccessor());
    }

    protected static function getFacadeAccessor() {
        throw new RuntimeException('Facade does not implement getFacadeAccessor method.');
    }

    protected static function resolveFacadeInstance($name) {
        if (is_object($name)) {
            return $name;
        }
        if (isset(static::$resolvedInstance[$name])) {
            return static::$resolvedInstance[$name];
        }
        return static::$resolvedInstance[$name] = static::$container[$name];
    }

    public static function __callStatic($method, $args) {
        $instance = static::getFacadeRoot();
        if (!$instance) {
            throw new RuntimeException('A facade root has not been set.');
        }
        return $instance->$method(...$args);
    }
}