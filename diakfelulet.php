<html>
<head>
<title>LMA órarend</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <?php
        $adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
        $db=mysql_select_db("neptun",$adatbazis) or die("Nem sikerült csatlakozni a megadott adatbázishoz</br>");
    ?>
<center>
			<img src="images/top_element_regular.jpg" width="760"></img>
			<center><div id="header">
            <table cellspacing="10">
            <tr>
            <td><div id="header_sav"></div><img src="images/orarend_06.gif"></img></td>
            <td><img src="images/GUI_08.jpg" width="120"></img></td>
            <td><img src="images/GUI_10.jpg" width="120"></img></td>
            <td><a href="login.php"><img src="images/GUI_login.jpg" width="120"></img></a></td>
            </tr> 
  
            </table>
         
            
            </div> </center>
			<div id="appbg" align="center">
			<div id="tablazatBG">
            <table border="2" cellspacing="0" cellpadding="10" id="Tablazat_orarend">
            
            <!--Nulladik sor-->
      	    <center><tr colspan="9">
                <b>Kérem válassza ki az osztályt:</b>
                <select id="Osztaly">  
                <?php
                    $eredmeny=mysql_query("SELECT * FROM osztaly");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
            </select>
            </tr></center>
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
            <th>8:00-8:45</th>
            <td>
                <b>Tantárgy:
					<?php
						$eredmeny=mysql_query("SELECT tantargy.nev FROM orarend,osztaly,tantargy WHERE orarend.osztalyid=osztaly.id AND tantargy.id=orarend.tantargyid;");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo ($r['tantargy.nev']);
                        }
                    ?>
                </br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</b></br>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>                        
            </tr>           
            <!--Harmadi sor-->
                        <tr>
            <th>9:00-9:45</th>
            <td> <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>                        
            </tr>    
            <!--Negyedik sor-->
                        <tr>
            <th>10:00-10:45
            <td> <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>                        
            </tr>    
            <!--Ötödik sor-->
                        <tr>
            <th>11:00-11:45</th>
            <td> <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>                        
            </tr>       
            <!--Hetedik sor-->
                        <tr>
            <th>12:00-12:45</th>
            <td> <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>                        
            </tr>     
            <!--Nyolcadik sor-->
                        <tr>
            <th>13:00-13:45</th>
            <td> <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            </tr>
            <!--Kilencedik sor-->
                        <tr>
            <th>14:00-14:45</th>
            <td> <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</b></br>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>                         
            </tr>   
            <!--Tizedik sor-->
                        <tr>
            <th>15:00-15:45</th>
            <td> <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>
            <td>
            <b>Tantárgy:</br></b>
            Tanár: </br>
            <i>Tanterem: </br></i>
            </td>                        
            </tr>       
            </table></div>
            		
            </div>
            <img src="images/bottom_element.jpg" width="760"></img></br>
            <a href="index.php">Vissza az Index-re</a>
</center>

</body>
</html>