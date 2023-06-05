<?php

class Session {

    public static function create(array $data = null) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if ($data) {
            $_SESSION['user'] = $data;
        }
    }

    public static function destroy() {
        if (session_status() == PHP_SESSION_ACTIVE) {
            session_unset();
            session_destroy();
        }
    }

    public static function check() {
        if (isset($_SESSION['user']))
            return true;
    }
    

    public static function getInfo() {
        if (self::check()) {
            return $_SESSION['user'];
        }
        return null;
    }

}
