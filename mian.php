<?
include "index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="C:\xampp\htdocs\web\js\jquery-3.3.1.min.js "></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body vlink=red>
<table width=1350 height=auto border=1>
<tr bgcolor = "#003399", border = 2 ><td colspan="3" id="header" align =center><h1><font color ="white">Walailak</h1></td></tr>
<tr>
<td id="left" bgcolor = "gray" width=500 height=auto><br><br><br><br><br><br></td>
<td id="content" >

    <table border ="2" color ="#FFFFFF"   align =center width=500 height=auto>
<tr bgcolor = "#c4cef4" boder="1" >
<td>Node</td>
<td width="200" heiht="50">IP</td> 
<td >Status</td> 
<td >switch</td> 
<td >Time</td></tr>

<tr>
<td>Node_1</td>
<td >182.15.14.2</td>
 <td> <b><font color="red">off</font> </b></td> 
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td></tr>

<tr>
<td>Node_2</td>
<td >192.4.25.3</td>
 <td > <font color="#33FF00">On</font></td> 
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td></tr>

<tr  >
<td>Node_3</td>
<td >127.0.0.1</td>
 <td > <b><font color="#33FF00">On</font></b></td>
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td></tr>

<tr  >
<td>Node_4</td>
<td >182.15.14.2</td>
 <td > <b><font color="red">off</font> </b></td> 
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td></tr>

<tr  >
<td>Node_5</td>
<td >182.15.14.2</td>
 <td > <b><font color="red">off</font> </b></td> 
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td></tr>

<tr  >
<td>Node_6</td>
<td >182.15.14.2</td>
 <td > <b><font color="red" >off</font> </b></td> 
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td></tr>

<tr  >
<td>Node_7</td>
<td >182.15.14.2</td>
 <td > <b><font color="red">off</font> </b></td> 
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td></tr>

<tr  >
<td>Node_8</td>
<td >182.15.14.2</td>
 <td > <b><font color="red">off</font> </b></td> 
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td></tr>

<tr  >
<td>Node_9</td>
<td >182.15.14.2</td>
 <td > <b><font color="red">off</font> </b></td> 
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td></tr>

<tr >
<td>Node_10</td>
<td >182.15.14.2</td>
 <td > <b><font color="red">off</font> </b></td> 
 <td >
 <?php   
 date_default_timezone_set('asia/Bangkok');
 echo date("H:i:s");
 ?>
</td></tr>

    </table>

</td>
<td id="left" bgcolor = "gray" width=500 height=auto>&nbsp;</td>
</tr>
</table>
<p align ="center"><a href = "index.php">ย้อนกลับ</a></p>
<p align ="center"><a href = "web.php" >หน้าหลัก</a></p>       
        
</body>
</html>