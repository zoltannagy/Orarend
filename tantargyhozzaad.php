<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<?php
$adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
$db=mysql_select_db("neptun",$adatbazis) or die("Nem</br>");
                
mysql_query('SET NAMES utf8');               
$sql="INSERT INTO tantargy (nev)
VALUES
('$_POST[tantargy]')";

if (!mysql_query($sql,$adatbazis))
  {
  die('Error: ' . mysql_error());
  }
  
    echo "<script type='text/javascript'>
            alert('Sikeres hozzáadás');
            document.location = 'hozzaadas.php';
         </script>";
         
mysql_close($adatbazis);



?>
        <a href="hozzaadas.php"><input type="submit" value="Visszatér!"/></a>
    </body>
</html>