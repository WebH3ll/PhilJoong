<?php
    include_once "sqlstart.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        html,
        body {
          height: 100%;
          background-color: rgb(242, 242, 242);
        }

        .container {
            height: 80%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgb(242, 242, 242);
        }
        .logincontainer {
            
            width: 400px; 
            display: flex;
            flex-direction: column;
            border: groove 2px rgb(242,242,242);
            border-radius: 3px;
            background-color: rgb(255, 255, 255);
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>   

</head>
<body style="overflow-x: hidden">
<div class="container">
    <p><p> 
        <a href="/main.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <p class="fs-1 fw-bold text-black mx-3 my-2">WeBHell</p>
        </a>
    </p></p>
  <div class="logincontainer p-5">
  <form method="post" action="login.php">
    <div class="form-floating mb-3">
        <input type="id" class="form-control" id="floatingInput" name="id" placeholder="아이디">
        <label for="floatingInput">아이디</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="비밀번호">
        <label for="floatingPassword">비밀번호</label>
    </div>
    <button class="btn btn-primary my-4" type="submit">로그인</button>  
    </form">
    <footer> 
        <ul class = "nav justify-content-center">
            <a href='#123'>아이디 찾기</a> |
            <a href='#123'>비밀번호 찾기</a> |
            <a href='join.php'>회원가입</a>
        </ul>
    </footer>
  </div>
</div>
        <?php include "foot2.php"; ?>
</body>
</html>

