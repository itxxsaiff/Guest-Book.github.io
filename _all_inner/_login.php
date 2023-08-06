<?php  

    include('_connection_to_db.php');
    $usernameoremail = htmlspecialchars($_POST['emailorusername']);
    $password = htmlspecialchars($_POST['password']);
    if(!empty($usernameoremail) && !empty($password)){
        $sql = "SELECT * FROM guest_book_users WHERE UserName = '$usernameoremail' OR UserEmail = '$usernameoremail'";
        $result = mysqli_query($_conn, $sql);
        $num = mysqli_num_rows($result);
        if($num > 0){
            $row = mysqli_fetch_assoc($result);
            $hashedpass = $row['Userpassword'];
            $passvarify = password_verify($password, $hashedpass);
            if($passvarify){
                echo 'Success';
                session_start();
                $sql = "SELECT * FROM guest_book_users WHERE UserName = '$usernameoremail' OR UserEmail = '$usernameoremail'";
                $result = mysqli_query($_conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $row['UserName'];
                $_SESSION['usermail'] = $row['UserEmail'];
            }else{
                echo 'Error! Wrong Password';
            }
        }else{
            echo "Error! This Username or Email don't have an account";
        }
    }else{
        echo 'Error! All inputs are Required';
    }


?>