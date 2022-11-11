CREATE TABLE news (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    n_title VARCHAR(100) NOT NULL,
    n_content MEDIUMBLOB,
    n_company VARCHAR(30) NOT NULL,
    reg DATE DEFAULT NOW(),
    click INT DEFAULT 0,
    source VARCHAR(100) NOT NULL
);

INSERT INTO news (n_title,  n_company, source) VALUES ('삼각 편대와 새얼굴, 권영민 감독 데뷔전 승리', '일간스포츠', 'https://sports.news.naver.com/news?oid=241&aid=0003236241');
INSERT INTO news (n_title,  n_company, source) VALUES ('한전 \'야전사령관\' 김광국의 꿈 \'우승 세터 한 번 해봐야죠\'', '뉴스1', 'https://www.news1.kr/articles/?4735365');
INSERT INTO news (n_title,  n_company, source) VALUES ('첫 성인 대표팀 발탁 박찬웅 "세리머니 기대해 주세요"', '더 스파이크', 'https://sports.news.naver.com/news?oid=530&aid=0000007940');
INSERT INTO news (n_title,  n_company, source) VALUES ('한전 빅스톰 선수단 \'홍천 배구 꿈나무\' 육성 나선다', '강원도민일보', 'https://sports.news.naver.com/news?oid=654&aid=0000012682');
INSERT INTO news (n_title,  n_company, source) VALUES ('[김기자의 V토크] 한국전력 이끄는 왼손 듀오 "끝까지 간다"', '중앙일보', 'https://sports.news.naver.com/news?oid=025&aid=0003198451');