<?php

// TODO: use mysqli_ or PDO
return;
$con = mysql_connect("184.106.167.21","root","ZanzibaR1");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
  
mysql_select_db("jqdev", $con) or die('Could not connect');
