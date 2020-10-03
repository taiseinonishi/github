<?php

mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=portfolio;host=127.0.0.1;","root","root");

$pdo->exec("insert into myportfolio1(name,mail,tel,type,contact,message)values
('".$_POST['name']."','".$_POST['mail']."','".$_POST['tel']."','".$_POST['type']."','".$_POST['contact']."','".$_POST['message']."');");

header("Location:http://localhost/portfolio2/cheack.php");
?>
