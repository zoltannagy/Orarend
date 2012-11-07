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
            <table border="2" cellspacing="5" cellpadding="5" id="Tablazat_orarend">
            
            <!--Nulladik sor-->
      	    <center><tr colspan="9"><b>Kérem válassza ki az osztályt:</b>
            <select id="Osztaly">  
                <?php
                    $eredmeny=mysql_query("SELECT * FROM osztaly");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
            </select>
            </tr></center>
            <!--Első sor-->
            <tr>
            <td>
            </td>
            <th>Hétfő
            </th>
            <th>Kedd
            </th>
            <th>Szerda
            </th>
            <th>Csütörtök
            </th>
            <th>Péntek
            </th>                        
            </th>
            <!--Második sor-->  
            <tr>
            <th>8:00-9:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>                 
            </tr>          
            <!--Harmadi sor-->
                        <tr>
            <th>9:00-10:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>                    
            </tr>     
            <!--Negyedik sor-->
                        <tr>
            <th>10:00-11:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>           
            </tr>     
            <!--Ötödik sor-->
                        <tr>
            <th>11:00-12:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>                   
            </tr>     
            <!--Hatodik sor-->
                        <tr>
            <th>12:00-13:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>               
            </tr>     
            <!--Hetedik sor-->
                        <tr>
            <th>14:00-15:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
           <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>                        
            </tr>     
            <!--Nyolcadik sor-->
                        <tr>
            <th>15:00-16:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            </tr>    
            <td colspan="9"><center><input type="submit" value="Mentés" id="save"></center></td> 
            </table></div>
            </div>
            <img src="images/bottom_element.jpg" width="760"></img></br>
            <a href="index.php">Vissza az Index-re</a>
</center>

</body>
</html>