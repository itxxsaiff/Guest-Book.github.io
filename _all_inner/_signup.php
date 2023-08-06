<?php 

    include('_connection_to_db.php');
    $Firstname = htmlspecialchars($_POST['fname']);
    $Lastname = htmlspecialchars($_POST['lname']);
    $Username = htmlspecialchars($_POST['uname']);
    $Gmail = htmlspecialchars($_POST['gmail']);
    $Pass = htmlspecialchars($_POST['password']);
    $CPass = htmlspecialchars($_POST['cpassword']);
    if(!empty($Firstname) && !empty($Lastname) && !empty($Username) && !empty($Gmail) && !empty($Pass) && !empty($CPass)){
        $sql = "SELECT * FROM guest_book_users WHERE UserName = '$Username'";
        $result = mysqli_query($_conn, $sql);
        $num = mysqli_num_rows($result);
        if($num > 0){
            echo 'Error! Username Already exist Please try another';
        }else{
        $sql = "SELECT * FROM guest_book_users WHERE UserEmail = '$Gmail'";
        $result = mysqli_query($_conn, $sql);
        $num = mysqli_num_rows($result);
        if($num > 0){
            echo 'Error! This Email Already have an account';
        }else{
            if($Pass === $CPass){
                $hashedpass = password_hash($Pass, PASSWORD_DEFAULT);
                $timestamp = time();
                $randomNumber = mt_rand(1000000000, 9999999999);
                $uniqueCode = $timestamp . $randomNumber;
                $finalCode = substr($uniqueCode, 0, 10);
                $sql = "INSERT INTO guest_book_users (Firstname, Lastname, UserName, UserEmail, Userpassword, Unique_code) VALUES ('$Firstname', '$Lastname', '$Username', '$Gmail', '$hashedpass', '$finalCode')";
                $result = mysqli_query($_conn, $sql);
                if($result){
                    echo 'Success';
                }else{
                    echo 'Error! Failed due to any issue please try again';
                }
            }else{
                echo 'Error! Your Password does not match with Confirm Password';
            }
        }
        }
    }else{
        echo 'Error! All inputs are required';
    }

 ?>