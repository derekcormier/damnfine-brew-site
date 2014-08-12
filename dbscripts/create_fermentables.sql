USE damnfinebrew_db;

CREATE TABLE fermentables (
	id INT NOT NULL AUTO_INCREMENT,
	beer_id INT NOT NULL,
	list_order TINYINT,
	fermentable VARCHAR(200),
	amount VARCHAR(30),
	percent TINYINT,
	PRIMARY KEY( id )
) ENGINE=InnoDB;


# MacGreggors Brew Pale Ale

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (1, 1, 'Light LME', '6.6 lb.', 100);


# Lights Out Black IPA

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (2, 1, 'Special Dark LME', '3.3 lb.', 43);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (2, 2, 'Amber LME', '3.3 lb.', 43);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (2, 3, 'Amber DME', '1 lb.', 14);


# Single C Chocolate Porter

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (3, 1, '2-Row', '4 lb.', 68);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (3, 2, 'Munich 20L', '1 lb.', 17);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (3, 3, 'Caramel 60L', '8 oz.', 8);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (3, 4, 'Chocolate Malt', '6 oz.', 6);


# Double C Chocolate Cherry Porter

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (4, 1, '2-Row', '4 lb.', 68);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (4, 2, 'Munich 20L', '1 lb.', 17);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (4, 3, 'Caramel 60L', '8 oz.', 8);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (4, 4, 'Chocolate Malt', '6 oz.', 6);


# Triple C Chocolate Cherry Chili Porter

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (5, 1, '2-Row', '4 lb.', 68);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (5, 2, 'Munich 20L', '1 lb.', 17);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (5, 3, 'Caramel 60L', '8 oz.', 8);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (5, 4, 'Chocolate Malt', '6 oz.', 6);


# Rye Raven Rye Pale Ale

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (6, 1, '2-Row', '5 lbs.', 76);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (6, 2, 'Rye', '1 lb.', 15);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (6, 3, 'Caramel 40L', '8 oz.', 7);


# Transfusion Bloody Beer

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (7, 1, 'Grains', 'Some', 100);


# Cold! Refreshing! Grapefruit IPA

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (8, 1, '2-Row', '11 lb.', 84);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (8, 2, 'Caramel 40L', '1 lb.', 7);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (8, 3, 'Carapils', '8 oz.', 3);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (8, 4, 'Victory', '8 oz.', 3);