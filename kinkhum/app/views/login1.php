<?php
session_start();
include 'config.php';

$login = $_POST['login'];

$sql = "SELECT * FROM member WHERE username = '$login[username]'AND password ='$login[password]' ";

$result = mysql_query($sql);
$rs = mysql_fetch_array($result);

if(!empty($rs)){
	echo "Hello User";
	$_SESSION['users'] = $rs;

}
else{
	echo "Error: username or password <a href='login.php'>";
}

?>
