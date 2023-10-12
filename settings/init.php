<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "1"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "books";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "mysql97.unoeuro.com";
    $DB_NAME = "julieisager_dk_db";
    $DB_USER = "julieisager_dk";
    $DB_PASS = "gG4tFrmwx5HhAab3pz6B";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);