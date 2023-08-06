<?php  

include('_all_inner/_connection_to_db.php');
if(isset($_GET['accountcreated']) && $_GET['accountcreated'] == 'true'){
    echo '    <div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center bg-success pt-3">
            <p class="fw-bold text-white fs-4">Your account has been created successfully, Please! Login to continue</p>
        </div>
    </div>
</div>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7ccea3ad0c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="webstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUEST BOOK - Login</title>
</head>
<body class="bg-light">
    
    <!-- Login box  -->
    <div class="container">
        <div class="row">
            <div class="login_box border border-3 border-primary pt-3 pb-4 px-4 mt-5 mx-auto bg-white rounded">
                <div class="row mb-3">
                    <div class="col-12 text-center">
                        <p class="fs-1 text-primary fw-bold text-uppercase">login</p>
                    </div>
                    <div class="col-12 text-center">
                        <p class="error_msg fw-medium text-danger"></p>
                    </div>
                </div>
                <form method="post">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input class="form-control" type="text" name="emailorusername" placeholder="Enter Your Email or Username">
                        </div>
                        <div class="col-12 mb-4">
                            <input class="form-control" type="password" name="password" placeholder="Enter Your Password">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 fw-bold fs-6 login-btn">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Don't have an account  -->
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="fs-5">Don't have an account? <a href="signup.php" class="fw-bold">Signup</a></p>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <hr width="40%" class="mx-auto text-dark">
                </div>
            </div>
        </div>
    </div>

    <!-- Claim  -->
    <div class="container mt-5 mb-1">
        <div class="row mt-5">
            <div class="col-12 text-center mt-5">
                <p class="text-muted fs-5">© 2023 Guest Book, All rights reserved by <span class="fw-bold text-uppercase">Saif ur Rehman</span></p>
            </div>
        </div>
    </div>


    <!-- Action on Submit  -->
    <script>
        const form = document.querySelector('form');
        const login_btn = document.querySelector('.login-btn');
        const error = document.querySelector('.error_msg');
        form.onsubmit = (e) => {
            e.preventDefault();
        }
        login_btn.onclick = () => {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', '_all_inner/_login.php', true);
            xhr.onload = () =>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        let _login_data = xhr.response;
                        if(_login_data.match('Error!')){
                            error.innerHTML = _login_data;
                        }else{
                            window.location.href = 'home.php';
                        }
                    }
                }
            }
            const form_data = new FormData(form);
            xhr.send(form_data);
        }
    </script>



</body>
</html>