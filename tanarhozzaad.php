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
                
                
$sql="INSERT INTO tanar (nev_elotag, vezeteknev, keresztnev, felhasznalonev, jelszo)
VALUES
('$_POST[nev_elotag]','$_POST[vezeteknev]','$_POST[keresztnev]','$_POST[felhasznalonev]','$_POST[jelszo]')";

if (!mysql_query($sql,$adatbazis))
  {
  die('Error: ' . mysql_error());
  }
  echo 'Tanár sikeresen hozzáadva az adatbázishoz!';

mysql_close($adatbazis);

?>
        <a href="hozzaadas.php"><input type="submit" value="Visszatér!"/></a>
    </body>
</html>