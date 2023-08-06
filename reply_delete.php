<?php


include('_all_inner/_connection_to_db.php');
session_start();
if($_SESSION['loggedin'] !== true){
  header("Location: login.php");
}


$rid = htmlspecialchars($_POST['rno']);
$sql = "DELETE FROM users_replies WHERE r_id = '$rid'";
$result = mysqli_query($_conn, $sql);
if($result){ 
  echo 'Success';
}else{
  echo 'Error';
}
?>
