CREATE DATABASE IF NOT EXISTS gruppe5 CHARACTER SET utf8 COLLATE utf8_general_ci;
USE gruppe5;

CREATE TABLE IF NOT EXISTS goods(
		id int(8) NOT NULL AUTO_INCREMENT,
		productname varchar(64) NOT NULL,
		price FLOAT NOT NULL,
		category varchar(64) NOT NULL,
		PRIMARY KEY(id)
	)
	ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO goods (productname, price, category) VALUES
	('butter', '1.79', 'dairy products'),
	('milk', '0.79', 'dairy products'),
    ('strawberry-cheesecake', '32.75', 'confectionery products'),
	('orange juice', '3.49', 'drink'),
	('cherry-banana juice', '2.49', 'drink'),
	('apple juice', '1.49', 'drink');