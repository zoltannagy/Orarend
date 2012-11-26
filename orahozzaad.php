<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<?php
$adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
$db=mysql_select_db("neptun",$adatbazis) or die("Nem sikerült csatlakozni a megadott adatbázishoz</br>");
    mysql_query('SET NAMES utf8');
    $osztaly=$_POST['osztalyid'];
    $nap=$_POST['napid'];
    $ido=$_POST['idoid'];            
		mysql_query('SET NAMES utf8');                
		$sql="INSERT INTO orarend (osztalyid, napid, oraid, tantargyid, tanarid, tanteremid)
		VALUES
		('$_POST[osztalyid]','$_POST[napid]','$_POST[oraid]','$_POST[tantargyid]','$_POST[tanarid]','$_POST[tanteremid]')";
		
		if (!mysql_query($sql,$adatbazis))
		  {
		  die('Error: ' . mysql_error());
		  } 
		  
			echo "<script type='text/javascript'>
					alert('Sikeres hozzáadás!');
					document.location = 'hozzaadas.php';
				 </script>";
mysql_close($adatbazis);

?>
    </body>
</html>