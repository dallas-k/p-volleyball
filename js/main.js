// 선수 초기 화면
document.getElementById("ply_desc_seo1").style.display = "block";
document.getElementById("plyLeft").style.background = "#f7a520"
document.getElementById("plyLeft").style.color = "#ffffff"
document.querySelector(".player_list>li").style.backgroundColor = "#f7a520"


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
    elmnt.style.background = "#f7a520";
    elmnt.style.color = "#ffffff"
    
}

function choosePlayer (playerId, elmnt) {
    let i, eachPlayer, ply_back;

    eachPlayer = document.getElementsByClassName("ply_desc");
    for (i = 0; i < eachPlayer.length; i++) {
        eachPlayer[i].style.display = "none";
    }
    ply_back = document.querySelectorAll(".player_list li");
    for (i = 0; i < ply_back.length; i++){
        ply_back[i].style.backgroundColor = "#ffffff";
    }    

    document.getElementById(playerId).style.display = "block";
    elmnt.style.backgroundColor = "#f7a520"
}