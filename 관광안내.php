<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/관광안내.css">
</head>
<body>
    <?php

        include './header.php'
    ?>

    <div id="wrap">
        <div id="관광안내">
            <div class="title">
                <h1>
                    TOUR INFORMATION</h1>
                <h2>관광안내</h2>
            </div>

            <div id="imgWrap">                                                                                                                                                                                                                                       
                
            </div>
                               
            
            <div id="edit">
                <div id="leftBar">
                    <h1>명소1</h1>

               
                    <input type="text" name="" id="" placeholder="핫플명">
                    <textarea name="" rows="5" placeholder="내용: " id=""></textarea>
                    <img src="./images/spot.png" alt="">
                   
                </div>


                <div id="viewHidden">
                    <div id="view360">
                        <div class="wall" id="front"></div>
                        <div class="wall" id="back"></div>
                        <div class="wall" id="left"></div>
                        <div class="wall" id="right"></div>
                        <div class="wall" id="top"></div>
                        <div class="wall" id="bottom"></div>
                    </div>


                    <div id="dragWrap">
                        <div class="draggable"></div>
                        <div class="draggable"></div>
                        <div class="draggable"></div>
                    </div>
                </div>

                <div id="rightBar">

                </div>
            </div>
        </div>


        <div>
            <div class="title">
                <h1>WORD CLOUD</h1>
                <h2>워드 클라우드</h2>
            </div>
            <div id="wordcloud"></div>
        </div>

        <div>
            <div class="title">
                <h1>TABLE</h1>
                <h2>표</h2>
            </div>
            <table id="original">
                <thead>
                    <tr>
                        <th>키워드</th>
                        <th>검색빈도수</th>
                        <th>선택</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

        <div>
            <div class="title">
                <h1>CHART</h1>
                <h2>차트</h2>
            </div>
            <div id="chart">
                    <button id="leftButton" class="chart-button">&lt;</button>
                    <button id="rightButton" class="chart-button">&gt;</button>
                </div>
            </div>
    </div>
    

    <script src="./js/관광안내.js"></script>
</body>
</html>