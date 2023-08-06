<?php 

    include('_connection_to_db.php');
    $question = htmlspecialchars($_POST['question']);
    $catid = htmlspecialchars($_POST['catid']);
    $user = htmlspecialchars($_POST['userquestion']);
    if(!empty($question) && !empty($catid) && !empty($user)){
        $sql = "INSERT INTO  users_questions (que, que_cat_id, que_username) VALUES ('$question', '$catid', '$user')";
        $result = mysqli_query($_conn , $sql);
        if($result){
            echo 'Success';
        }
    }else{
        echo 'Error';
    }


?>