CREATE TABLE rank (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    team_name VARCHAR(16) NOT NULL,
    win INT NOT NULL DEFAULT 0,
    lose INT NOT NULL DEFAULT 0,
    set_win INT NOT NULL DEFAULT 0,
    set_lose INT NOT NULL DEFAULT 0
);