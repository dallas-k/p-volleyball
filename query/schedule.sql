CREATE TABLE schedule (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    // game_date,
    round VARCHAR(11) NOT NULL,
    home_team VARCHAR(16) NOT NULL,
    away_team VARCHAR(16) NOT NULL,
    stadium VARCHAR(16) NOT NULL,
    home_score INT,
    away_scrore INT,
    result CHAR(1) // h,a
)