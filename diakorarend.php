<html>
<head>
	<?php
		$adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
		$db=mysql_select_db("neptun",$adatbazis) or die("Nem sikerült csatlakozni a megadott adatbázishoz</br>");
    ?>
<title>LMA órarend</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon" />
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
			<img src="images/top_element_regular.jpg" width="740"></img>
			<div id="appbg" align="center">
			<div id="tablazatBG">
			</b>
            <table border="2" cellspacing="0" cellpadding="10" id="Tablazat_orarend">
            
            <!--Nulladik sor-->
      	    <center>
           <h3><b> A(z)
		   		<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT nev FROM osztaly WHERE osztaly.id='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?> órarendje!</b></h3>
            </center>
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
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
<td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
<td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
           <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='1' AND orarend.osztalyid='$_POST[osztalyid]';");
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
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
           <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
           <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='2' AND orarend.osztalyid='$_POST[osztalyid]';");
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
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='3' AND orarend.osztalyid='$_POST[osztalyid]';");
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
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='4' AND orarend.osztalyid='$_POST[osztalyid]';");
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
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='5' AND orarend.osztalyid='$_POST[osztalyid]';");
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
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='6' AND orarend.osztalyid='$_POST[osztalyid]';");
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
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='7' AND orarend.osztalyid='$_POST[osztalyid]';");
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
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='1' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='1' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='1' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='2' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='2' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='2' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='3' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='3' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='3' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='4' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='4' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='4' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>
            <td> <b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tantargy.nev FROM tantargy,orarend WHERE tantargy.id=orarend.tantargyid AND orarend.napid='5' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	</br></b>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanar.nev FROM tanar,orarend WHERE tanar.id=orarend.tanarid AND orarend.napid='5' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
           	  </br>
            <i>
            	<?php
					mysql_query('SET NAMES utf8');
					$eredmeny=mysql_query("SELECT tanterem.nev FROM tanterem,orarend WHERE tanterem.id=orarend.tanteremid AND orarend.napid='5' AND orarend.oraid='8' AND orarend.osztalyid='$_POST[osztalyid]';");
                    while($r=mysql_fetch_assoc($eredmeny)){
                    echo $r['nev'];
                    }
				?>
            </br></i>
            </td>    
            </tr>     
            </table>
            <br/><br/><br/>
            
           	  <div id="addsomething">      
                    <a href="diakfelulet.php"><img src="images/vissza_06.jpg" width="120"></img></a></div>
              </div>	
  </div>
            	
            </div>
            <img src="images/bottom_element.jpg" width="740"></img></br>

</center>

</body>
</html>