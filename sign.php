<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        include './header.php';
    ?>

    <div id="wrap">
        <div class="form">
            <div class="title">
                <h1>SIGN UP</h1>
                <h2>회원가입</h2>
            </div>

            <div>
                <p>아이디</p>
                <div>
                    <input type="text" name="" id="">
                    <p class="btnSmall red">중복확인</p>
                </div>
            </div>

            <div>
                <p>비멀번호</p>
                <input type="password" name="" id="">
            </div>

            <div>
                <p>이름</p>
                <input type="text" name="" id="">
            </div>

            <p class="btn red">가입하기</p>
        </div>
    </div>

    <?php
        include './footer.php';
    ?>
</body>
</html>