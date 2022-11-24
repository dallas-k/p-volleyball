CREATE TABLE members (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    u_name VARCHAR(16) NOT NULL,
    u_id VARCHAR(16) NOT NULL,
    pwd VARCHAR(16) NOT NULL,
    email VARCHAR(50),
    level CHAR(1),
    reg_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    e_sub CHAR(1) DEFAULT 'N',
    n_sub CHAR(1) DEFAULT 'N'
);

INSERT INTO members (u_name, u_id, pwd, email,level) VALUES ('Administrator', 'admin', '1234', 'admin@hjvolleyball.com', '2');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('윈터', 'winter', 'winter123', 'winter@aespa.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('카리나', 'karina', 'karina123', 'karina@aespa.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('츄', 'chu', 'chu123', 'chu@luna.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('송중기', 'princesong', 'song123', 'song@actor.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('이민기', 'minki', 'minki123', 'minki@actor.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('남궁민', 'namgung', 'namgung123', 'namgung@actor.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('김지은', 'law115', 'back115', 'law115@actor.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('윤두준', 'dujun', 'dujun123', 'dujun@highlight.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('송강', 'songkang', 'songkang123', 'songkang@actor.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('김태연', 'tang', 'tang123', 'tang@snsd.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('티파니', 'tiffany', 'tiffany123', 'tiffany@snsd.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('장규리', 'kyuri', 'kyuri123', 'kyuri@frm9.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('우효', 'oohyo', 'oohyo123', 'oohyo@indie.com');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('청하', 'chungha', 'chungha123', 'chunga@pr101.com');

INSERT INTO members (u_name, u_id, pwd, email) VALUES ('홍길동', 'hong123', 'hong123', 'gildong@korea.co.kr');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('이순신', 'lee123', 'lee123', 'sunsing@korea.co.kr');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('세종대왕', 'sejong123', 'sejong123', 'idog@korea.co.kr');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('전봉준', 'jeon123', 'jeon123', 'nokdug@korea.co.kr');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('정조대왕', 'jeong123', 'jeong123', 'hwasung@korea.co.kr');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('장영실', 'jang123', 'jang123', 'youngsilg@korea.co.kr');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('강감찬', 'kang123', 'kang123', 'koreg@korea.co.kr');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('안중근', 'ahn123', 'ahn123', 'jungun@korea.co.kr');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('유관순', 'yoo123', 'yoo123', 'gwansoong@korea.co.kr');
INSERT INTO members (u_name, u_id, pwd, email) VALUES ('허준', 'heo123', 'heo123', 'doctorg@korea.co.kr');