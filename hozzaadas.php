<html>
<head>
<title>LMA órarend</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
			<img src="images/top_element_add.jpg" width="760"></img>
			<div id="addBG">
            
                            <form action="tanarhozzaad.php" method="post">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Tanár hozzáadása az adatbázishoz:</h2></tr>
                                <tr><h3>Név előtag:<input type="text" name="nev_elotag"size="10" placeholder="Név előtag"></input></h3></tr>
                                <tr><h3>Vezetéknév:<input type="text" name="vezeteknev"size="30" placeholder="Vezetéknév"></input></h3></tr>
                                <tr><h3>Keresztnév:<input type="text" name="keresztnev"size="30" placeholder="Keresztnév."></input></h3></tr>
                                <tr><h3>Felhasználói név:<input type="text" name="felhasznalonev"size="50" placeholder="Felhasználói név(Maximum 50 karakter!)."></input></h3></tr>
                                <tr><h3>Jelszo:<input type="password" name="jelszo"size="30" placeholder="Jelszó(Maximum 12 karakter!)."></input></h3></tr>
                                <tr><h4><input type="image" src="images/GUI_06.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                            </form>
                            <form action="tantargyhozzaad.php" method="post">
                                <div id="addsomething">
                                 <table>
                                <td>
                                <tr><h2>Tantárgy hozzáadása az adatbázishoz:</h2></tr>
                                 <tr><h3>Név:<input type="text" size="45" name="tantargy" placeholder="Kérem írja ide a tantárgy nevét."></input></h3></tr>

                                <tr><h4><input type="image" src="images/GUI_06.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                            </form>
                            <form action="szakhozzaad.php" method="post">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Szak hozzáadása az adatbázishoz:</h2></tr>
                                <tr><h3>Név:<input type="text" size="45" name="szak" placeholder="Kérem írja ide a szak nevét."></input></h3></tr>

                                <tr><h4><input type="image" src="images/GUI_06.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                            </form>
                            <form action="tanteremhozzaad.php" method="post">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Tanterem hozzáadása az adatbázishoz:</h2></tr>
                                <tr><h3>Név:<input type="text" size="45" name="tanterem" placeholder="Kérem írja ide a tanterem nevét."></input></h3></tr>

                                <tr><h4><input type="image" src="images/GUI_06.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                             </form>
                            <form action="adminhozzaad.php" method="post">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Admin hozzáadása az adatbázishoz:</h2></tr>
                                <tr><h3>Név:<input type="text" name="nev" size="30" placeholder="Kérem írja ide az Admin nevét."></input></h3></tr>
                                <tr><h3>Felhasználói név:<input type="text" name="felhasznalonev"size="50" placeholder="Felhasználói név(Maximum 50 karakter!)."></input></h3></tr>
                                <tr><h3>Jelszo:<input type="password" name="jelszo"size="30" placeholder="Jelszó(Maximum 12 karakter!)."></input></h3></tr>
                                <tr><h4><input type="image" src="images/GUI_06.jpg" width="120"/></h4></tr>
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