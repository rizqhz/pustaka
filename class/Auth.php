<?php

require_once 'Database.php';

class Auth {

    private static $db = null;

    public static function login(array $data) {
        unset($_POST['login']);
        self::$db = new Database();
        [$user, $pass] = [$data['username'], $data['password']];
        $result = self::$db->table('users')
                           ->where('username', "'$user'")
                           ->first();
        if ($result) {
            if (password_verify($pass, $result['password'])) {
                Session::create($result);
                header('location:index.php');
                return;
            }
            echo "<script>alert('Password salah!')</script>";
            return;
        }
        echo "<script>alert('Username tidak terdaftar!')</script>";
    }

    public static function logout() {
        if (Session::check()) {
            Session::destroy();
            header('location:index.php');
        }
    }

    public static function register() {
        self::$db = new Database();
    }

}
