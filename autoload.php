<?php

spl_autoload_register(function ($name) {
    require_once "class/$name.php";
});

Session::create();
