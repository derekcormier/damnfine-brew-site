USE damnfinebrew_db;

CREATE TABLE extras (
	id INT NOT NULL AUTO_INCREMENT,
	beer_id INT NOT NULL,
	list_order TINYINT,
	name VARCHAR(200),
	amount VARCHAR(200),
	used VARCHAR(200),
	PRIMARY KEY( id )
) ENGINE=InnoDB;


# MacGreggors Brew Pale Ale

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (1, 1, 'Caramel 20L', '1 lb.', 'Steep');


# Lights Out Black IPA

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (2, 1, 'Victory', '8 oz.', 'Steep');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (2, 2, 'Caramel 80L', '8 oz.', 'Steep');


# Single C Chocolate Porter

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (3, 1, 'Unsweetened Cocoa Powder', '1 tablespoon', 'Boil');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (3, 2, 'Cocoa Nibs', '5 oz.', 'Secondary');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (3, 3, 'Canned Sour Cherries', '32 fl. oz.', 'Secondary');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (3, 4, 'Dried Crushed Chipotle Chili', '3 oz.', 'Secondary');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (3, 5, 'Well Vodka', 'Very Little', 'Soaking Additions');


# Double C Chocolate Cherry Porter

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (4, 1, 'Unsweetened Cocoa Powder', '1 tablespoon', 'Boil');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (4, 2, 'Cocoa Nibs', '5 oz.', 'Secondary');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (4, 3, 'Canned Sour Cherries', '32 fl. oz.', 'Secondary');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (4, 4, 'Dried Crushed Chipotle Chili', '3 oz.', 'Secondary');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (4, 5, 'Well Vodka', 'Very Little', 'Soaking Additions');


# Triple C Chocolate Cherry Chili Porter

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (5, 1, 'Unsweetened Cocoa Powder', '1 tablespoon', 'Boil');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (5, 2, 'Cocoa Nibs', '5 oz.', 'Secondary');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (5, 3, 'Canned Sour Cherries', '32 fl. oz.', 'Secondary');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (5, 4, 'Dried Crushed Chipotle Chili', '3 oz.', 'Secondary');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (5, 5, 'Well Vodka', 'Very Little', 'Soaking Additions');


# Rye Raven Rye Pale Ale

# NONE


# Transfusion Bloody Beer

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (7, 1, 'Tomatoes', 'Lots', 'Flavor');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (7, 2, 'Black Pepper', 'Too Much', 'Overpowering');

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (7, 3, 'Prepared Horseradish', 'Some', 'Not Sure');


# Cold! Refreshing! Grapefruit IPA

INSERT INTO extras (beer_id, list_order, name, amount, used)
VALUES (8, 1, 'Grapefruit Zest', '1 Fruit', 'Boil');