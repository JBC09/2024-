// const imgWrap = document.querySelector("#imgWrap");


// fetch("./hot.json")
// .then((res) => res.json())
// .then((data) => {
    
//     console.log(data);
//     data.imgs.forEach(element => {
//         const div = document.createElement("div");

//         div.style.backgroundImage = `url('./images/hotplace/${element.name}')`

//         imgWrap.appendChild(div);
//     });
                                                                             
// })


const viewHidden = document.querySelector("#viewHidden");
const view360 = document.querySelector("#view360");
const wall = document.querySelectorAll(".wall");
const draggables = document.querySelectorAll('.draggable');


let startX = 0;
let startY = 0;


let rotateX = 0;
let rotateY = 0;

let select = false;


viewHidden.addEventListener("mousedown", (e)=>{
    startX = e.offsetX;
    startY = e.offsetY;
    select = true;
})

addEventListener("mouseup", ()=>{
    select = false;
})

viewHidden.addEventListener("mouseup",(e)=>{
    rotateX += startX - e.offsetX;
    rotateY += e.offsetY - startY;

    const div = document.createElement("div");
    
    div.classList.add("box");
  


    view360.appendChild(div);

    div.style.transform = `
    rotateX(${ rotateY  / 5}deg)
    rotateY(${ rotateX  / 5}deg)
    translateZ(100px);
    `;
})

view360.addEventListener("mousedown",(e)=>{
    e.stopPropagation();

    viewHidden.dispatchEvent(new MouseEvent("mousedown", e))
})

view360.addEventListener("mouseup",(e)=>{
    e.stopPropagation();

    viewHidden.dispatchEvent(new MouseEvent("mouseup", e))
})

view360.addEventListener("mousemove",(e)=> {
    e.stopPropagation();    

    viewHidden.dispatchEvent(new MouseEvent("mousemove", e))
})

viewHidden,addEventListener("mousemove", (e)=>{

    if(select) {
        view360.style.transform = `perspective(299px) 
        rotateX(${(rotateY + (e.offsetY - startY)) / 5}deg)
        rotateY(${(rotateX + (startX - e.offsetX)) / 5}deg)`;

        const boxs = document.querySelectorAll(".box");


        
        draggables.forEach(draggable => {
            const moveX = (e.offsetX - startX) / 30;
            const moveY = (e.offsetY - startY) / 30;

            draggable.style.left = `${draggable.offsetLeft + moveX}px`;
            draggable.style.top = `${draggable.offsetTop + moveY}px`;

            wrapAroundBounds(draggable);
        });
    }
    
})



// 키워드 및 차트
const keywordData = {
    "data": [
        {"word": "경북여행", "frequency": "55852"},
        {"word": "경북", "frequency": "31322"},
        {"word": "후기", "frequency": "37088"},
        {"word": "추천", "frequency": "9314"},
        {"word": "호텔", "frequency": "6879"},
        {"word": "맛집추천", "frequency": "8330"},
        {"word": "경주", "frequency": "6286"},
        {"word": "숙소", "frequency": "5732"},
        {"word": "여행지", "frequency": "5732"},
        {"word": "유네스코", "frequency": "4807"},
        {"word": "독도", "frequency": "3292"},
        {"word": "울릉도", "frequency": "4650"},
        {"word": "경북축제", "frequency": "3180"},
        {"word": "문화유산", "frequency": "3074"},
        {"word": "펜션", "frequency": "3088"},
        {"word": "황리단길", "frequency": "2872"},
        {"word": "주산지", "frequency": "2583"},
        {"word": "등산코스", "frequency": "2314"},
        {"word": "코스", "frequency": "2347"},
        {"word": "내돈내산", "frequency": "2236"},
        {"word": "리조트", "frequency": "2171"},
        {"word": "주왕산", "frequency": "2059"},
        {"word": "영주", "frequency": "1983"},
        {"word": "가족", "frequency": "1911"},
        {"word": "이용", "frequency": "1871"},
        {"word": "예약", "frequency": "1783"},
        {"word": "사진", "frequency": "1775"},
        {"word": "숙박", "frequency": "1723"},
        {"word": "부석사", "frequency": "1529"},
        {"word": "블로그", "frequency": "1434"}
    ]
};

const wordcloud = document.getElementById('wordcloud');
const keywordTable = document.getElementById('original').getElementsByTagName('tbody')[0];
const chart = document.getElementById('chart');
const leftButton = document.getElementById('leftButton');
const rightButton = document.getElementById('rightButton');

let selectedKeywords = keywordData.data.map(item => item.word);
let chartOffset = 0;

function getRandomColor() {
    return `rgba(255, 103, 0,${Math.random() * 1 + 0.3})`;
}

