<?php

// TODO: use mysqli_ or PDO

$mysqlConnection = mysql_connect("184.106.167.21","root","ZanzibaR1");
if (!$mysqlConnection) {
    die('Could not connect: ' . mysql_error());
}
  
mysql_select_db("jqdev", $mysqlConnection) or die('Could not connect');
