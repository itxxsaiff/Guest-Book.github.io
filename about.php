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
    <title>GUEST BOOK - About us</title>
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


    <!-- About us  -->
    <section class="about_section bg-light py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold text-uppercase text-center mb-5">About us</h1>
                    <p class="text-center">
                    <ul class="list-unstyled">
                        <li class="mt-4 fs-5">
                            Welcome to <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a>,
                            your go-to destination for meaningful interactions and insightful
                            discussions! Our platform is designed to foster a vibrant community of knowledge seekers and
                            sharers, creating a space where curiosity thrives and connections are built.
                        </li>

                        <li class="mt-4 fs-5">
                            At <a href="home.php" class="text-uppercase text-decoration-none">Guest book</a>, we believe
                            in the power of asking questions and the value of shared
                            knowledge. Whether you're seeking answers or eager to share your expertise, our platform is
                            your
                            open forum to engage with like-minded individuals. From programming enthusiasts to
                            automotive
                            aficionados, our diverse range of categories ensures there's a place for everyone.
                        </li>

                        <li class="mt-4 fs-5">
                            Our mission is to empower individuals like you to learn and grow together. You can freely
                            ask
                            questions, provide thoughtful replies, and engage in conversations that spark curiosity and
                            curiosity leads to growth. Every interaction on our platform is an opportunity to expand
                            your
                            understanding and build meaningful connections with others who share your interests.
                        </li>

                        <li class="mt-4 fs-5">
                            As we continue to grow, we remain committed to creating a safe and inclusive space for open
                            dialogue. We encourage respectful discussions and discourage any form of harmful behavior.
                            Together, we can create a positive and supportive community where ideas flourish, and
                            everyone's
                            voice is heard.
                        </li>

                        <li class="mt-4 fs-5">
                            Join us on this journey of continuous learning and exploration. Become a part of <a
                                href="home.php" class="text-uppercase text-decoration-none">Guest book</a>
                            and experience the joy of collaborative knowledge sharing. Together, let's make the world a
                            little wiser, one conversation at a time. Welcome to our community, and let the quest for
                            knowledge begin!
                        </li>
                    </ul>
                    </p>
                    <h4 class="text-muted mt-5 text-center fs-5">Regards! <span><a href="home.php"
                                class="text-uppercase text-decoration-none">Guest book</a></span></h4>
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