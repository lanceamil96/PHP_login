<html>
<head></head>
<body>
<?php
echo $res;
?>
<form action="" method="POST">
<p>
<label>Username</label>
<input id="username" value="" name="username" type="text" required="required" /><br>
</p>
<p>
<label>Password</label>
<input id="password" name="password" type="password" required="required" />
</p>
  <br />
<p>
   <button type="submit" name="submit"><span>Login</span></button>
   <a href="view/reg.php">Register</a>
</p>
</form>
</body>
</html>