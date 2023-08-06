<?php 

    include('_connection_to_db.php');
    $comment = htmlspecialchars($_POST['comment']);
    $qid = htmlspecialchars($_POST['qid']);
    $user = htmlspecialchars($_POST['cmntuser']);
    $quser = htmlspecialchars($_POST['quser']);
    if(!empty($comment) && !empty($qid) && !empty($user) && !empty($quser)){
        $sql = "INSERT INTO  users_comments (comnt, q_id, comnt_user, q_user) VALUES ('$comment', '$qid', '$user', '$quser')";
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