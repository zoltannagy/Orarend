<html>
<head>
<title>LMA órarend</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <?php
        $adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
        $db=mysql_select_db("neptun",$adatbazis) or die("Nem sikerült csatlakozni a megadott adatbázishoz</br>");
    ?>
<center>
            <img src="images/top_element_regular.jpg" width="760"></img>
			<center><div id="header" style="height:500px;">
            <br/><br/>
            <table>
            <tr>
            <div id="addsomething">
            <h4>Kérem válassza ki az alábbi listából azt az osztályt,amelyiknek meg szeretné tekinteni az Órarendjét!</h4>
            <form action="orarendelonezet.php" method="post">
            <select name="osztalyid">
                                    <?php
											mysql_query('SET NAMES utf8');
									        $eredmeny=mysql_query("SELECT * FROM osztaly");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id'].">".$r['nev']."</option>\n";
                                                }
                                    ?>
                                    </select>
            <center><h4><input type="image" src="images/GUI_loginnal_11.jpg" width="120"/></h4></center>
            </form>
            </div>
            </tr>
            </table>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
         	<div id="addsomething">      
                                <a href="admin.php"><img src="images/vissza_06.jpg" width="120"></img></a></div	>
            </div>
             </center>
			
            
            
            <img src="images/bottom_element.jpg" width="760"></img></br>
            <a href="index.php">Vissza az Index-re</a>
</center>

</body>
</html>