<?
include "index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body >

<table border ="2" color ="#FFFFFF"  width = "400" height ="50" >
<tr bgcolor = "#c4cef4" boder="1" >

<td width="200" heiht="50">IP</td> 
<td >Status</td> 
<td >Time</td>

</tr>
<tr  >
<td >127.0.0.1</td>
 <td > <font color="#33FF00">On</font></td> 
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td>
</tr>

</table>

    
        
        
</body>
</html>