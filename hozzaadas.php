<html>
<head>
<title>LMA órarend</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script language="javascript">
function Tanar_Length_TextField_Validator()
	{
	if ((tanarhozzaad.tnev.value.length < 3) || (tanarhozzaad.tnev.value.length > 50))
		{
		msg = "A 'Tanár-Név' mezőbe beírt karakterek száma: " + tanarhozzaad.tnev.value.length + " karakter(ek)!\n"
		msg = msg + "Szükséges karakterek száma 3 és 50 között van!\n"
		msg = msg + "Kérjük adja meg újra a nevet!"
		alert(msg);
		tanarhozzaad.tnev.focus();
		return false;
		}
	if ((tanarhozzaad.tfelhasznalonev.value.length < 3) || (tanarhozzaad.tfelhasznalonev.value.length > 50))
		{
		msg = "A 'Tanár-Felhasználói név' mezőbe beírt karakterek száma: " + tanarhozzaad.tfelhasznalonev.value.length + " karakter(ek)!\n"
		msg = msg + "Szükséges karakterek száma 3 és 50 között van!\n"
		msg = msg + "Kérjük adja meg újra a felhasználói nevet!"
		alert(msg);
		tanarhozzaad.tfelhasznalonev.focus();
		return false;
		}
	if ((tanarhozzaad.tjelszo.value.length < 3) || (tanarhozzaad.tjelszo.value.length > 16))
		{
		msg = "A 'Tanár-Jelszó' mezőbe beírt karakterek száma: " + tanarhozzaad.tjelszo.value.length + " karakter(ek)!\n"
		msg = msg + "Szükséges karakterek száma 3 és 16 között van!\n"
		msg = msg + "Kérjük adja meg újra a jelszót!"
		alert(msg);
		tanarhozzaad.tjelszo.focus();
		return false;
		}else {return true;}
	}
function Tantargy_Length_TextField_Validator()
	{
	if ((tantargyhozzaad.tantargy.value.length < 3) || (tantargyhozzaad.tantargy.value.length > 50))
		{
		msg = "A 'Tantárgy-név' mezőbe beírt karakterek száma: " + tantargyhozzaad.tantargy.value.length + " karakter(ek)!\n"
		msg = msg + "Szükséges karakterek száma 3 és 50 között van!\n"
		msg = msg + "Kérjük adja meg újra a tantárgy nevét!"
		alert(msg);
		tantargyhozzaad.tantargy.focus();
		return false;
		}else {return true;}
	}
function Szak_Length_TextField_Validator()
	{
	if ((szakhozzaad.szak.value.length < 3) || (szakhozzaad.szak.value.length > 45))
		{
		msg = "Az 'Osztály-név' mezőbe beírt karakterek száma: " + szakhozzaad.szak.value.length + " karakter(ek)!\n"
		msg = msg + "Szükséges karakterek száma 3 és 45 között van!\n"
		msg = msg + "Kérjük adja meg újra az osztály nevét!"
		alert(msg);
		szakhozzaad.szak.focus();
		return (false);
		}else {return (true);}
	}
function Tanterem_Length_TextField_Validator()
	{
	if ((tanteremhozzaad.tanterem.value.length < 2) || (tanteremhozzaad.tanterem.value.length > 12))
		{
		msg = "A 'Tanterem-név' mezőbe beírt karakterek száma: " + tanteremhozzaad.tanterem.value.length + " karakter(ek)!\n"
		msg = msg + "Szükséges karakterek száma 2 és 12 között van!\n"
		msg = msg + "Kérjük adja meg újra a tanterem nevét!"
		alert(msg);
		tanteremhozzaad.tanterem.focus();
		return (false);
		}else {return (true);}
	}
function Admin_Length_TextField_Validator()
	{
	if ((adminhozzaad.anev.value.length < 3) || (adminhozzaad.anev.value.length > 50))
		{
		msg = "Az 'Admin-név' mezőbe beírt karakterek száma: " + adminhozzaad.anev.value.length + " karakter(ek)!\n"
		msg = msg + "Szükséges karakterek száma 3 és 50 között van!\n"
		msg = msg + "Kérjük adja meg újra a nevet!"
		alert(msg);
		adminhozzaad.anev.focus();
		return (false);
		}else {return (true);}
	if ((adminhozzaad.afelhasznalonev.value.length < 3) || (adminhozzaad.afelhasznalonev.value.length > 50))
		{
		msg = "A 'Admin-Felhasználói név' mezőbe beírt karakterek száma: " + adminhozzaad.afelhasznalonev.value.length + " karakter(ek)!\n"
		msg = msg + "Szükséges karakterek száma 3 és 50 között van!\n"
		msg = msg + "Kérjük adja meg újra a felhasználói nevet!"
		alert(msg);
		return (false);
		}else {return (true);}
	if ((adminhozzaad.ajelszo.value.length < 3) || (adminhozzaad.ajelszo.value.length > 16))
		{
		msg = "Az 'Admin-jelszó' mezőbe beírt karakterek száma: " + adminhozzaad.ajelszo.value.length + " karakter(ek)!\n"
		msg = msg + "Szükséges karakterek száma 3 és 16 között van!\n"
		msg = msg + "Kérjük adja meg újra a jelszót!"
		alert(msg);
		return (false);
		}else {return (true);}
	}
