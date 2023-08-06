<?php 

    include('_connection_to_db.php');
    $reply = htmlspecialchars($_POST['reply']);
    $qid = htmlspecialchars($_POST['qid']);
    $cid = htmlspecialchars($_POST['c_id']);
    $cuser = htmlspecialchars($_POST['comentuser']);
    $ruser = htmlspecialchars($_POST['replyer']);
    if(!empty($reply) && !empty($qid) && !empty($cid) && !empty($cuser) && !empty($ruser)){
        $sql = "INSERT INTO  users_replies (reply, q_id, c_id, r_user, c_user) VALUES ('$reply', '$qid', '$cid', '$ruser', '$cuser')";
        $result = mysqli_query($_conn , $sql);
        if($result){
            echo 'Success';
        }else{
            echo 'Error';
        }
    }else{
        echo 'Error';
    }


?>