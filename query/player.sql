CREATE TABLE player (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    p_name VARCHAR(10) NOT NULL,
    p_number VARCHAR(2) NOT NULL,
    position CHAR(2) NOT NULL,
    height INT NOT NULL,
    weight INT NOT NULL,
    reg YEAR(4) NOT NULL,
    school_1 VARCHAR(10),
    school_2 VARCHAR(10),
    school_3 VARCHAR(10),
    school_4 VARCHAR(10),
    birth DATE
);

INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('서재덕','LE','1','194','94','2011','','문흥중','전자공고','성균관대', '1989-07-21');
INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('임성진','LE','14','195','85','2020','','제천중','제천산업고','성균관대', '1999-01-11');
INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('공재학','LE','13','194','87','2017','','문흥중','광주전자공고','인하대', '1991-06-27');
INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('이시몬','LE','7','192','86','2015','','','','홍익대', '1992-11-09');
INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('강우석','LE','9','188','72','2021','','','','성균관대', '1999-01-16');
INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('타이스','LE','4','204','95','2022','','','','', '1991-09-18');
INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('신영석','CE','20','200','93','2008','','인장중','인창고','경기대', '1986-10-04');
INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('박지윤','CE','18','197','92','2019','','남성중','남성고','성균관대', '1996-03-04');
INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('박찬웅','CE','17','196','78','2020','','연현중','영생고','한양대', '1997-08-13');
INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('조근호','CE','11','199','89','2018','','부안중','평촌고','경기대', '1990-05-23');
INSERT INTO player (p_name, position, p_number, height, weight, reg, school_1, school_2, school_3, school_4, birth) VALUES ('박태환','CE','19','196','81','2018','','','송림고','한양대', '1995-01-05');