function createWordCloud() {
    wordcloud.innerHTML = '';
    const maxFrequency = Math.max(...selectedKeywords.map(word => 
        parseInt(keywordData.data.find(item => item.word === word).frequency)));
    const minFontSize = 24;

    selectedKeywords.forEach((word, index) => {
        const keywordItem = keywordData.data.find(item => item.word === word);
        const frequency = parseInt(keywordItem.frequency);
        const fontSize = Math.max(64 - (maxFrequency - frequency) / 1000, minFontSize);
        const angle = (index / selectedKeywords.length) * 2 * Math.PI;
        const radius = 250 * (1 - index / selectedKeywords.length);

        const keywordElem = document.createElement('div');
        keywordElem.className = 'keyword';
        keywordElem.textContent = word;
        keywordElem.style.fontSize = `${fontSize}px`;
        keywordElem.style.color = keywordItem.color || (keywordItem.color = getRandomColor());
        keywordElem.style.left = `${300 + radius * Math.cos(angle) + 20}px`;
        keywordElem.style.top = `${300 + radius * Math.sin(angle)}px`;

        const popup = document.createElement('div');
        popup.className = 'popup';
        popup.textContent = `검색 빈도: ${frequency}`;
        keywordElem.appendChild(popup);

        keywordElem.addEventListener('mouseover', () => popup.style.display = 'block');
        keywordElem.addEventListener('mouseout', () => popup.style.display = 'none');

        wordcloud.appendChild(keywordElem);
    });
}

function createKeywordTable() {
    keywordTable.innerHTML = '';
    keywordData.data.forEach(item => {
        const row = keywordTable.insertRow();
        const cell1 = row.insertCell(0);
        const cell2 = row.insertCell(1);
        const cell3 = row.insertCell(2);

        cell1.textContent = item.word;
        cell1.style.color = item.color;
        cell2.textContent = item.frequency;

        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.checked = selectedKeywords.includes(item.word);
        checkbox.addEventListener('change', () => {
            if (checkbox.checked) {
                selectedKeywords.push(item.word);
            } else {
                if (selectedKeywords.length > 15) {
                    selectedKeywords = selectedKeywords.filter(w => w !== item.word);
                } else {
                    checkbox.checked = true;
                    return;
                }
            }
            createWordCloud();
            createChart();
        });
        cell3.appendChild(checkbox);
    });
}

function createChart() {
    chart.innerHTML = '';
    chart.appendChild(leftButton);
    chart.appendChild(rightButton);

    const displayedKeywords = selectedKeywords.slice(chartOffset, chartOffset + 15);
    const maxFrequency = Math.max(...displayedKeywords.map(word => 
        parseInt(keywordData.data.find(item => item.word === word).frequency)));
    const chartHeight = 380;

    displayedKeywords.forEach((word, index) => {
        const keywordItem = keywordData.data.find(item => item.word === word);
        const frequency = parseInt(keywordItem.frequency);
        const height = (frequency / maxFrequency) * chartHeight;

        const bar = document.createElement('div');
        bar.className = 'bar';
        bar.style.height = `${height}px`;
        bar.style.backgroundColor = keywordItem.color;
        bar.style.left = `${index * 50 + 90}px`;

        const label = document.createElement('div');
        label.className = 'bar-label';
        label.textContent = word;

        bar.appendChild(label);
        chart.appendChild(bar);

        bar.addEventListener('mouseover', () => {
            const popup = document.createElement('div');
            popup.className = 'popup';
            popup.textContent = `검색 빈도: ${frequency}`;
            popup.style.bottom = `${height + 5}px`;
            popup.style.left = '50%';
            bar.appendChild(popup);
        });

        bar.addEventListener('mouseout', () => {
            const popup = bar.querySelector('.popup');
            if (popup) bar.removeChild(popup);
        });
    });

    leftButton.style.display = chartOffset > 0 ? 'block' : 'none';
    rightButton.style.display = chartOffset + 15 < selectedKeywords.length ? 'block' : 'none';
}

leftButton.addEventListener('click', () => {
    if (chartOffset > 0) {
        chartOffset--;
        createChart();
    }
});

rightButton.addEventListener('click', () => {
    if (chartOffset + 15 < selectedKeywords.length) {
        chartOffset++;
        createChart();
    }
});

// // 초기 함수 호출
// createWordCloud();
// createKeywordTable();
// createChart();
const wrap = document.getElementById('dragWrap');

draggables.forEach(draggable => {
    // 각 드래그 가능한 div를 랜덤 위치에 배치
    draggable.style.left = `${Math.random() * (wrap.clientWidth - 50)}px`;
    draggable.style.top = `${Math.random() * (wrap.clientHeight - 50)}px`;

});



function wrapAroundBounds(draggable) {
    const wrapRect = wrap.getBoundingClientRect();
    const dragRect = draggable.getBoundingClientRect();

    // 가로 방향으로 경계를 넘을 때 반대편으로 이동
    if (dragRect.left < wrapRect.left) {
        draggable.style.left = `${wrapRect.width - dragRect.width}px`;
    } else if (dragRect.right > wrapRect.right) {
        draggable.style.left = `0px`;
    }

    // 세로 방향으로 경계를 넘을 때 반대편으로 이동
    if (dragRect.top < wrapRect.top) {
        draggable.style.top = `${wrapRect.height - dragRect.height}px`;
    } else if (dragRect.bottom > wrapRect.bottom) {
        draggable.style.top = `0px`;
    }
}