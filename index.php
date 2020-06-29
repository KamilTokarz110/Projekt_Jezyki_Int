<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require 'config.php';
require 'lib/db.php';
require 'lib/functions.php';

$db   = new DB(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);


echo 111;
die;