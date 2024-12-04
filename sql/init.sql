USE Website;

CREATE TABLE IF NOT EXISTS users (
    login VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    PRIMARY KEY (login)
);

CREATE TABLE IF NOT EXISTS posts (
    post_id INT AUTO_INCREMENT NOT NULL,
    author_login VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (post_id),
    FOREIGN KEY (author_login) REFERENCES users(login) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS likes (
    like_id INT AUTO_INCREMENT NOT NULL,
    user_login VARCHAR(255) NOT NULL,
    post_id INT NOT NULL,
    liked_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (like_id),
    FOREIGN KEY (user_login) REFERENCES users(login) ON DELETE CASCADE,
    FOREIGN KEY (post_id) REFERENCES posts(post_id) ON DELETE CASCADE,
    UNIQUE (user_login, post_id)
);

CREATE TABLE IF NOT EXISTS sessions (
    token VARCHAR(255) NOT NULL,
    user_login VARCHAR(255) NOT NULL,
    expiration DATETIME NOT NULL,
    PRIMARY KEY (token),
    FOREIGN KEY (user_login) REFERENCES users(login) ON DELETE CASCADE
);