</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
			<img src="images/top_element_add.jpg" width="760"></img>
			<div id="addBG">
            				<form id="orahozzaad" name="orahozzaad" action="orahozzaad.php" method="post">
                                <div id="addsomething">
                                <table>
                                    <?php
                                        $adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
                                        $db=mysql_select_db("neptun",$adatbazis) or die("Nem sikerült csatlakozni a megadott adatbázishoz</br>");
                                    ?>
                                <td>
                                <tr><h2>Óra hozzáadása az adatbázishoz:</h2></tr>
                                <tr>
                                <select name="osztalyid">
                                    <?php
											mysql_query('SET NAMES utf8');
									        $eredmeny=mysql_query("SELECT * FROM osztaly");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id'].">".$r['nev']."</option>\n";
                                                }
                                    ?>
                                    </select>
                                </tr>
                                <tr>
                                <select name="napid">
                                    <?php
                                            mysql_query('SET NAMES utf8');
                                            $eredmeny=mysql_query("SELECT * FROM nap");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id'].">".$r['nev']."</option>\n";
                                                }
                                    ?>
                                    </select>
                                <select name="oraid">
                                    <?php
											mysql_query('SET NAMES utf8');
                                            $eredmeny=mysql_query("SELECT * FROM ora");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id'].">".$r['ido']."</option>\n";
                                                }
                                    ?>
                                    </select>
                                </tr><br/>
                                <tr>
                                <select name="tantargyid">
                                    <?php
											mysql_query('SET NAMES utf8');
                                            $eredmeny=mysql_query("SELECT * FROM tantargy");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id'].">".$r['nev']."</option>\n";
                                                }
                                    ?>
                                    </select>
                                <select name="tanarid">
                                    <?php
											mysql_query('SET NAMES utf8');
                                            $eredmeny=mysql_query("SELECT * FROM tanar");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id'].">".$r['nev']."</option>\n";
                                                }
                                    ?>
                                    </select>
                                <select name="tanteremid">
                                    <?php
											mysql_query('SET NAMES utf8');
                                            $eredmeny=mysql_query("SELECT * FROM tanterem");
                                            while($r=mysql_fetch_assoc($eredmeny)){
                                                echo "<option value=".$r['id'].">".$r['nev']."</option>\n";
                                                }
                                    ?>
                                    </select>
                                </tr>
                                <tr><h4><input type="image" src="images/GUI_06.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                                
                            </form>
                            <form name="tanarhozzaad" action="tanarhozzaad.php" method="post" onSubmit="return Tanar_Length_TextField_Validator()">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Tanár hozzáadása az adatbázishoz:</h2></tr>
                                <tr><h3>Név:<input type="text" name="tnev" size="50" placeholder="Kérem írja ide a tanár nevét."></input></h3></tr>
                                <tr><h3>Felhasználói név:<input type="text" name="tfelhasznalonev"size="50" placeholder="Felhasználói név(Maximum 50 karakter!)."></input></h3></tr>
                                <tr><h3>Jelszo:<input type="password" name="tjelszo"size="32" placeholder="Jelszó(Maximum 16 karakter!)."></input></h3></tr>
                                <tr><h4><input type="image" src="images/GUI_06.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                            </form>
                            <form name="tantargyhozzaad" action="tantargyhozzaad.php" method="post" onSubmit="return Tantargy_Length_TextField_Validator()">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Tantárgy hozzáadása az adatbázishoz:</h2></tr>
                                <tr><h3>Név:<input type="text" name="tantargy" size="45" placeholder="Kérem írja ide a tantárgy nevét."></input></h3></tr>
                                <tr><h4><input type="image" src="images/GUI_06.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                            </form>
                            <form name="szakhozzaad" action="szakhozzaad.php" method="post" onSubmit="return Szak_Length_TextField_Validator()">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Osztály hozzáadása az adatbázishoz:</h2></tr>
                                <tr><h3>Név:<input type="text" name="szak" size="45" placeholder="Kérem írja ide az osztály nevét."></input></h3></tr>
                                <tr><h4><input type="image" src="images/GUI_06.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                            </form>
                            <form name="tanteremhozzaad" action="tanteremhozzaad.php" method="post" onSubmit="return Tanterem_Length_TextField_Validator()">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Tanterem hozzáadása az adatbázishoz:</h2></tr>
                                <tr><h3>Név:<input type="text" name="tanterem" size="45" placeholder="Kérem írja ide a tanterem nevét."></input></h3></tr>

                                <tr><h4><input type="image" src="images/GUI_06.jpg" width="120"/></h4></tr>
                                </td>
                                </table>
                                </div>
                             </form>
                             <form name="adminhozzaad" action="adminhozzaad.php" method="post" onSubmit="return Admin_Length_TextField_Validator()">
                                <div id="addsomething">
                                <table>
                                <td>
                                <tr><h2>Admin hozzáadása az adatbázishoz:</h2></tr>
                                <tr><h3>Név:<input type="text" name="anev" size="30" placeholder="Kérem írja ide az Admin nevét."></input></h3></tr>
                                <tr><h3>Felhasználói név:<input type="text" name="afelhasznalonev"size="50" placeholder="Felhasználói név(Maximum 50 karakter!)."></input></h3></tr>
                                <tr><h3>Jelszo:<input type="password" name="ajelszo"size="30" placeholder="Jelszó(Maximum 16 karakter!)."></input></h3></tr>
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