CREATE TABLE board (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    u_name VARCHAR(16) NOT NULL,
    title VARCHAR(200) NOT NULL,
    content TEXT NOT NULL,
    click INT DEFAULT 0,
    secret CHAR(1),
    sign_date DATETIME DEFAULT NOW(),
    edit_date DATETIME
);

INSERT INTO board (u_name, title, content, secret) VALUES ('가을', '장점', '솔직한 거야', 'N');
INSERT INTO board (u_name, title, content, secret) VALUES ('태연', 'INVU', 'I Envy You', 'N');
INSERT INTO board (u_name, title, content, secret) VALUES ('민호', '불꽃', '불꽃카리스마 민호', 'N');
INSERT INTO board (u_name, title, content, secret) VALUES ('남궁민', '백동수', '백단장? 그는 내가 아는 사람 중 최고였어요', 'N');