<?php 


  session_start();
  if($_SESSION['loggedin'] !== true){
    header("Location: login.php");
  }


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7ccea3ad0c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="webstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUEST BOOK - Terms</title>
</head>

<body class="bg-light">


    <!-- Header  -->

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
                <a href="home.php"><img src="logo.png" class="img-fluid logo_img"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-links">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="header-links">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-lg-0 mx-auto"><a class="nav-link text-white fs-5" href="home.php">Home</a></li>
                        <li class="nav-item mx-lg-0 mx-auto"><a class="nav-link text-white fs-5" href="about.php">About us</a></li>
                        <li class="nav-item dropdown mx-lg-0 mx-auto">
                          <a class="nav-link dropdown-toggle text-white fs-5" data-bs-toggle="dropdown">
                            Categories
                          </a>
                          <ul class="dropdown-menu bg-primary">
                            <li><a class="dropdown-item text-white fs-5 text-center" href="questions.php?catid=1">General Knowledge</a></li>
                            <li><a class="dropdown-item text-white fs-5 text-center" href="questions.php?catid=2">Islamic Knowledge</a></li>
                            <li><a class="dropdown-item text-white fs-5 text-center" href="questions.php?catid=3">Programming Discussion</a></li>
                            <li><a class="dropdown-item text-white fs-5 text-center" href="questions.php?catid=4">Cars Discussion</a></li>
                          </ul>
                        </li>
                        <li class="nav-item mx-lg-0 mx-auto"><a class="nav-link text-white fs-5" href="terms.php">Terms & Policies</a></li>
                      </ul>
                </div>
                <div class="dropdown order-lg-last order-first">
                    <a href="#" class="fs-3 fw-bold text-white dropdown-toggle text-decoration-none ms-md-3" data-bs-toggle="dropdown"><?php echo $_SESSION['username']; ?></a>
                    <ul class="dropdown-menu bg-primary">
                      <li><a href="logout.php" class="dropdown-item text-white fw-bold fs-5">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- Terms & Services  -->
    <section class="terms_section bg-light py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold text-uppercase text-center mb-5">Terms & Policies</h1>
                    <p class="text-center">
                    <ul class="">
                        <li class="mt-4 fs-5">
                            <h4 class="">Respectful Conduct:</h4> Users are required to maintain a respectful and courteous demeanor while
                            interacting on <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a>. Any form of harassment, hate speech, or offensive behavior
                            towards other users is strictly prohibited.
                        </li>
                        <li class="mt-4 fs-5">
                            <h4 class="">Collaborative Knowledge Sharing:</h4> <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a> is a platform dedicated to promoting meaningful
                            discussions and sharing knowledge. Users are encouraged to engage constructively, provide
                            valuable insights, and support each other's learning journeys.
                        </li>
                        <li class="mt-4 fs-5">
                            <h4 class="">Prohibited Content:</h4> Users must refrain from posting or sharing any content that is explicit,
                            offensive, defamatory, or violates any intellectual property rights. Content that promotes
                            violence, discrimination, or illegal activities is strictly forbidden.
                        </li>
                        <li class="mt-4 fs-5">
                            <h4 class="">Privacy and Confidentiality:</h4> Respect the privacy of others and refrain from sharing any
                            personal or confidential information without explicit consent. Users should be mindful of
                            data protection and adhere to our privacy policy.

                        </li>
                        <li class="mt-4 fs-5">
                            <h4 class="">Responsible Use:</h4> Users are responsible for their actions on <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a>. Avoid engaging in
                            any malicious activities, such as spamming, hacking, or attempting to disrupt the platform's
                            functionality.
                        </li>
                        <li class="mt-4 fs-5">
                            <h4 class="">Responsible Use:</h4> Users are responsible for their actions on <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a>. Avoid engaging in
                            any malicious activities, such as spamming, hacking, or attempting to disrupt the platform's
                            functionality.
                        </li>
                        <li class="mt-4 fs-5">
                            <h4 class="">Age Restriction:</h4> <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a> is intended for users above the age of 13. Users below this age
                            must have parental consent to participate on the platform.
                        </li>
                        <li class="mt-4 fs-5">
                            <h4 class="">Moderation and Enforcement:</h4> <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a> reserves the right to moderate content and enforce
                            these terms. Any violation may result in account suspension or termination, depending on the
                            severity of the breach.
                        </li>
                        <li class="mt-4 fs-5">
                            <h4 class="">Reporting Misconduct:</h4> Users are encouraged to report any instances of misconduct or
                            violations of these terms promptly. This ensures a safe and welcoming environment for
                            everyone.
                        </li>
                        <li class="mt-4 fs-5">
                            <h4 class="">Acceptance of Terms:</h4> By using <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a>, users agree to abide by these terms and
                            conditions. Failure to comply may lead to the termination of user privileges.
                        </li>
                        <li class="mt-4 fs-5">
                            <h4 class="">Changes to Terms:</h4> <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a> may update these terms and services from time to time. Users
                            will be notified of any changes, and continued use of the platform constitutes acceptance of
                            the updated terms.
                        </li>
                    </ul>
                    </p>
                    <h4 class="text-muted mt-5 text-center fs-5">Thank you for being a part of <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a>! Let's foster a supportive community that empowers knowledge sharing and positive interactions. Together, we can create a space where learning thrives, and users help each other grow.</h4>
                </div>
            </div>
        </div>
    </section>


     <!-- Footer  -->
     <footer class="footer_section bg-primary pt-5 pb-2">
          <div class="container pt-3">
                <div class="row">
                      <div class="col-md-4 mb-md-0 mb-4 text-center">
                        <h1 class="text-white mb-3">Guest Book</h1>
                        <ul class="list-unstyled">
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5" href="home.php">Home</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5" href="about.php">About us</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5" href="home.php#category">Categories</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5" href="terms.php">Terms & Policies</a></li>
                      </ul>
                      </div>
                      <div class="col-md-4 mb-md-0 mb-4 text-center">
                    <h1 class="text-white mb-3">Main Categories</h1>
                    <ul class="list-unstyled">
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5" href="questions.php?catid=1">General
                                Knowledge</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5" href="questions.php?catid=2">Islamic
                                Knowledge</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5"
                                href="questions.php?catid=3">Programming Discussion</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5" href="questions.php?catid=4">Cars
                                Discussion</a></li>
                    </ul>
                </div>
                      <div class="col-md-4 mb-md-0 mb-4 text-center">
                        <h1 class="text-white mb-3 text-center">Reached to us</h1>
                        <ul class="list-unstyled">
                        <li class="nav-item mx-md-0 mx-auto mb-2 text-center"><a class="nav-link text-white fs-4" href="https://www.facebook.com/profile.php?id=100071594923884" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2 text-center"><a class="nav-link text-white fs-4" href="https://www.instagram.com/itxxsaiff/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2 text-center"><a class="nav-link text-white fs-4" href="https://www.linkedin.com/in/saif-ur-rehman-954a54280/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2 text-center"><a class="nav-link text-white fs-4" href="#" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                      </ul>
                      </div>
                </div>

                <!-- Claim   -->
                <div class="row mt-5">
                <div class="col-12">
                    <hr width="40%" class="mx-auto text-white fs-2">
                </div>
            </div>
                <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-white fs-5">© 2023 Guest Book, All rights reserved by <span class="fw-bold text-uppercase">Saif ur Rehman</span></p>
            </div>
        </div>
          </div>
        </footer>

</body>

</html>