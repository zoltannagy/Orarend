<?php
session_start();
require 'Classes/class.Session.php';
require 'Classes/class.Login.php';
$database = new mysqli('localhost', 'root', '', 'neptun');
// Ha a post ki van töltve...
if(isset($_POST['loginsubmit'])){
    // ...példányosít egy új $login-t...
    $login = new Login($database, $_POST['username'], $_POST['password']);
    // ...majd meghívja a login() metódust!
	$_SESSION['user'] = $_POST['username'];
    $login->Login();
}
	
//owned-Zimb//
//owned-end//
/*
$s1 = new Session('Username', '');
$s2 = new Session('Password', '');
$s1->delete();
$s2->delete();
 * 
 */
?>
<html>
<head>
<title>LMA órarend</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
			<img src="images/top_element_login.jpg" width="760"></img>
			<div id="addBG">
            <div id="addsomething">
            <form name="login" method="post" action="">
            <table>
	 	    <tr><td colspan="2">
            <center>Adja meg felhasználónevét és jelszavát!</center>
            </td></tr>
            <?php if(isset($login) && $login->hasError()): ?>
                <tr>
                    <td colspan="2"><?php echo $login; ?></td>
                </tr>
            <?php endif ?>
            <td colspan="2">
            <center></br>Név:<input name="username" type="text" size="30" placeholder="Felhasználónév"></input></center>
            <center>Jelszó:<input name="password" type="password" placeholder="Jelszó" size="30"></input></center></br></td>
            
            <tr>
            <td><h3><input name="loginsubmit" type="submit" value="Bejelentkezés"/></h3></td>
            <td><h3><a href="diakfelulet.php"><INPUT TYPE="button" Name="redirect" VALUE="Vissza"></a></h3></td>
            </tr>
            </table>
                </form>
			</div>
            </div>
      
            <img src="images/bottom_element.jpg" width="760"></img><br/>
            
</center>


</body>
</html>