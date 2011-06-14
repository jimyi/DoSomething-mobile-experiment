<?php

// Database configuration details
$database = array(
    'hostname' => '184.106.167.21',
    'username' => 'mobile',
    'password' => 'XpLhxvujNrJhjrVb',
    'database' => 'jqdev'
);

// Connect to the database using PDO.  Do not modify below.

// Well, I guess you could modify it if you want to.  You might want to change that
// "Could not connect to database message."  Maybe display a sad face instead.
try {
    $db = new PDO('mysql:host=' . $database['hostname'] . ';dbname=' . $database['database'], $database['username'], $database['password']);
} catch (PDOException $e) {
    echo 'Could not connect to database.';
    exit;
}
