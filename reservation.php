<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reservation.css">
</head>

<body>
    <div class="modal" id="exModal">
        <div class="form">
            <div class="title">
                <h1>EXPERIENCE</h1>
                <h2>체험신청</h2>
            </div>

            <div>
                <p>체험이름</p>
                <input type="text" name="" id="">
            </div>

            <div>
                <p>담당자</p>
                <input type="text" name="" id="">
            </div>

            <div>
                <p>신청인원</p>
                <input type="text" name="" id="">
            </div>

            <div>
                <p>리뷰</p>
                <input type="text" name="" id="">
            </div>

            <p class="btnSmall red">예약하기</p>
        </div>
    </div>

    <?php
    include './header.php';
    ?>

    <div id="wrap">
        <div id="reservation">
            <div class="title">
                <h1>RESERVATION</h1>
                <h2>예약</h2>
            </div>

            <div id="reservationNav">
                <input type="text" name="" id="">
                <p class="btnSmall red">검색</p>
                <p class="btnSmall red">전체일정보기</p>
            </div>

            <div id="reservationList">

                <div>
                    <p><b>도자기 만들기 체험</b></p>
                    <p>김도예</p>
                    <p>2024-07-25</p>
                    <p>14:00 - 16:00</p>
                </div>
                <div>
                    <p><b>숲속 요가 클래스</b></p>
                    <p>이요가</p>
                    <p>2024-07-26</p>
                    <p>10:00 - 11:30</p>
                </div>
                <div>
                    <p><b>전통 茶 체험</b></p>
                    <p>박다향</p>
                    <p>2024-07-27</p>
                    <p>15:00 - 17:00</p>
                </div>
            </div>
        </div>

        
    </div>


    <?php
    include './footer.php';
    ?>

</body>

</html>