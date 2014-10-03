USE damnfinebrew_db;

CREATE TABLE hops (
	id INT NOT NULL AUTO_INCREMENT,
	beer_id INT NOT NULL,
	list_order TINYINT,
	hop VARCHAR(200),
	amount VARCHAR(30),
	style VARCHAR(30),
	timing VARCHAR(30),
	used VARCHAR(30),
	PRIMARY KEY( id )
) ENGINE=InnoDB;


# MacGreggors Brew Pale Ale

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (1, 1, 'Cascade', '2 oz.', 'Pellet', '60 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (1, 2, 'Citra', '1 oz.', 'Pellet', '5 mins.', 'Boil');


# Lights Out Black IPA

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (2, 1, 'Magnum', '1 oz.', 'Pellet', '60 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (2, 2, 'Simcoe', '1 oz.', 'Pellet', '20 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (2, 3, 'Simcoe', '1 oz.', 'Pellet', '5 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (2, 4, 'Cascade', '2 oz.', 'Pellet', '5-7 Days', 'Dry Hop');


# Single C Chocolate Porter

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (3, 1, 'Fuggles', '0.5 oz.', 'Pellet', '60 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (3, 2, 'Fuggles', '0.5 oz.', 'Pellet', '30 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (3, 3, 'Cascade', '0.5 oz.', 'Pellet', '5 mins.', 'Boil');


# Double C Chocolate Cherry Porter

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (4, 1, 'Fuggles', '0.5 oz.', 'Pellet', '60 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (4, 2, 'Fuggles', '0.5 oz.', 'Pellet', '30 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (4, 3, 'Cascade', '0.5 oz.', 'Pellet', '5 mins.', 'Boil');


# Triple C Chocolate Cherry Chili Porter

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (5, 1, 'Fuggles', '0.5 oz.', 'Pellet', '60 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (5, 2, 'Fuggles', '0.5 oz.', 'Pellet', '30 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (5, 3, 'Cascade', '0.5 oz.', 'Pellet', '5 mins.', 'Boil');


# Rye Raven Rye Pale Ale

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (6, 1, 'Columbus', '.25 oz.', 'Pellet', '60 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (6, 2, 'Columbus', '.25 oz.', 'Pellet', '30 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (6, 3, 'Amarillo', '.5 oz.', 'Pellet', '3 days', 'Dry Hop');


# Transfusion Bloody Beer

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (7, 1, 'Hops', 'Some', 'Pellet', 'Yes', 'Hopping');


# Cold! Refreshing! Grapefruit IPA

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (8, 1, 'Simcoe', '1 oz.', 'Pellet', '60 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (8, 2, 'Cascade', '0.5 oz.', 'Pellet', '30 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (8, 3, 'Amarillo', '0.4 oz.', 'Pellet', '5 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (8, 4, 'Cascade', '0.4 oz.', 'Pellet', '5 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (8, 5, 'Simcoe', '0.4 oz.', 'Pellet', '5 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (8, 6, 'Amarillo', '0.4 oz.', 'Pellet', '7 days', 'Dry Hop');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (8, 7, 'Cascade', '0.4 oz.', 'Pellet', '7 days', 'Dry Hop');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (8, 8, 'Simcoe', '0.4 oz.', 'Pellet', '7 days', 'Dry Hop');


# Penny Weize Lb. Foolish

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (9, 1, 'Perle', '0.8 oz.', 'Pellet', '60 mins.', 'Boil');

INSERT INTO hops (beer_id, list_order, hop, amount, style, timing, used)
VALUES (9, 2, 'Hallertau', '0.4 oz.', 'Pellet', '5 mins.', 'Boil');