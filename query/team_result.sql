CREATE TABLE result_daehan (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    enemy VARCHAR(16) NOT NULL,
    day DATE NOT NULL,
    win INT NOT NULL DEFAULT 0,
    lose INT NOT NULL DEFAULT 0,
    my_set INT NOT NULL DEFAULT 0,
    enemy_set INT NOT NULL DEFAULT 0,
    point INT NOT NULL DEFAULT 0
);

CREATE TABLE result_hanjun (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    enemy VARCHAR(16) NOT NULL,
    day DATE NOT NULL,
    win INT NOT NULL DEFAULT 0,
    lose INT NOT NULL DEFAULT 0,
    my_set INT NOT NULL DEFAULT 0,
    enemy_set INT NOT NULL DEFAULT 0,
    point INT NOT NULL DEFAULT 0
);

CREATE TABLE result_hyundai (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    enemy VARCHAR(16) NOT NULL,
    day DATE NOT NULL,
    win INT NOT NULL DEFAULT 0,
    lose INT NOT NULL DEFAULT 0,
    my_set INT NOT NULL DEFAULT 0,
    enemy_set INT NOT NULL DEFAULT 0,
    point INT NOT NULL DEFAULT 0
);

CREATE TABLE result_kb (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    enemy VARCHAR(16) NOT NULL,
    day DATE NOT NULL,
    win INT NOT NULL DEFAULT 0,
    lose INT NOT NULL DEFAULT 0,
    my_set INT NOT NULL DEFAULT 0,
    enemy_set INT NOT NULL DEFAULT 0,
    point INT NOT NULL DEFAULT 0
);
CREATE TABLE result_woori (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    enemy VARCHAR(16) NOT NULL,
    day DATE NOT NULL,
    win INT NOT NULL DEFAULT 0,
    lose INT NOT NULL DEFAULT 0,
    my_set INT NOT NULL DEFAULT 0,
    enemy_set INT NOT NULL DEFAULT 0,
    point INT NOT NULL DEFAULT 0
);
CREATE TABLE result_samsung (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    enemy VARCHAR(16) NOT NULL,
    day DATE NOT NULL,
    win INT NOT NULL DEFAULT 0,
    lose INT NOT NULL DEFAULT 0,
    my_set INT NOT NULL DEFAULT 0,
    enemy_set INT NOT NULL DEFAULT 0,
    point INT NOT NULL DEFAULT 0
);
CREATE TABLE result_ok (
    idx INT PRIMARY KEY AUTO_INCREMENT,
    enemy VARCHAR(16) NOT NULL,
    day DATE NOT NULL,
    win INT NOT NULL DEFAULT 0,
    lose INT NOT NULL DEFAULT 0,
    my_set INT NOT NULL DEFAULT 0,
    enemy_set INT NOT NULL DEFAULT 0,
    point INT NOT NULL DEFAULT 0
);