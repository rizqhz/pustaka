<?php

require_once 'Database.php';

class Auth {

    public static function login(array $data) {
        unset($_POST['login']);
        $db = new Database();
        [$user, $pass] = [$data['username'], $data['password']];
        $result = $db->table('users')
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

    public static function register(array $data) {
        unset($data['register']);
        $db = new Database();
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $res = $db->table('users')->insert($data);
        if ($res) {
            header('location:auth.login.php');
        } else {
            echo "<script>alert('Gagal registrasi!')</script>";
        }
    }

}
