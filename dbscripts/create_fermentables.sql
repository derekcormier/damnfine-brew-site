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


# Penny Weize Lb. Foolish

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (9, 1, 'Wheat Malt', '6.5 lbs.', 53);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (9, 2, 'Dark Munich', '5 lbs.', 41);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (9, 3, 'CaraMunich', '10 oz.', 5);

# MacGreggors Brew: Fall Classic

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (10, 1, '2-Row', '7 lbs.', 70);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (10, 2, 'Caramel 60L', '1 lb.', 10);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (10, 3, 'Victory', '1 lb.', 10);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (10, 4, 'Dark Brown Sugar', '1 lb.', 10);

# Sasquatch Piss

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (11, 1, '2-Row', '9 lbs.', 85);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (11, 2, 'Caramel 40L', '12 oz.', 7);

INSERT INTO fermentables (beer_id, list_order, fermentable, amount, percent)
VALUES (11, 3, 'Corn Sugar', '12 oz.', 7);
