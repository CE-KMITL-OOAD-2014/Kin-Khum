<?php
include("config.php");
?>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>สมัครสมาชิก</title>
<?php

$strUser=$_POST['username'];
 $strFirstname=$_POST['txt_firstname'];
 
 $strPassword=$_POST['txt_pwd'];

 $sql_sel="UPDATE `member` SET `firstname`=' $strFirstname',`password`='$strPassword' WHERE `username`= '$strUser'";
$result_sql=mysql_query($sql_sel);
if($result_sql){
	
	echo"แก้ไขสำเร็จ";
}else{
	echo"แก้ไขไม่ได้";

}

?>