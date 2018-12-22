# Sample for MySQL

CREATE TABLE users (
  id INTEGER UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
  full_name VARCHAR(50) NOT NULL,
  created_at DATETIME,
  updated_at DATETIME,
  deleted_at DATETIME
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;

INSERT INTO users VALUES (1, 'John Swith', now(), now(), NULL);