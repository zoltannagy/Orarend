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
                
                
$sql=("DELETE FROM `tanar` WHERE id='$_POST[tanar]' LIMIT 1;");

if (!mysql_query($sql,$adatbazis))
  {
  die('Error: ' . mysql_error());
  }
   
	echo "<script type='text/javascript'>
            alert('Sikeres törlés!');
            document.location = 'torles.php';
         </script>";
         
mysql_close($adatbazis);

?>
    </body>
</html>