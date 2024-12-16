<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/experience.css">
</head>

<body>
    <?php
    include './header.php';
    ?>

    <div class="modal" id="appModal">
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

    <div id="wrap">

        <div class="container">
            <div class="title">
                <h1>EXPERIENCE</h1>
                <h2>체험</h2>
            </div>

            <section class="search-area">
                <input type="text" id="search-input" placeholder="체험 이름을 입력하세요">
                <p id="search-btn" class="btnSmall red">검색</p>
                <p id="all-schedule-btn" class="btnSmall red">전체 일정 보기</p>
            </section>

            <section class="experience-list">
                <table id="original">
                    <thead>
                        <tr>
                            <th>체험 이름</th>
                            <th>담당자</th>
                            <th>운영일자</th>
                            <th>운영시간</th>
                        </tr>
                    </thead>
                    <tbody id="experience-tbody">
                        <tr>
                            <td>문화체험</td>
                            <td>정찬빈</td>
                            <td>2024-10-03</td>
                            <td>08시</td>
                        </tr>

                        <tr>
                            <td>문화체험</td>
                            <td>정찬빈</td>
                            <td>2024-10-03</td>
                            <td>08시</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>

        <!-- 모달 창 -->

    </div>


    <?php
    include './footer.php';
    ?>
</body>

</html>