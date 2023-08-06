<?php 

    include('_all_inner/_connection_to_db.php');
  session_start();
  if($_SESSION['loggedin'] !== true){
    header("Location: login.php");
  }

  $qno = $_GET['queno'];
  $catid = $_GET['catid'];
  $breadcrumbs = array();
  $breadcrumbs[] = array("label" => "Home", "url" => "home.php");
  $breadcrumbs[] = array("label" => "Questions", "url" => "questions.php?catid=$catid");
  $breadcrumbs[] = array("label" => "Comments", "url" => "comment.php?catid=$catid&queno=$qno");


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
    <title>GUEST BOOK - Comment</title>
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


    <!-- Discussion Question   -->
    <section class="discussion_question py-5">
        <div class="container">
            <div class="row">
                <?php 
                            $sql = "SELECT * FROM users_questions WHERE que_id = '$qno'";
                            $result = mysqli_query($_conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            $username = $row['que_username'];
                        $qtime = $row['que_time'];
                        $que = $row['que'];
                        $queid = $row['que_id'];
                        echo "<div class='col-12 border border-2 border-primary rounded-5 pt-4 px-3'>
                        <h5>Asked by : " . $username . "</h5>
                        <div class='fs-3 fw-bold text-center'>" . $que . "</div>
                        <p class='text-muted text-end mt-3'>" . $qtime .  "</p>
                    </div>";
                            ?>

            </div>
        </div>
    </section>


    <!-- Comment section  -->
    <section class="all_comments py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="fs-1 fw-bold text-capitalize">Comment on This Question</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <hr width="50%" class="mx-auto text-dark">
                </div>
            </div>
            <div class="row">
                <div class="cmnt_box">
                    <div class="col-12">
                        <form class="comment_form">
                            <div class="row">
                                <div class="col-12">
                                    <label class="fw-bold mb-3">Enter Your Comment :</label>
                                    <textarea class="form-control py-3 px-3" rows="2" cols="10" name="comment"
                                        placeholder="Comment...."></textarea>
                                    <input type="hidden" name="qid" value="<?php echo $qno; ?>">
                                    <input type="hidden" name="cmntuser" value="<?php echo $_SESSION['username']; ?>">
                                    <input type="hidden" name="quser" value="<?php echo $username; ?>">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary fw-bold mt-4 cmnt_btn ms-auto px-5 w-100">Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row comments mt-5">
                <div class="col-12">
                    <?php
                        $perPage = 5;
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $offset = ($page - 1) * $perPage;
                        $sql3 = "SELECT * FROM users_comments WHERE q_id = '$qno' LIMIT $perPage OFFSET $offset";
                        $result3 = mysqli_query($_conn, $sql3);
                        $num3 = mysqli_num_rows($result3);
                        $sql2 = "SELECT * FROM users_comments WHERE q_id = '$qno'";
                        $result2 = mysqli_query($_conn, $sql2);
                        $num2 = mysqli_num_rows($result2);
                        $totalpages = ceil($num2/$perPage);
                        if($num3 > 0){
                            while($row3 = mysqli_fetch_assoc($result3)){
                                $comment = $row3['comnt'];
                                $commented_by = $row3['comnt_user'];
                                $comment_time = $row3['c_time'];
                                $comment_id = $row3['c_id'];
                                echo "<div class='user_question pt-2 px-3 border border-3 rounded-3 border-primary mb-4'>
                                <div class='row d-flex justify-content-start'>
                                    <div class='col-md-1 text-center mb-md-0 mb-3'>
                                    <i class='fa-solid fa-comment display-2 text-primary'></i>
                                    </div>
                                    <div class='col-md-8'><h5>";
                                    if($commented_by === $_SESSION['username']){
                                        echo "Your Comment!";
                                    }else{
                                        echo $commented_by . ':';
                                    } echo "</h5><p class='mt-3'> $comment </p></div>";
                                    if($commented_by === $_SESSION['username']){
                                        echo "<div class='col-md-3'><form class='delete_form'>
                                        <input type='hidden' value='". $comment_id . "' name='commentno'>
                                        <button class='btn btn-sm btn-primary w-100 fw-bold del_comment'>Delete Comment</button>
                                        </form>";
                                        echo "<a href='reply.php?catid=$catid&queno=$qno&commentno=$comment_id' class='btn mt-3 w-100 btn-sm btn-primary fw-bold reply_btn'>Check Replies</a>";
                                    }else{
                                        echo "<div class='col-md-3'><a href='reply.php?catid=$catid&queno=$qno&commentno=$comment_id' class='btn btn-primary fw-bold w-100 reply_btn'>Reply</a>";
                                    }
                                     echo "</a><p class='mt-2 text-muted text-end'> $comment_time </p></div>
                                </div>
                            </div>";
                            }
                        }else{
                            echo "<div class='col-12 text-center py-5 fw-bold'>There is no comment by any users on this Question. Be the first person to Comment!</div>";
                        }
                     ?>
                </div>
            </div>
              <!-- Pagination -->
              <div class="row">
                <div class="col-12 text-center">
                    
        <nav aria-label="Page navigation example" class="mx-auto">
            <ul class="pagination">
                    <li class="page-item border border-primary  <?php if (!isset($_GET['page']) || $page == 1){ echo 'disabled'; } ?> ?>"><a class="page-link" href="comment.php?catid=<?php echo $catid; ?>&queno=<?php echo $qno; ?>&page=<?php echo $page - 1; ?>">Previous</a></li>
                <?php
                    for ($i = 1; $i <= $totalpages; $i++):
                        ?>
                           <li class="page-item border  border-primary <?php echo $page == $i ? : ''; ?>"><a class="page-link" href="comment.php?catid=<?php echo $catid; ?>&queno=<?php echo $qno; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                       <?php endfor;
                  ?>
                    <li class="page-item border  border-primary <?php if (!($page < $totalpages)){ echo 'disabled'; } ?>"><a class="page-link" href="comment.php?catid=<?php echo $catid; ?>&queno=<?php echo $qno; ?>&page=<?php echo $page + 1; ?>">Next</a></li>
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
    const cbtn = document.querySelector('.cmnt_btn');
    const cform = document.querySelector('.comment_form');
    const carea = document.querySelector('textarea')
    cform.onsubmit = (e) => {
        e.preventDefault();
    }
    cbtn.onclick = () => {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '_all_inner/_comment.php', true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const cdata = xhr.response;
                    if (cdata.match('Error')) {
                        carea.classList.add('is-invalid');
                    } else {
                        window.location.reload();
                    }
                }
            }
        }
        const cformData = new FormData(cform);
        xhr.send(cformData);
    }

    const del_Form = document.querySelector('.delete_form');
    const cmnt_del = document.querySelector('.del_comment');
    del_Form.onsubmit = (e) => {
        e.preventDefault();
    }
    cmnt_del.onclick = () => {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'commet_delete.php', true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const ddata = xhr.response;
                    if (ddata.match('Success')) {
                        window.location.reload();
                    }else{
                        console.log('Error');
                    }
                }
            }
        }
        const dformData = new FormData(del_Form);
        xhr.send(dformData);
    }


    </script>
</body>

</html>