CREATE TABLE members (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    u_name VARCHAR(16) NOT NULL,
    u_id VARCHAR(16) NOT NULL,
    pwd VARCHAR(16) NOT NULL,
    email VARCHAR(50),
    level CHAR(1),
    sign_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    email_subscribe CHAR(1) DEFAULT 'N',
    news_subscribe CHAR(1) DEFAULT 'N'
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