<?php
$con = mysql_connect("localhost","root","")or die("Do not connect server :".mysql_error())
//($server,$username,$password)
$selectdb("tlb_user",$con) or die("Do not choose database" . mysql_errror());
//การเข้าอักขระชุดเดียวกัน
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
?>

