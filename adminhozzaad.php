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

$jelszo=$_POST['ajelszo'];
$enc_jelszo=md5($jelszo);

mysql_query('SET NAMES utf8');                
$sql="INSERT INTO admin (nev, felhasznalonev, jelszo)
VALUES
('$_POST[anev]','$_POST[afelhasznalonev]','$enc_jelszo')";

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
    </body>
</html>