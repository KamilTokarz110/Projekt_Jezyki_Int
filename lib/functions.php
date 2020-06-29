<?php

function alert($type, $text) {
	if($type == 1) {
		echo '<div class="alert alert-success"><strong>Sukces:</strong> '.$text.'</div>';
	} else {
		echo '<div class="alert alert-danger"><strong>Błąd:</strong> '.$text.'</div>';
	}
}

function pre_dump($var) {
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function redirect($url) {
	header('Location: '.SERVER_URL.'/'.$url);
}

function deleteSubject($id) {
	global $db;	
}