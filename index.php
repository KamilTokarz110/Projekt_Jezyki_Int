<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require 'config/config.php';
require 'lib/db.php';
require 'lib/functions.php';

$db        = new DB(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$aAbout    = $db->select_multi('SELECT * FROM ABOUT');
$skills    = $db->select_multi('SELECT * FROM SKILLS');
$hobby     = $db->select_multi('SELECT * FROM ITEMS WHERE TYPE = "HOBBY"');
$work      = $db->select_multi('SELECT * FROM ITEMS WHERE TYPE = "JOB"');
$education = $db->select_multi('SELECT * FROM ITEMS WHERE TYPE = "WORK"');
$about     = [];

foreach ($aAbout as $val) {
	$about[$val['CODE']] = $val['VALUE'];
}

require 'page.php';