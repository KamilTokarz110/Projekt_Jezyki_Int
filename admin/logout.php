<?php

session_destroy();
session_regenerate_id();
$_SESSION = [];
header('Location: /admin');

die;