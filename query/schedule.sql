CREATE TABLE schedule (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    game_date datetime not null,
    round INT NOT NULL,
    home_team VARCHAR(16) NOT NULL,
    away_team VARCHAR(16) NOT NULL,
    stadium VARCHAR(16) NOT NULL,
    home_score INT,
    away_scrore INT,
    result CHAR(1)
);

INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-10-22 14:00', 1, '대한항공', 'KB손해보험', '인천계양체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-10-23 14:25', 1, 'OK금융그룹', '한국전력', '안산상록수체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-10-25 19:00', 1, '삼성화재', '현대캐피탈', '대전충무체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-10-26 19:00', 1, 'OK금융그룹', '우리카드', '안산상록수체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-10-27 19:00', 1, 'KB손해보험', '한국전력', '의정부체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-10-28 19:00', 1, '현대캐피탈', '대한항공', '천안유관순체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-10-29 14:00', 1, '우리카드', '삼성화재', '서울장충체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-10-30 14:00', 1, 'KB손해보험', 'OK금융그룹', '의정부체육관');
-- 
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-01 19:00', 1, '대한항공', '삼성화재', '인천계양체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-02 19:00', 1, '한국전력', '현대캐피탈', '수원체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-03 19:00', 1, '우리카드', 'KB손해보험', '서울장충체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-04 19:00', 1, '삼성화재', 'OK금융그룹', '대전충무체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-05 14:00', 1, '대한항공', '한국전력', '인천계양체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-06 14:00', 1, '현대캐피탈', '우리카드', '천안유관순체육관');
--
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-08 19:00', 1, 'OK금융그룹', '대한항공', '안산상록수체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-09 19:00', 1, 'KB손해보험', '현대캐피탈', '의정부체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-10 19:00', 1, '한국전력', '삼성화재', '수원체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-11 19:00', 1, '우리카드', '대한항공', '서울장충체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-12 14:00', 1, '현대캐피탈', 'OK금융그룹', '천안유관순체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-13 14:00', 1, '삼성화재', 'KB손해보험', '대전충무체육관');
--
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-15 19:00', 1, '한국전력', '우리카드', '수원체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-16 19:00', 2, '대한항공', '현대캐피탈', '인천계양체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-17 19:00', 2, 'OK금융그룹', 'KB손해보험', '안산상록수체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-18 19:00', 2, '삼성화재', '우리카드', '대전충무체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-19 14:00', 2, '현대캐피탈', '한국전력', '천안유관순체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-20 14:00', 2, '대한항공', 'OK금융그룹', '인천계양체육관');
--
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-22 19:00', 2, 'KB손해보험', '삼성화재', '의정부체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-23 19:00', 2, '한국전력', 'OK금융그룹', '수원체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-24 19:00', 2, '우리카드', '현대캐피탈', '서울장충체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-25 19:00', 2, '삼성화재', '대한항공', '대전충무체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-26 14:00', 2, '한국전력', 'KB손해보험', '수원체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-27 14:00', 2, 'OK금융그룹', '현대캐피탈', '안산상록수체육관');
--
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-29 19:00', 2, '삼성화재', '한국전력', '대전충무체육관');
INSERT INTO schedule (game_date, round, home_team, away_team, stadium) VALUES ('2022-11-30 19:00', 2, '대한항공', '우리카드', '인천계양체육관');