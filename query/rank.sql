CREATE TABLE rank (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    team_name VARCHAR(16) NOT NULL,
    win INT NOT NULL DEFAULT 0,
    lose INT NOT NULL DEFAULT 0,
    set_win INT NOT NULL DEFAULT 0,
    set_lose INT NOT NULL DEFAULT 0,
    point INT NOT NULL DEFAULT 0
);

INSERT INTO rank (team_name) VALUES ('대한항공');
INSERT INTO rank (team_name) VALUES ('한국전력');
INSERT INTO rank (team_name) VALUES ('우리카드');
INSERT INTO rank (team_name) VALUES ('현대캐피탈');
INSERT INTO rank (team_name) VALUES ('KB손해보험');
INSERT INTO rank (team_name) VALUES ('OK금융그룹');
INSERT INTO rank (team_name) VALUES ('삼성화재');