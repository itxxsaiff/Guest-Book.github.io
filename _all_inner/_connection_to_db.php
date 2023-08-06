<?php 


    $_conn = mysqli_connect('localhost', 'root', '', 'guest_book');
    if(!$_conn){
        echo 'Failed to Connect to Database' . mysqli_connect_error();
    }

 ?>