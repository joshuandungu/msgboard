<?php 
// This creates a connection to theforumdb database and to MySQL, 
// It also sets the encoding.
// Set the access details as constants:
$DB_USER ="root";
$DB_PASSWORD = "";
$DB_HOST = "localhost";
$DB_NAME = "theforumdb";

// Make the connection:
$dbcon = @mysqli_connect ($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbcon, 'utf8');