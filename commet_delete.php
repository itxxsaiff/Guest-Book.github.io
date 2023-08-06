<?php


include('_all_inner/_connection_to_db.php');
session_start();
if($_SESSION['loggedin'] !== true){
  header("Location: login.php");
}


$commentId = htmlspecialchars($_POST['commentno']);
$sql = "DELETE FROM users_comments WHERE c_id = '$commentId'";
$result = mysqli_query($_conn, $sql);
if($result){ 
  echo 'Success';
}else{
  echo 'Error';
}
?>
