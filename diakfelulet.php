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
            <table cellspacing="10">
            <tr>
            <td><div id="header_sav"></div><img src="images/orarend_06.gif"></img></td>
            
            <td><a href="login.php"><img src="images/GUI_login.jpg" width="120"></img></a></td>
            </tr> 
            </table>
            <br/><br/><br/><br/><br/>
            <table>
            <tr>
            <div id="addsomething">
            <h4>Kérem válassza ki az alábbi listából azt az osztályt,amelyiknek meg szeretné tekinteni az Órarendjét!</h4>
            <form action="diakorarend.php" method="post">
            <select name="osztalyid">
                                    <?php
											mysql_query('SET NAMES utf8');
									        $eredmeny=mysql_query("SELECT * FROM osztaly");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                                                }
                                    ?>
                                    </select>
            <center><h4><input type="image" src="images/GUI_loginnal_11.jpg" width="120"/></h4></center>
            </form>
            </div>
            </tr>
            </table>
         	
            </div> </center>
			
            
            
            <img src="images/bottom_element.jpg" width="760"></img></br>
</center>

</body>
</html>