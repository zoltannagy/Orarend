<?php
session_start();
$adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
$db=mysql_select_db("neptun",$adatbazis) or die("Nem sikerült csatlakozni a megadott adatbázishoz</br>");
$adminfelhnev=$_SESSION['user'];

mysql_query('SET NAMES utf8');
$eredmeny = mysql_query("SELECT * FROM admin WHERE felhasznalonev LIKE '$adminfelhnev'") or die(mysql_error());
$result=(mysql_fetch_assoc($eredmeny));

?>
<html>
<head>
<title>LMA Órarend</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
			<img src="images/top_element_admin.jpg" width="760"></img>
			<center>
			<div id="header">
            
            <table cellspacing="10" >
            <tr>
            <td><div id="header_sav_admin"></div><img src="images/orarend_06.gif"></img></td>
            <td><a href="hozzaadas.php"><img src="images/GUI_06.jpg"  width="120"></img></a></td>
            <td><a href="torles.php"><img src="images/GUI_loginnal_09.jpg"  width="120"></img></a></td>
            <td><a href="elonezet.php"><img src="images/GUI_loginnal_11.jpg"  width="120"></img></a></td>
            <td><a href="Logout.php"><img src="images/GUI_loginnal_03.png"  width="120"></img></a></td>
            </tr>
            </table>
            </div>

            </center>
			<div id="appbg" align="center">
			<div id="tablazatBG">
            <div align="center">
            		<h2>Üdvözlöm <?php echo $result['nev']; ?>!</h2><br/>
			</div>
            </div>
            </div>
            <img src="images/bottom_element.jpg" width="760"></img></br>
            
</center>

</body>
</html>