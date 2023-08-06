<?php 

    include('_all_inner/_connection_to_db.php');
  session_start();
  if($_SESSION['loggedin'] !== true){
    header("Location: login.php");
  }

  $catid = $_GET['catid'];
  $breadcrumbs = array();
  $breadcrumbs[] = array("label" => "Home", "url" => "home.php");
  $breadcrumbs[] = array("label" => "Questions", "url" => "questions.php?catid=$catid");


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
    <title>GUEST BOOK - Questions</title>
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
                    <li class="nav-item mx-lg-0 mx-auto"><a class="nav-link text-white fs-5" href="home.php">Home</a>
                    </li>
                    <li class="nav-item mx-lg-0 mx-auto"><a class="nav-link text-white fs-5" href="about.php">About
                            us</a></li>
                    <li class="nav-item dropdown mx-lg-0 mx-auto">
                        <a class="nav-link dropdown-toggle text-white fs-5" data-bs-toggle="dropdown">
                            Categories
                        </a>
                        <ul class="dropdown-menu bg-primary">
                            <li><a class="dropdown-item text-white fs-5 text-center"
                                    href="questions.php?catid=1">General Knowledge</a></li>
                            <li><a class="dropdown-item text-white fs-5 text-center"
                                    href="questions.php?catid=2">Islamic Knowledge</a></li>
                            <li><a class="dropdown-item text-white fs-5 text-center"
                                    href="questions.php?catid=3">Programming Discussion</a></li>
                            <li><a class="dropdown-item text-white fs-5 text-center" href="questions.php?catid=4">Cars
                                    Discussion</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-lg-0 mx-auto"><a class="nav-link text-white fs-5" href="terms.php">Terms &
                            Policies</a></li>
                </ul>
            </div>
            <div class="dropdown order-lg-last order-first">
                <a href="#" class="fs-3 fw-bold text-white dropdown-toggle text-decoration-none ms-md-3 header_username"
                    data-bs-toggle="dropdown"><?php echo $_SESSION['username']; ?></a>
                <ul class="dropdown-menu bg-primary">
                    <li><a href="logout.php" class="dropdown-item text-white fw-bold fs-5">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

     <!-- Bread crumbs  -->

     <section class="breadcrumb_Area mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <?php 
                            foreach ($breadcrumbs as $index => $breadcrumb){
                                echo "<li class='breadcrumb-item fw-bold fs-5'><a href='" . $breadcrumb['url'] . "'>" . $breadcrumb['label'] . "</a></li>";
                            }
                            ?>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <!-- Ask your question Section  -->
    <section class="askquestion bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="question_form">
                    <form method="post">
                        <div class="col-12 mb-4">
                            <textarea rows="10" cols="15" class="form-control px-3 py-3" name="question"
                                placeholder="Feel Free To Ask Your Question, Clear Your Confusion" required></textarea>
                        </div>
                        <input type="hidden" name="catid" value="<?php echo $_GET['catid']; ?>">
                        <input type="hidden" name="userquestion" value="<?php echo $_SESSION['username']; ?>">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 fw-bold question_sbmit">Ask Your
                                Question</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Questions  -->

    <section class="all_questions py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="fs-1 fw-bold text-capitalize">start discussion on questions</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <hr width="50%" class="mx-auto text-dark">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php
                $perPage = 10; 
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($page - 1) * $perPage;
                $sql = "SELECT * FROM users_questions WHERE que_cat_id = '$catid' LIMIT $perPage OFFSET $offset";
                $result = mysqli_query($_conn, $sql);
                $num = mysqli_num_rows($result);
                $sql2 = "SELECT * FROM users_questions WHERE que_cat_id = '$catid'";
                $result2 = mysqli_query($_conn, $sql2);
                $num2 = mysqli_num_rows($result2);
                $totalPages = ceil($num2 / $perPage);
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $username = $row['que_username'];
                        $qtime = $row['que_time'];
                        $que = $row['que'];
                        $queid = $row['que_id'];
                        echo "<div class='user_question pt-2 px-3 border border-3 rounded-3 border-primary mb-4'>
                            <div class='row d-flex justify-content-start'>
                                <div class='col-md-1 text-center mb-md-0 mb-3'>
                                    <i class='fa-solid fa-circle-question display-2 text-primary'></i>
                                </div>
                                <div class='col-md-8'><h5>";
                                if($username === $_SESSION['username']){
                                    echo "Your Question!";
                                }else{
                                    echo $username . ':';
                                }
                                  echo "</h5><p class='mt-3 text-truncate'> $que </p></div>
                                <div class='col-md-3'><a href='comment.php?catid=". $catid ."&queno=" . $queid . "' class='btn btn-primary fw-bold px-3 py-2 w-100'>"; 
                                if($username === $_SESSION['username']){
                                    echo "Check Comments";
                                }else{
                                    echo 'Discuss it?';
                                }
                                
                                 echo "</a><p class='mt-2 text-muted text-end'> $qtime </p></div>
                            </div>
                        </div>";
                    }
                } else {
                    echo "<div class='col-12 text-center py-5 fw-bold'>There is no any question asked by users in this category. Be the first person to ask a question!</div>";
                }
                         ?>
                </div>
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-12 text-center">
                    
        <nav aria-label="Page navigation example" class="mx-auto">
            <ul class="pagination">
                    <li class="page-item border border-primary  <?php if (!isset($_GET['page']) || $page == 1){ echo 'disabled'; } ?> ?>"><a class="page-link" href="questions.php?catid=<?php echo $catid; ?>&page=<?php echo $page - 1; ?>">Previous</a></li>
                <?php
                    for ($i = 1; $i <= $totalPages; $i++):
                        ?>
                           <li class="page-item border  border-primary <?php echo $page == $i ? : ''; ?>"><a class="page-link" href="questions.php?catid=<?php echo $catid; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                       <?php endfor;
                  ?>
                    <li class="page-item border  border-primary <?php if (!($page < $totalPages)){ echo 'disabled'; } ?>"><a class="page-link" href="questions.php?catid=<?php echo $catid; ?>&page=<?php echo $page + 1; ?>">Next</a></li>
            </ul>
            </nav>
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
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5"
                                href="home.php">Home</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5"
                                href="about.php">About us</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5"
                                href="home.php#category">Categories</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5"
                                href="terms.php">Terms & Policies</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-4 text-center">
                    <h1 class="text-white mb-3">Main Categories</h1>
                    <ul class="list-unstyled">
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5"
                                href="questions.php?catid=1">General
                                Knowledge</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5"
                                href="questions.php?catid=2">Islamic
                                Knowledge</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5"
                                href="questions.php?catid=3">Programming Discussion</a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2"><a class="nav-link text-white fs-5"
                                href="questions.php?catid=4">Cars
                                Discussion</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-4 text-center">
                    <h1 class="text-white mb-3 text-center">Reached to us</h1>
                    <ul class="list-unstyled">
                        <li class="nav-item mx-md-0 mx-auto mb-2 text-center"><a class="nav-link text-white fs-4"
                                href="https://www.facebook.com/profile.php?id=100071594923884" target="_blank"><i
                                    class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2 text-center"><a class="nav-link text-white fs-4"
                                href="https://www.instagram.com/itxxsaiff/" target="_blank"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2 text-center"><a class="nav-link text-white fs-4"
                                href="https://www.linkedin.com/in/saif-ur-rehman-954a54280/" target="_blank"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="nav-item mx-md-0 mx-auto mb-2 text-center"><a class="nav-link text-white fs-4"
                                href="#" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
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
                    <p class="text-white fs-5">© 2023 Guest Book, All rights reserved by <span
                            class="fw-bold text-uppercase">Saif ur Rehman</span></p>
                </div>
            </div>
        </div>
    </footer>


    <script>
    const qbtn = document.querySelector('.question_sbmit');
    const qform = document.querySelector('form');
    const qarea = document.querySelector('textarea')
    qform.onsubmit = (e) => {
        e.preventDefault();
    }
    qbtn.onclick = () => {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '_all_inner/_questions.php', true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const qdata = xhr.response;
                    if (qdata.match('Error')) {
                        qarea.classList.add('is-invalid');
                    } else {
                        window.location.reload();
                    }
                }
            }
        }
        const qformData = new FormData(qform);
        xhr.send(qformData);
    }
    </script>

</body>

</html>