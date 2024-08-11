<?php

class Params {
    public static $frontend;
    public static $backend;
    public static $common;

    public static function init() {
        self::$frontend = 'https://vuvuvuvvv-professional.com';
        self::$backend = 'https://admin.vuvuvuvvv-professional.com';
        self::$common = 'https://common.vuvuvuvvv-professional.com';
    }
}

Params::init();
