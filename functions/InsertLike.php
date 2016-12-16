<?php
session_start();
  include("./../credentials.php");
  $db = new PDO(DB_DSN, DB_USER, DB_PASS);
  $message = $_POST['Message'];

  $user = $_POST['Nickname'];
  $sql = "SELECT * FROM comments WHERE comment = :id";
  $q = $db->prepare($sql);
  $q->bindValue(':id',$message);
  $q->execute();
  $done= $q->fetch();


  $result = $db->prepare("INSERT INTO comments VALUES(0,'".$message."',now(),0,0,0,0,0,0,0,1,".$done['id_user'].")");
  $statement = $db->prepare("UPDATE comments SET like_comment = 1");
  $result->execute();


  ?>

  <h1><?php echo $done['id_user'];?></h1>