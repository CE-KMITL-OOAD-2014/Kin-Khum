<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  </head>
<body>
<form action= "/laravel/public/willRegister" method="post">
  <?php
  
  


  echo "name             : <input type='text' name='name' placeholder='Name'><br>";
  echo "Username         : <input type='text' name='username' placeholder='Username'><br> ";
  //echo "e        : <input type='text' name='username' placeholder='Username'><br> ";
  echo "status           : <input type='text' name='status' placeholder='Telphone Number'><br>";
  echo "Password         :<input type='password' name='password' placeholder='Password'><br> ";
 
  

  ?>
  <br>
  <input type="submit" name="subRigis" value="สมัครสมาชิก">
 </form>

</body> 
</html>