<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<?php
header('Content-Type: text/html; charset=UTF-8');
$error=0;
$adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
$db=mysql_select_db("neptun",$adatbazis) or die("Nem sikerült csatlakozni a megadott adatbázishoz</br>");
                
                
$sql="INSERT INTO orarend (osztalyid, napid, oraid, tantargyid, tanarid, tanteremid)
VALUES
('$_POST[osztalyid]','$_POST[napid]','$_POST[oraid]','$_POST[tantargyid]','$_POST[tanarid]','$_POST[tanteremid]')";

if (!mysql_query($sql,$adatbazis))
  {
  $error=1;
  die('Error: ' . mysql_error());
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
    </body>
</html>