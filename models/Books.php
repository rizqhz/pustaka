<?php

require_once 'lib/Database.php';

class Books {
    
    private static $db = null;

    public function __construct() {
        if (!self::$db) {
            self::$db = new Database();
        }
    }

    private static function check(array $data) {
        $message = "<script>alert('Data yang diinput tidak sesuai')</script>";
        foreach ($data as $key => $val) {
            if (empty($val)) {
                echo $message;
                return false;
            }
        }
        return true;
    }

    public function get() {
        return self::$db->table('books')
                        ->select()
                        ->get();
    }

    public function getById(int $id) {
        return self::$db->table('books')
                        ->select()
                        ->where('id', $id)
                        ->get();
    }

    public function add(array $data) {
        unset($data['submit']);
        if (!self::check($data)) {
            return;
        }
        if (!empty($_FILES['sampul'])) {
            $image = $_FILES['sampul']['tmp_name'];
            $format = explode('/', $_FILES['sampul']['type'])[1];
            $filename = substr(hash('sha256', time()), 0, 10).date('dmy').".$format";
            move_uploaded_file($image, "../../storage/$filename");
            $data['sampul'] = $filename;
        }
        $res = self::$db->table('books')
                        ->insert($data);
        return $res;
    }

    public function edit(int $id, array $data) {
        unset($data['submit']);
        if (!self::check($data)) {
            return;
        }
        if (!empty($_FILES['sampul'])) {
            $image = $_FILES['sampul']['tmp_name'];
            $filename = $data['sampul'];
            move_uploaded_file($image, "../../storage/$filename");
        }
        $res = self::$db->table('books')
                        ->where('id', $id)
                        ->update($data);
        return $res;
    }

    public function destroy(int $id) {
        $res = self::$db->table('books')
                        ->where('id', $id)
                        ->delete();
        return $res;
    }

}
