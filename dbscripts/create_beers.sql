USE damnfinebrew_db;

CREATE TABLE beers (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(128) NOT NULL,
	label_image VARCHAR(50) NOT NULL,
	abv DECIMAL(2,1),
	ibu SMALLINT,
	srm TINYINT,
	highlight_color VARCHAR(7) NOT NULL,
	description VARCHAR(10000) NOT NULL,
	PRIMARY KEY( id )
) ENGINE=InnoDB;