<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<?php
$error=0;
$adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
$db=mysql_select_db("neptun",$adatbazis) or die("Nem</br>");
                
                
$sql="INSERT INTO tantargy (nev)
VALUES
('$_POST[tantargy]')";

if (!mysql_query($sql,$adatbazis))
  {
  die('Error: ' . mysql_error());
  $error=1;
  }
  
if ($error==0){
    echo "<script type='text/javascript'>
            alert('Sikeres hozzáadás');
            document.location = 'hozzaadas.php';
         </script>";
    }else{echo "<script type='text/javascript'>
            alert('Sikertelen hozzáadás');
            document.location = 'hozzaadas.php';
         </script>";
         }
         
mysql_close($adatbazis);



?>
        <a href="hozzaadas.php"><input type="submit" value="Visszatér!"/></a>
    </body>
</html>