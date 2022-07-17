<?php session_start(); ?>

<header class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
    <a href="/main.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <p class="fs-1 fw-bold text-black mx-3 my-2">WeBHell</p>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
    <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
    <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
    <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
    <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
    </ul>

    <?php if(!$_SESSION['islogin']) { ?>
      <div class="col-md-3 text-end">
      <button type="button" class="btn btn-outline-primary me-2" onClick="location.href='loginmain.php'">로그인</button>
      <button type="button" class="btn btn-primary" onClick="location.href='join.php'">회원가입</button>
      </div>
    <?php } else { ?>
      <div class="col-md-3 text-end">
      <button type="button" class="btn btn-outline-primary me-2" onClick="location.href='logout.php'">로그아웃</button>
      </div>
    <?php } ?>
</header>