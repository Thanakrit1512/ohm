<?php
session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body background="img/WU.jpg" width="200" height="200">
    <h2><font color = "white"><p align="center">Control Ligth WU</p></font></h2>
   
        <h1><p align ="right" ><font color = "white" >:: Login ::</font></p></h1>
        

        <section id="content">
        
        <?php
        if($_POST){
        $login = $_POST['login'];
        $pw = $_POST['pswd'];
            if(($login == "admin")&&($pw == "1234")){
                $_SESSION['user'] = "employer";
                header("location: index.php");
                ob_end_flush();
                exit;
            }
            else {
                
                 echo '<h4 class="err"><p align ="right"><font color="red">ท่านใส่ user หรือ password ไม่ถูกต้อง!!! </font></p></h4>';}

            }
            
            ?></font></p>
            <form method = "post">
            
            <p align ="right"><input type="text" name="login"placeholder="user" required></p>
            <p align ="right"><input type="password" name="pswd"placeholder="password" required></p>
            <p align ="right"><button>เข้าสู่ระบบ</button></p>
        
        </form>
        </section>
    
</body>
</html>