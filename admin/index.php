<?php

session_start();

require '../config/config.php';
require '../lib/db.php';
require '../lib/functions.php';

$db = new DB(DB_HOST, DB_USER, DB_PASS, DB_NAME);


$page     = (string) $_GET['page'];
$template = 'main.php';
$aUser    = $_SESSION['user'];
$isLogged = false;

if (empty($aUser) === false) {
	$isLogged = true;
}

if ($page === '' && $isLogged === false) {
	require 'login.php';
	exit;
}

if ($page !== '') {
	$template = $page.'.php';
}

require 'header.php';
require $template;
require 'footer.php';