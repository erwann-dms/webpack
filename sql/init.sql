USE Website

CREATE TABLE IF NOT EXISTS users (
    login VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    PRIMARY KEY (login)
);

