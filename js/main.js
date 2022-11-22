'use strict';

// 선수 초기 화면
document.getElementById("ply_desc").style.display = "block";
document.getElementById("plyLeft").style.background = "#f7a520"
document.getElementById("plyLeft").style.color = "#ffffff"

// 선수 화면 제어 함수문

function choosePosition (position,elmnt){
    let i, eachPosition, positionTitle;

    eachPosition = document.getElementsByClassName("player_list");
    for (i = 0; i < eachPosition.length; i++) {
        eachPosition[i].style.display = "none";
    }
    positionTitle = document.getElementsByClassName("position");
    for (i = 0; i < positionTitle.length; i++) {
        positionTitle[i].style.backgroundColor = "#ffffff";
        positionTitle[i].style.color = "#ef7c7e";
    }
    document.getElementById(position).style.display = "block";
    
}

// 선수 데이터 json
function loadData(idx, elmnt){
    const url = "/volleyball/common/player_data.txt";
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState === 4 && this.status === 200){
            const text = JSON.parse(this.responseText);
            const ply = text[idx];
            document.getElementById('ply_desc_name').textContent = ply.name;
            document.getElementById('ply_desc_position').textContent = ply.position;
            document.getElementById('ply_desc_birth').textContent = ply.birth;
            document.getElementById('ply_desc_reg').textContent = ply.register + "년";
            document.getElementById('ply_desc_school').textContent = ply.school;
            document.getElementById('ply_desc_body').textContent = ply.height + "cm / " + ply.weight + "kg";
            document.querySelector('#ply_desc_image > img').src = "/volleyball/images/player_fullshot/"+idx+".png";
        }
    }
    xhttp.open("GET", url);
    xhttp.send();

    let ply_back = document.querySelectorAll(".player_list li");
    for (let i = 0; i < ply_back.length; i++){
        ply_back[i].style.backgroundColor = "#ffffff";
    }    
    elmnt.style.backgroundColor = "rgb(247,165,32)";
}

// team_rank_table
// let my_team = document.getElementsByClassName("my_team");
// console.log(my_team);
// for(let i = 0; i < my_team.length; i++){
//     console.log(my_team[i].textContent);
//     // if(my_team[i].textContent === '한국전력'){
//     //     // my_team[i].classList += 'table_myteam';
//     // }
// }