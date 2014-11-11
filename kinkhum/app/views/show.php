<?php
include("config.php");
?>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>สมัครสมาชิก</title>

 <?php

 $strUser=$_POST['txt_user'];
 $strFirstname=$_POST['txt_firstname'];
 
 $strPassword=$_POST['txt_pwd'];

$sql_sel="SELECT * FROM `member`  WHERE username =  '$strUser'";
$result_sql=mysql_query($sql_sel);
$num_rows=mysql_num_rows($result_sql);

$sql_pass="SELECT * FROM `member`  WHERE password =  '$strPassword'";
$result_pass=mysql_query($sql_pass);
$num_pass=mysql_num_rows($result_pass);


if($num_rows>=1){


	echo"Username สมัครสมาชิกได้";

}
else{

	$sql_insert="INSERT INTO `$db_name`. `member`(`username`, `firstname`, `surname`, `password`) VALUES ('$strUser','$strFirstname','$strSurname','$strPassword')";
	$sql_result=mysql_query($sql_insert);
	//echo $sql_insert;
	echo"สมัครได้แล้วเย่";
}


 ?>
  
<br></br>
<a href="member_insert.php"></a>
  