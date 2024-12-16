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
                <h1>LOGIN</h1>
                <h2>로그인</h2>
            </div>

            <div>
                <p>아이디</p>
                <input type="text" name="" id="">
           
            </div>

            <div>
                <p>비멀번호</p>
                <input type="password" name="" id="">
            </div>

            <div>
                <p>회원구분</p>
                <select name="" id="">
                    <option value="">관리자</option>
                    <option value="">담당자</option>
                    <option value="">일반회원</option>
                </select>
            </div>

            <p class="btn red">로그인</p>
        </div>
    </div>

    <?php
        include './footer.php';
    ?>
</body>
</html>