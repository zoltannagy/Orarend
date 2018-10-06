<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<?php
$adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni a központi adatbázishoz!<br/>");
$db=mysql_select_db("neptun",$adatbazis) or die("Nem sikerült kapcsolódni a megadott adatbázishoz!</br>");

$jelszo=mysql_real_escape_string($_POST['tjelszo']);
$enc_jelszo=md5($jelszo);
                
mysql_query('SET NAMES utf8');                
$sql="INSERT INTO tanar (nev, felhasznalonev, jelszo)
VALUES
('mysql_real_escape_string($_POST[tnev])','mysql_real_escape_string($_POST[tfelhasznalonev])','$enc_jelszo')";

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