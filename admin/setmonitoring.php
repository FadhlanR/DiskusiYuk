<!DOCTYPE html>
<!-- author: Fadhlan Ridhwanallah -->
<html>
<?php
include("../credentials.php");

if($_GET['action']=="delete"){
  deletecomment();
}
else if($_GET['action']=="delete"){
  blockuser();
}

function deletecomment(){
  $db = new PDO(DB_DSN, DB_USER, DB_PASS);
  $result = $db->prepare("UPDATE comments SET showed = 1 WHERE id_comment = :id");
  $result->bindValue(":id",$_GET['id']);
  $success = $result->execute();
}
function blockuser(){
  $db = new PDO(DB_DSN, DB_USER, DB_PASS);
  $result = $db->prepare("UPDATE members SET allowed = 1 WHERE id_user = :id");
  $result->bindValue(":id",$_GET['id']);
  $success = $result->execute();
}
?>
</html>
