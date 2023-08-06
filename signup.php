<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7ccea3ad0c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="webstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUEST BOOK - Signup</title>
</head>
<body class="bg-light">
    
    <!-- Signup box  -->
    <div class="container">
        <div class="row">
            <div class="sign_box border border-3 border-primary pt-3 pb-4 px-4 mt-5 mx-auto bg-white rounded">
                <div class="row mb-3">
                    <div class="col-12 text-center">
                        <p class="fs-1 text-primary fw-bold text-uppercase">register</p>
                    </div>
                    <div class="col-12 text-center">
                        <p class="error_msg fw-medium text-danger"></p>
                    </div>
                </div>
                <form method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input class="form-control" type="text" name="fname" placeholder="Enter Your First Name" maxlength="50">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input class="form-control" type="text" name="lname" placeholder="Enter Your Last Name" maxlength="50">
                        </div>
                        <div class="col-12 mb-3">
                            <input class="form-control" type="text" name="uname" placeholder="Enter Username" maxlength="15">
                        </div>
                        <div class="col-12 mb-3">
                            <input class="form-control" type="email" name="gmail" placeholder="Enter Your Email Adress">
                        </div>
                        <div class="col-12 mb-3">
                            <input class="form-control" type="password" name="password" placeholder="Enter Your Password" maxlength="15">
                        </div>
                        <div class="col-12 mb-4">
                            <input class="form-control" type="password" name="cpassword" placeholder="Confirm Password">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 fw-bold fs-6 signup-btn">Signup</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Already have an account  -->
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="fs-5">Already have an account? <a href="login.php" class="fw-bold">Login</a></p>
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
        const signup_btn = document.querySelector('.signup-btn');
        const error = document.querySelector('.error_msg');
        form.onsubmit = (e) => {
            e.preventDefault();
        }
        signup_btn.onclick = () => {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', '_all_inner/_signup.php', true);
            xhr.onload = () =>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        let _signup_data = xhr.response;
                        if(_signup_data.match('Error!')){
                            error.innerHTML = _signup_data;
                        }else{
                            window.location.href = 'login.php?accountcreated=true';
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