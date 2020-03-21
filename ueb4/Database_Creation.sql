
CREATE DATABASE IF NOT EXISTS Aufgabe4 CHARACTER SET utf8 COLLATE utf8_general_ci;
USE Aufgabe4;

CREATE TABLE IF NOT EXISTS shopping_list(
	article_id int(7) NOT NULL AUTO_INCREMENT,
	article_name varchar(50) NOT NULL,
	price_euro FLOAT NOT NULL,
	amount integer NOT NULL,
	PRIMARY KEY(article_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO shopping_list (article_name, price_euro, amount) VALUES
	('bananas', '0.92', '4'),
	('apples', '3.24', '9'),
        ('oranges', '2.93', '5'),
        ('pears', '3.45', '4');
        
