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
    <title>GUEST BOOK - Home</title>
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

        <!-- Home Section  -->

        <section class="home_section py-5" id="home-section">
        <div class="container pt-4">
          <div class="row">
            <div class="col-lg-7 col-md-10">
                  <div class="display-5 fw-bold mx-md-0 mx-auto text-white">Ask and Learn Together: Engage in Conversations</div>
                  <p class="text-white mt-4 fs-5">Welcome to our vibrant community of curious minds! Engage in thought-provoking conversations, ask questions, share knowledge, and embark on a journey of continuous learning. Together, let's foster a space where ideas thrive and connections flourish. Join us today and become a part of this dynamic discourse!</p>
                  <a class="btn btn-primary px-4 py-2 fw-bold fs-4 mt-5 text-uppercase" href="#">Start Discussion</a>
            </div>
          </div>
        </div>
        </section>

        <!-- General Categories  -->
        <section class="general_section py-5 bg-primary" id="general">
          <div class="container pb-5">
            <div class="row mb-5">
              <div class="col-12 text-center">
                    <h1 class="fw-bold text-white text-uppercase display-4">General Discussions</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mb-md-0 mb-5 d-md-flex align-item-md-stretched mx-md-auto">
                <div class="card">
                  <a href="questions.php?catid=1"><img class="card-img-top" src="general1.jpg" alt="Title"></a>
                  <div class="card-body">
                    <h3 class="card-title"><a href="questions.php?catid=1" class="text-decoration-none text-primary">General Knowledge</a></h3>
                    <p class="card-text fs-5 text-primary">Let's Start Your Discussion about General Knowledge ...</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-md-0 mb-5 mx-md-auto">
                <div class="card">
                  <a href="questions.php?catid=2"><img class="card-img-top" src="general2.jpg" alt="Title"></a>
                  <div class="card-body">
                    <h3 class="card-title"><a href="questions.php?catid=2" class="text-decoration-none text-primary">Islamic Knowledge</a></h3>
                    <p class="card-text fs-5 text-primary">Let's Start Your Discussion about Islamic Knowledge ...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- Discussion section related msg  -->

        <section class="discuss_section py-5">
          <div class="container pb-5">
          <div class="row mb-2">
              <div class="col-12 text-center">
                    <h1 class="fw-bold text-white text-uppercase display-4">All Discussion</h1>
              </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <p class="fs-5 text-white text-capitalize">Here you can make discussion on the followings things : So let's Start --</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 mb-md-0 mb-4">
                  <div class="box bg-primary  mx-md-0 mx-auto rounded-circle text-white fw-bold fs-3 d-flex justify-content-center align-items-center">
                           <p class="text-center"> General Knowledge</p>
                  </div>
                </div>
                <div class="col-md-3 mb-md-0 mb-4">
                  <div class="box bg-primary  mx-md-0 mx-auto rounded-circle text-white fw-bold fs-3 d-flex justify-content-center align-items-center">
                           <p class="text-center"> Islamic Knowledge</p>
                  </div>
                </div>
                <div class="col-md-3 mb-md-0 mb-4">
                  <div class="box bg-primary  mx-md-0 mx-auto rounded-circle text-white fw-bold fs-3 d-flex justify-content-center align-items-center">
                           <p class="text-center"> Programming Knowledge</p>
                  </div>
                </div>
                <div class="col-md-3 mb-md-0 mb-4">
                  <div class="box bg-primary  mx-md-0 mx-auto rounded-circle text-white fw-bold fs-3 d-flex justify-content-center align-items-center">
                           <p class="text-center">Cars Knowledge</p>
                  </div>
                </div>
            </div>
          </div>
        </section>


          <!-- Modern Categories  -->
          <section class="modern_section py-5 bg-primary" id="technical">
          <div class="container pb-5">
            <div class="row mb-5">
              <div class="col-12 text-center">
                    <h1 class="fw-bold text-white text-uppercase display-4">Modern Discussions</h1>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-4 mb-md-0 mb-5 mx-md-auto">
                <div class="card">
                  <a href="questions.php?catid=3"><img class="card-img-top" src="modern1.jpg" alt="Title"></a>
                  <div class="card-body">
                    <h3 class="card-title"><a href="questions.php?catid=3" class="text-decoration-none text-primary">Programming Knowledge</a></h3>
                    <p class="card-text fs-5 text-primary">Let's Start Your Discussion about Programming Knowledge ...</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-md-0 mb-5 mx-md-auto d-md-flex align-item-md-stretched">
                <div class="card">
                  <a href="questions.php?catid=4"><img class="card-img-top" src="modern2.jpg" alt="Title"></a>
                  <div class="card-body">
                    <h3 class="card-title"><a href="questions.php?catid=4" class="text-decoration-none text-primary">Cars Knowledge</a></h3>
                    <p class="card-text fs-5 text-primary">Let's Start Your Discussion about Cars Knowledge ...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- Web Message SEction  -->
        <section class="msg_section py-5">
          <div class="container py-5">
            <div class="row mb-5">
            <div class="col-12 text-center">
                    <h1 class="fw-bold text-white text-uppercase display-4">Community Corner</h1>
              </div>
            </div>
            <div class="row">
                  <div class="col-12">
                    <p class="fs-5 text-white text-center">
                    Welcome to our vibrant Community Corner! Here, you can freely share your thoughts, ask questions, and engage in meaningful discussions with fellow members. Let's create a supportive and inclusive space where knowledge is exchanged, friendships are formed, and everyone's voice is heard. Join the conversation and be a part of our growing community!
                    </p>
                    <div class="mt-5 text-center">
                        <a id="scrollToTop" href="#" class="border p-4 border-white border-3 rounded-circle text-white"><i class="fa-solid fa-arrow-up text-white fs-1 mt-3"></i>
                      </a>
                    </div>
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


        <script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the arrow-up icon
    const arrowUpIcon = document.getElementById('scrollToTop');

    // Add a click event listener to scroll to the top when clicked
    arrowUpIcon.addEventListener('click', function() {
        // Scroll to the top of the page smoothly
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
</script>

</body>
</html>