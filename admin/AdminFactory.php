<?php

class AdminFactory {

    private static $instances = [];

    public static function getAdminProducto(): AdminProducto {
        return self::getOrCreateInstance(AdminProducto::class);
    }

    private static function getOrCreateInstance(string $class): Admin {
        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new $class();
        }
        return self::$instances[$class];
    }

}
