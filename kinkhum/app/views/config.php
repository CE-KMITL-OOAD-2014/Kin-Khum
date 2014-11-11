<?php
$host="localhost";//127.0.0.1
$user="root";
$password="root";
$db_name="database_user";
$conn=mysql_connect($host,$user,$password);
$conn_db=mysql_select_db($db_name);
mysql_query("SET NAME ulf8;");
if(!$conn_db){
	echo "No select database name {$db_name}";

}

?>