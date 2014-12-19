USE damnfinebrew_db;

CREATE TABLE yeasts (
	id INT NOT NULL AUTO_INCREMENT,
	beer_id INT NOT NULL,
	list_order TINYINT,
	name VARCHAR(200),
	company VARCHAR(200),
	style VARCHAR(30),
	PRIMARY KEY( id )
) ENGINE=InnoDB;


# MacGreggors Brew Pale Ale

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (1, 1, 'BRY-97', 'Danstar', 'Dry');


# Lights Out Black IPA

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (2, 1, 'BRY-97', 'Danstar', 'Dry');


# Single C Chocolate Porter

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (3, 1, 'British Ale 1098', 'Wyeast', 'Liquid');


# Double C Chocolate Cherry Porter

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (4, 1, 'British Ale 1098', 'Wyeast', 'Liquid');


# Triple C Chocolate Cherry Chili Porter

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (5, 1, 'British Ale 1098', 'Wyeast', 'Liquid');


# Rye Raven Rye Pale Ale

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (6, 1, 'American Ale WLP060', 'White Labs', 'Liquid');


# Transfusion Bloody Beer

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (7, 1, 'Ale Yeast', 'Yes', 'Cellular');


# Cold! Refreshing! Grapefruit IPA

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (8, 1, 'California Ale Yeast WLP001', 'White Labs', 'Liquid');


# Penny Weize Lb. Foolish

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (9, 1, 'Bavarian Wheat Blend 3056', 'Wyeast', 'Liquid');


# MacGreggors Brew: Fall Classic

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (10, 1, 'American Ale 1056', 'Wyeast', 'Liquid');

# Sasquatch Piss

INSERT INTO yeasts (beer_id, list_order, name, company, style)
VALUES (11, 1, 'San Diego Super WLP090', 'Wyeast', 'Liquid');