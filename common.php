<?php

// TODO: use mysqli_ or PDO

$mysqlConnection = mysql_connect("184.106.167.21","mobile","XpLhxvujNrJhjrVb");
if (!$mysqlConnection) {
    die('Could not connect: ' . mysql_error());
}
  
mysql_select_db("jqdev", $mysqlConnection) or die('Could not connect');
