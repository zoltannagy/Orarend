<html>
<head>
<title>LMA órarend</title>
	<?php
		$adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
		$db=mysql_select_db("neptun",$adatbazis) or die("Nem sikerült csatlakozni a megadott adatbázishoz</br>");
    ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
			<img src="images/top_element_add.jpg" width="760"></img>
			<div id="addBG">
            				<form action="oratorles.php" method="post">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Óra törlése az adatbázisból:</h2></tr>
                                <select name="ora">
                                    <?php
                                    		mysql_query('SET NAMES UTF8');
                                            $eredmeny=mysql_query("SELECT osztaly.nev AS osztalynev,nap.nev AS napnev,ora.ido AS oraido,tantargy.nev AS tantargynev,tanar.nev AS tanarnev,tanterem.nev AS tanteremnev,orarend.id AS orarendid
																FROM orarend,nap,osztaly,tantargy,tanar,tanterem,ora
																WHERE orarend.osztalyid=osztaly.id AND orarend.napid=nap.id AND orarend.oraid=ora.id AND orarend.tantargyid=tantargy.id AND orarend.tanarid=tanar.id AND orarend.tanteremid=tanterem.id;");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['orarendid'].">".$r['osztalynev']." | ".$r['napnev']." | ".$r['oraido']." | ".$r['tantargynev']." | ".$r['tanarnev']." | ".$r['tanteremnev']."</option>\n";
                                                }
                                    ?>
                                </select>
                                <tr><h4><input type="image" src="images/GUI_loginnal_09.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                                
                            </form>
                            <form action="tanartorles.php" method="post">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Tanár törlése az adatbázisból:</h2></tr>
                                <select name="tanar">
                                    <?php
                                    		mysql_query('SET NAMES utf8');
                                            $eredmeny=mysql_query("SELECT * FROM tanar");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                                                }
                                    ?>
                                </select>
                                <tr><h4><input type="image" src="images/GUI_loginnal_09.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                            </form>
                            <form action="tantargytorles.php" method="post">
                                <div id="addsomething">
                                 <table>
                                <td>
                                <tr><h2>Tantárgy törlése az adatbázisból:</h2></tr>
                                <select name="tantargy">
                                    <?php
                                    		mysql_query('SET NAMES utf8');
                                            $eredmeny=mysql_query("SELECT * FROM tantargy");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                                                }
                                    ?>
                                </select>
                                <tr><h4><input type="image" src="images/GUI_loginnal_09.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                            </form>
                            <form action="szaktorles.php" method="post">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Osztály törlése az adatbázisból:</h2></tr>
                                <select name="osztaly">
                                    <?php
                                    		mysql_query('SET NAMES utf8');
                                            $eredmeny=mysql_query("SELECT * FROM osztaly");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                                                }
                                    ?>
                                </select>
                                <tr><h4><input type="image" src="images/GUI_loginnal_09.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                            </form>
                            <form action="tanteremtorles.php" method="post">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Tanterem törlése az adatbázisból:</h2></tr>
                                <select name="tanterem">
                                    <?php
                                    		mysql_query('SET NAMES utf8');
                                            $eredmeny=mysql_query("SELECT * FROM tanterem");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                                                }
                                    ?>
                                </select>
                                <tr><h4><input type="image" src="images/GUI_loginnal_09.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                             </form>
                            <form action="admintorles.php" method="post">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Admin törlése az adatbázisból:</h2></tr>
                                <select name="admin">
                                    <?php
                                    		mysql_query('SET NAMES utf8');
                                            $eredmeny=mysql_query("SELECT * FROM admin");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                                                }
                                    ?>
                                </select>
                                <tr><h4><input type="image" src="images/GUI_loginnal_09.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                            </form>
                                <div id="addsomething">      
                                <a href="admin.php"><img src="images/vissza_06.jpg" width="120"></img></a></div	>
                                </div>
			<img src="images/bottom_element.jpg" width="760"></img>
</center>

</body>
</html>