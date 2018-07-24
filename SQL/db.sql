/**
 *  create the sql file
 */

-- table: 'users'
CREATE TABLE `users` (
    id INT(5) NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(25) NOT NULL,
    lastname VARCHAR(25) NOT NULL,
    email VARCHAR(35) NOT NULL,
    `role` VARCHAR(25) NOT NULL,
    PRIMARY KEY (id)
);

-- table: 'articles'
CREATE TABLE `articles` (
    id INT(5) NOT NULL AUTO_INCREMENT,
    id_user INT(5) NOT NULL,
    title VARCHAR(25) NOT NULL,
    content VARCHAR(255) NOT NULL,
    picture VARCHAR(50) NOT NULL DEFAULT 'default.jpg',
    date_publish DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) REFERENCES `users`(id)
);

/**
 *  insert something into the db
 */ 

-- 'users'
IarticlesarticlesNSERT INTO `users` (firstname, lastname, email, `role`)
VALUES ('dany', 'thill', 'dany.thill@live.com', 'admin');

-- 'articles'
INSERT INTO `articles` (id, id_user, title, content, picture, date_publish)
VALUES (10, 1, 'Saw something cool', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'somethingCool.jpg', NOW());