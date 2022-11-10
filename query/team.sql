CREATE TABLE team (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    team_name VARCHAR(16) NOT NULL,
    stadium VARCHAR(16) NOT NULL
);


// DATA

INSERT INTO team (team_name, stadium) VALUES('대한항공','인천계양');
INSERT INTO team (team_name, stadium) VALUES('한국전력','수원');
INSERT INTO team (team_name, stadium) VALUES('우리카드','서울장충');
INSERT INTO team (team_name, stadium) VALUES('삼성화재','대전충무');
INSERT INTO team (team_name, stadium) VALUES('현대캐피탈','천안유관순');
INSERT INTO team (team_name, stadium) VALUES('OK금융그룹','안산상록수');
INSERT INTO team (team_name, stadium) VALUES('KB손해보험','의정부');