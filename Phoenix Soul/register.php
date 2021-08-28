<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<meta name="description" content="Welcome to the Home of "phoenix soul gaming" - This is our gateway to loyal fans keep you updated on upcoming projects!">
<meta name="keywords" content="Phoenix soul gaming, blaze the soul, harambe justice, serenity chronicles, worlds collide, animation, computer, video games, anime" />
<link href="images/fav_icon.png" rel="shortcut icon" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #333;
}
</style>
</head>

<body>
<div class="container">
  <div class="header"><img src="images/header.png" width="952" height="240" alt="Phoenix Soul Header" />
    <div class="menu"><a href="index.html"><img src="images/home 2 edit.png" alt="home" width="220" height="53" border="0" /></a><a href="projects.html"><img src="images/projects edit.png" alt="projects" width="220" height="53" border="0" /></a><a href="about_us.html"><img src="images/about edit.png" alt="about" width="220" height="53" border="0" /></a><a href="contact_us.html"><img src="images/contact 2 edit.png" alt="contact" width="220" height="53" border="0" /></a></div>
  </div>
 <div class="content">
   <h1>Register</h1>
   <p>&nbsp;</p>
   <p><a href="unsubscribe.php">unsubscribe</a>: </p>
   <form action="register.php" method="get" name="register">
Full Name: <input name="fullname" type="text" /><br/>
<hr/>
<p>Account Details: </p>
<table width="282" border="0" align="center">
  <tr>
    <td width="92">Username: </td>
    <td width="174"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td>E-mail:</td>
    <td><input name="email" type="email" /></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input name="password" type="password" /></td>
  </tr>
</table>
<hr/>

Gender M/F: <input name="gender" type="text" /><br/>

<hr/>

 <input name="" type="submit" value="Submit Form" />
<input name="" type="reset" value="Reset Form" />

 
</form>

  <?php

     extract($_REQUEST);

     if ( isset($fullname)) {
          $link = mysqli_connect("localhost", "cgf13stp", "Password1", "cgf13stp" );
		  mysqli_query($link, "GRANT ALL PRIVILEGES ON *.* TO 'cgf13stp'@'193.61.191.117'");

/* check connection */
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
          //mysqli_query($link, "INSERT INTO `phoenix soul` (`Full_Name`, `Username`, `Email`, `Password`,`Gender`) VALUES ('$fullname', '$username', '$email','$password', '$gender')" );
          
		mysqli_query($link, "DELETE FROM `phoenix soul` WHERE `Username`='$username' and 'Password' ='$password' " );
			
mysqli_close($link);
       }

   ?>


  
  </div>
  <div class="footer">
    <p> Phoneix Soul Gaming @ 2017</p>
    <p>Company Content Trademark</p>
  </div>
</div>
</body>
</html>
