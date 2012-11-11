<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<table border="2" cellspacing="5" cellpadding="5" id="Tablazat_orarend">
            
            <!--Nulladik sor-->
      	    <center><tr colspan="9"><b>Kérem válassza ki az osztályt:</b>
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
            <th>8:00-9:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>                 
            </tr>          
            <!--Harmadi sor-->
                        <tr>
            <th>9:00-10:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>                    
            </tr>     
            <!--Negyedik sor-->
                        <tr>
            <th>10:00-11:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>           
            </tr>     
            <!--Ötödik sor-->
                        <tr>
            <th>11:00-12:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>                   
            </tr>     
            <!--Hatodik sor-->
                        <tr>
            <th>12:00-13:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>               
            </tr>     
            <!--Hetedik sor-->
                        <tr>
            <th>14:00-15:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
           <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>                        
            </tr>     
            <!--Nyolcadik sor-->
                        <tr>
            <th>15:00-16:00
            </th>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            <td>Tantárgy: <select id="Tantargy">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tantargy");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanár: <select id="Tanar">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanar");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev_elotag'].' '.$r['vezeteknev'].' '.$r['keresztnev']."</option>\n";
                        }
                ?>
                </select></br>
            Tanterem: <select id="Tanterem">
                <?php
                    $eredmeny=mysql_query("SELECT * FROM tanterem");
                    while($r=mysql_fetch_assoc($eredmeny)){
                        echo "<option value=".$r['id']."}>".$r['nev']."</option>\n";
                        }
                ?>
                </select></br>
            </td>
            </tr>    
            <td colspan="9"><center><input type="submit" value="Mentés" id="save"></center></td> 
            </table>
</body>
</html>