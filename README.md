# Student-Management-System
a simple *PHP project with MVC pattern* using **Symfony Components**.

## Installation

First your need to clone or download my repo,

```
git clone https://github.com/LinPaing21/Student-Management-System.git
cd Student-Management-System
composer install
cp database-example.php database.php
```
In database.php, you need to config with your database.

Then, create table and put my example data.
```
CREATE TABLE `students` (
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `gender` CHAR(6) NOT NULL,
    `dob` DATE NOT NULL,
    `age` TINYINT UNSIGNED
);
```

```
INSERT INTO `students` (`name`, `email`, `gender`, `dob`, `age`)
VALUES ("John", "john12@gmail.com", "male", "2000-02-11", 23);

INSERT INTO `students` (`name`, `email`, `gender`, `dob`, `age`)
VALUES ("MgMg", "mgmg12@gmail.com", "male", "2001-02-11", 22),
("Mary", "mary20@gmail.com", "male", "2003-1-12", 20);

INSERT INTO `students` (`name`, `email`, `gender`, `dob`, `age`)
VALUES ("James", "james2@gmail.com", "male", "2002-02-11", 21),
("Alfred", "coolAlfred0@gmail.com", "male", "2000-4-12", 23);
```

Make sure your database is active and then run this command in project directory.

```
php -S localhost:8000

(or)

php -S localhost:8000 index.php
```
