<?php

function open_database_connection() {
	$dbh = new PDO("mysql:host=localhost;dbname=blogfc", 'root', '');
	return $dbh;
}

function close_database_connection($dbh) {
	$dbh = null;
}