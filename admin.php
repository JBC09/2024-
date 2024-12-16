<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/admin.css">
</head>

<body>
    <?php
    include './header.php';
    ?>

    <div class="modal" id="">
        <div class="form">
            <div class="title">
                <h1>BOOTH</h1>
                <h2>부스</h2>
            </div>

            <div>
                <p>운영일자</p>
                <input type="date" name="" id="">
            </div>

            <div>
                <p>운영시간</p>
                <div>
                    <input type="time" name="" id=""> ~
                    <input type="time" name="" id="">
                </div>
            </div>

            <p class="btn red">부스생성</p>
        </div>
    </div>


    <div id="wrap">
        <div id="busMake">
            <div class="title">
                <h1>BOOTH MAKE</h1>
                <h2>부스생성</h2>
            </div>

            <div class="content">
                <p class="btnSmall red">부스생성하기</p>
            </div>
        </div>

        <!-- 승인영역 -->
        <div id="appOk">
            <div class="title">
                <h1>ACCEPT</h1>
                <h2>승인</h2>
            </div>

            <div class="content">
                <table id="original">
                    <thead>
                        <tr>
                            <th>운영일자</th>
                            <th>운영시간</th>
                            <th>최대인원</th>
                            <th>체험이름</th>
                            <th>승인여부</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024-08-15</td>
                            <td>10:00-12:00</td>
                            <td>20명</td>
                            <td>전통 도자기 만들기</td>
                            <td>
                                <button class="red">승인</button>
                                <button class="red">거절</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2024-08-16</td>
                            <td>14:00-16:00</td>
                            <td>15명</td>
                            <td>K-pop 댄스 클래스</td>
                            <td>승인완료</td>
                        </tr>
                        <tr>
                            <td>2024-08-17</td>
                            <td>13:00-15:00</td>
                            <td>25명</td>
                            <td>한국 요리 교실</td>
                            <td>
                                <button class="red">승인</button>
                                <button class="red">거절</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="black">
            <div class="title">
                <h1>BLACKLIST</h1>
                <h2>블랙리스트</h2>
            </div>

            <table id="original">
                <thead>
                    <tr>
                        <th>회원 아이디</th>
                        <th>사용한 비속어</th>
                        <th>등록 일시</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>user123</td>
                        <td>바보</td>
                        <td>2024-07-20 14:30</td>
                    </tr>
                    <tr>
                        <td>happy_traveler</td>
                        <td>멍청이</td>
                        <td>2024-07-21 09:15</td>
                    </tr>
                    <tr>
                        <td>adventure_seeker</td>
                        <td>바보</td>
                        <td>2024-07-22 16:45</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div id="experience">
            <div class="title">
                <h1>EXPERIENCE</h1>
                <h2>체험운영</h2>
            </div>

            <div class="content">
                <table id="original">
                    <thead>
                        <tr>
                            <th>체험이름</th>
                            <th>운영일자</th>
                            <th>운영시간</th>
                            <th>참가인원/최대인원</th>
                            <th>연장신청</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>전통 도자기 만들기</td>
                            <td>2024-07-25</td>
                            <td>13:00-16:00</td>
                            <td><a href="#" class="participant-list">15/20</a></td>
                            <td>
                                <div class="extension-request">
                                    <input type="number" min="1" max="3" placeholder="연장 시간(시간)">
                                    <button class="red">연장신청</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>K-pop 댄스 클래스</td>
                            <td>2024-07-26</td>
                            <td>14:00-17:00</td>
                            <td><a href="#" class="participant-list">12/15</a></td>
                            <td>
                                <div class="extension-request">
                                    <input type="number" min="1" max="2" placeholder="연장 시간(시간)">
                                    <button class="red">연장신청</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include './footer.php';
    ?>
</body>

</html>