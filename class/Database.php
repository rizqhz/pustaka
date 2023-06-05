<?php

require_once 'Config.php';

class Database {

    protected static $handler = null;

    protected static $query = null;
    protected static $table = null;

    public function __construct() {
        [$host, $name, $user, $pass] = array_values(Config::$DB);
        self::$handler = new mysqli($host, $user, $pass, $name);
        if (self::$handler->connect_errno) {
            echo "<h2>Failed to connect to MySQL.</h2>";
            echo self::$handler->connect_error;
            echo "<br />";
        }
    }

    public function __destruct() {
        self::$handler->close();
    }

    public function table(string $table) {
        self::$table = $table;
        self::$query = "SELECT * FROM $table";
        return $this;
    }

    public function select(...$params) {
        $buffer = "";
        foreach ($params as $str) {
            $buffer .= ", $str";
        }
        $buffer = substr($buffer, 2);
        if (!empty($buffer)) {
            self::$query = str_replace('*', $buffer, self::$query);
        }
        return $this;
    }

    public function where($column, $value = null, $operator = null) {
        $buffer = " WHERE ";
        if (is_array($column)) {
            foreach ($column as $key => $val) {
                $buffer .= "$key = $val AND ";
            }
            self::$query .= substr($buffer, 0, -5);
            return $this;
        }
        if (is_null($operator)) {
            self::$query .= "$buffer $column = $value";
        } else {
            self::$query .= "$buffer $column $operator $value";
        }
        return $this;
    }

    public function orderBy($column, $mode = 'ASC') {
        $buffer = " ORDER BY ";
        if (is_array($column)) {
            foreach ($column as $key => $mode) {
                $buffer .= "$key $mode, ";
            }
            self::$query .= substr($buffer, 0, -2);
            return $this;
        }
        self::$query .= $buffer."$column $mode";
        return $this;
    }

    public function groupBy(string $column) {
        $buffer = " GROUP BY $column";
        self::$query .= $buffer;
        return $this;
    }

    public function join($table, $mode, $key, $refkey) {
        [$a, $b] = [self::$table, $table];
        $buffer = " $mode JOIN $table ON $a.$key = $b.$refkey";
        self::$query .= $buffer;
        return $this;
    }

    public function innerJoin($table, $key, $refkey) {
        $this->join($table, 'INNER', $key, $refkey);
        return $this;
    }

    public function leftJoin($table, $key, $refkey) {
        $this->join($table, 'LEFT', $key, $refkey);
        return $this;
    }

    public function rightJoin($table, $key, $refkey) {
        $this->join($table, 'RIGHT', $key, $refkey);
        return $this;
    }

    public function get() {
        $res = self::$handler->query(self::$query);
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public function first() {
        self::$query .= " LIMIT 1";
        $res = self::$handler->query(self::$query);
        return $res->fetch_assoc();
    }

    public function insert(array $data) {
        self::$query = str_replace('SELECT * FROM', 'INSERT INTO', self::$query);
        [$col, $val] = [null, null];
        foreach ($data as $k => $v) {
            $col .= ", $k";
            $val .= ", '$v'";
        }
        [$col, $val] = [substr($col, 2), substr($val, 2)];
        self::$query .= " ($col) VALUES ($val)";
        $res = self::$handler->prepare(self::$query) or die('error');
        return $res->execute();
    }

    public function update(array $data) {
        self::$query = str_replace('SELECT * FROM', 'UPDATE', self::$query);
        $str = null;
        foreach ($data as $k => $v) {
            $str .= ", $k = '$v'";
        }
        $str = substr($str, 2);
        $pieces = explode('WHERE', self::$query);
        self::$query = $pieces[0]." SET $str WHERE ".$pieces[1];
        $res = self::$handler->prepare(self::$query) or die('error');
        return $res->execute();
    }

    public function delete() {
        self::$query = str_replace('SELECT *', 'DELETE', self::$query);
        $res = self::$handler->prepare(self::$query) or die('error');
        return $res->execute();
    }

}
