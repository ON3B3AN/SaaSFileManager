<?php
//Sourced from: https://www.webhostinghero.com/wordpress-authentication-integration-with-php/

/*** PREVENT THE PAGE FROM BEING CACHED BY THE WEB BROWSER ***/header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

require_once("wp-authenticate.php");

/*** LOG OUT CURRENT USER ***/if($_GET['logout'] == 'true')
   wp_logout();

/*** IF THE FORM HAS BEEN SUBMITTED, ATTEMPT AUTHENTICATION ***/if(count($_POST) > 0)
   authenticate();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Control Panel</title>
</head>
<body>
<form action="login.php" method="post">
   <?php
   if(count($_POST) > 0)
      echo "<p>Invalid user name or password.</p>";
   ?>
   <input type="text" autocomplete="off" placeholder="Username" name="username"/>
   <input type="password" autocomplete="off" placeholder="Password" name="password"/>
   <label><input type="checkbox" name="remember" value="1" />Remember me</label>
   <button type="submit" value="Submit">Submit</button>
    <br><br>
    <h1>If you are seeing this page, it means you did not authenticate with our Single Sign On Server</h1>
    <h2>Please visit: <a href="http://34.66.197.240/wordpress/">34.66.197.240/wordpress</a> to obtain an account</h2>
</form>
</body>
</html>
