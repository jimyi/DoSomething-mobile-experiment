<?
$con = mysql_connect("localhost","root","ZanzibaR1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  mysql_select_db("jqdev", $con) or die('Could not connect');
  
  ?>