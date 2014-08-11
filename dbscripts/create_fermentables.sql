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