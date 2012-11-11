<html>
<head>
<title>LMA órarend</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-2">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <?php
                    $adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
                    $db=mysql_select_db("neptun",$adatbazis) or die("Nem</br>");
    ?>
<center>
			<img src="images/top_element_admin.jpg" width="760"></img>
			<center>
			<div id="header">
            
            <table cellspacing="10" >
            <tr>
            <td><div id="header_sav_admin"></div><img src="images/orarend_06.gif"></img></td>
            <td><a href="hozzaadas.php"><img src="images/GUI_06.jpg"  width="120"></img></a></td>
            <td><img src="images/GUI_08.jpg" width="120"></img></td>
            <td><img src="images/GUI_10.jpg" width="120"></img></td>
            <td><img src="images/GUI_03.jpg" width="120"></img></td>
            </tr>
    
            </table>
            </div>

            </center>
			<div id="appbg" align="center">
			<div id="tablazatBG">
            </div>
            </div>
            <img src="images/bottom_element.jpg" width="760"></img></br>
            <a href="index.php">Vissza az Index-re</a>
</center>

</body>
</html>