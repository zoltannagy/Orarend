<?php
session_start();
$adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
$db=mysql_select_db("neptun",$adatbazis) or die("Nem sikerült csatlakozni a megadott adatbázishoz</br>");
$tanarfelhnev=$_SESSION['user'];

mysql_query('SET NAMES utf8');
$eredmeny = mysql_query("SELECT * FROM tanar WHERE felhasznalonev LIKE '$tanarfelhnev'") or die(mysql_error());
$result=(mysql_fetch_assoc($eredmeny));

?>
<html>
<head>
<title>LMA órarend</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
			<img src="images/top_element_tanari.jpg" width="760"></img>
			<center><div id="header">
            <table cellspacing="10">
            <tr>
            <td><div id="header_sav"></div><img src="images/orarend_06.gif"></img></td>
            <td><a href="Logout.php"><img src="images/GUI_loginnal_03.png"  width="120"></img></a></td>
            </tr> 
  
            </table>
         
            
            </div> </center>
			<div id="appbg" align="center">
			<div id="tablazatBG">
            <div align="center">
            		<h2>Üdvözlöm <?php echo $result['nev']; ?>!</h2><br/>
           		  <h3><b> A(z) Ön órarendje!</b></h3>
			</div>
            <table border="2" cellspacing="0" cellpadding="10" id="Tablazat_orarend">
            
            <!--Nulladik sor-->
      	    
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
            <th>8:00-8:45
            </th>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
<td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
<td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
           <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='1' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            </tr>           
            <!--Harmadi sor-->
                        <tr>
            <th>9:00-9:45
            </th>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
           <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
           <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='2' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            </tr>    
            <!--Negyedik sor-->
                        <tr>
            <th>10:00-10:45
<td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='3' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>       
            </tr>    
            <!--Ötödik sor-->
                        <tr>
            <th>11:00-11:45
            </th>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='4' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>                       
            </tr>       
            <!--Hetedik sor-->
                        <tr>
            <th>12:00-12:45
            </th>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='5' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>                    
            </tr>     
            <!--Nyolcadik sor-->
                        <tr>
            <th>13:00-13:45
            </th>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='6' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>                        
            </tr>    
			<!--Kilencedik sor-->
                        <tr>
            <th>14:00-13:45
            </th>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='7' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>                      
            </tr>     
            <!--Tizedik sor-->
                        <tr>
            <th>15:00-15:45
            </th>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='8' AND orarend.tanarid='$result[id]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>    
            </tr>     
            </table></div>
      
            </div>
            <img src="images/bottom_element.jpg" width="760"></img></br>
</center>

</body>
</html>