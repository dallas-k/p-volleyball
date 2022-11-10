CREATE TABLE photo_gallery (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL,
    // photocard
    category CHAR(2) NOT NULL // 경기, 선수, 기타
    sign_date DATETIME DEFAULT CURRENT_TIMESTAMP
    click INT NOT NULL DEFAULT 0
)