<html>
<head>
    <?php
        $adatbazis=@mysql_connect("localhost","root","") or die("Nem sikerült kapcsolódni az adatbázishoz!<br/>");
        $db=mysql_select_db("neptun",$adatbazis) or die("Nem</br>");
    ?>
<title>LMA órarend</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<center>
			<img src="images/top_element.jpg" width="760"></img>
			<center><div id="header">
            <table cellspacing="10">
            <tr>
            <td><img src="images/orarend_06.gif"></img></td>
            <td><img src="images/GUI_06.jpg" width="120"></img></td>
            <td><img src="images/GUI_08.jpg" width="120"></img></td>
            <td><img src="images/GUI_10.jpg" width="120"></img></td>
            <td><img src="images/GUI_03.jpg" width="120"></img></td>
            </tr> 
  
            </table>
         
            
            </div> </center>
			<div id="appbg" align="center">
			<div id="tablazatBG">
            <table border="2" cellspacing="0" cellpadding="10" id="Tablazat_orarend">
            
            <!--Nulladik sor-->
            
      	    <center><tr colspan="9"><b>Kérem válassza ki az osztályt:</b>
            
            <select id="Osztaly">
                while($r=mysql_fetch_assoc($eredmeny))
                {
                $selected=(isset($_POST["listid"] AND $r["id"]==$_POST["listid"]) ? ' selected="selected"' : '';
                echo "<option value=\"{$r["id"]}\"$selected>{$r["name"]}</option>\n";
                }
                echo '</select>';
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
            </th>
            <td></td>
            <td>Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>                        
            </tr>          
            <!--Harmadi sor-->
                        <tr>
            <th>&nbsp;</th>
            <td>Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>                        
            </tr>     
            <!--Negyedik sor-->
                        <tr>
            <th>&nbsp;</th>
            <td>Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>                        
            </tr>     
            <!--Ötödik sor-->
                        <tr>
            <th>&nbsp;</th>
            <td>Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>                        
            </tr>     
            <!--Hatodik sor-->
                        <tr>
            <th>&nbsp;</th>
            <td>Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>                        
            </tr>     
            <!--Hetedik sor-->
                        <tr>
            <th>&nbsp;</th>
            <td>Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>                        
            </tr>     
            <!--Nyolcadik sor-->
                        <tr>
            <th>&nbsp;</th>
            <td>Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>
            <td>
            Tantárgy: <select id="Tantargy">  <option value="tantargy1">Tantargy1</option>
  			<option value="tantargy2">Tantargy2</option>
  			<option value="tantargy3">Tantargy3</option>
  			<option value="tantargy4">Tantargy4</option></select></br>
            Tanár: <select id="Tanar">  <option value="tanar1">Tanar1</option>
  			<option value="tanar2">Tanar2</option>
  			<option value="tanar3">Tanar3</option>
  			<option value="tanar4">Tanar4</option></select></br>
            Tanterem: <select id="Tanterem">  <option value="t1">T1</option>
  			<option value="t2">T2</option>
  			<option value="t3">T3</option>
  			<option value="t4">T4</option></select>
            </td>                        
            </tr>    
            <td colspan="9"><center><input type="submit" value="Mentés" id="save"></center></td> 
            </table></div>
            		<img src="images/orarend_23.gif" width="760"></img>
            </div>
                        <a href="index.php">Vissza az Index-re</a>
</center>
</body>
</html>