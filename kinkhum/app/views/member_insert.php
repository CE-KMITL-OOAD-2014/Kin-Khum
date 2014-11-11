<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  </head>



<body>
<form action="show.php" method="post">
	
<?php
echo "username :<input type='text' name='txt_user'><br>";
echo "firstname :<input type='text' name='txt_firstname'><br>";
echo "password :<input type='password' name='txt_pwd'><br>";
echo "repassword :<input type='password' name='txt_repwd'><br>";


?>

<input type="submit" name="subRegis" value="Register Member">
</form>
</body>
</html>